@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>{{$discussion['title']}}</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                  <div class="panel-body">
                      {!! $discussion['content'] !!}
                      
                  </div>
              </div>


            </div>

        </div>

        <div class="row">
            <div class="comments-container">
                <h4>Discussion Comments</h4>
                {!! Form::open(['action' => 'CommentController@store','enctype'=>'multipart/form-data']) !!}
                <div class="form-group">                    
                    <input type="hidden" name="discussion_id" id="discussion_id" value="{{ $discussion['id'] }}">

                    <textarea class="form-control" rows="5" id="content" name="content" placeholder="Add comment here."></textarea>

                    <div class="form-group">
                        {!! Form::label('evidence', 'Evidence'); !!}
                        {!! Form::file('evidence',['accept' => '*']) !!}
                    </div>

                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit comment</button>
                </div>
                {!! Form::close() !!}

                <ul id="comments-list" class="comments-list">
                    @foreach($comments as $comment)
                        <li>
                            <div class="comment-main-level">
                                <!-- Avatar -->
                                <div class="comment-avatar"><img
                                            src="/img/user.png"
                                            alt=""></div>

                                <div class="comment-box">
                                    <div class="comment-head">
                                        <?php $user = \App\User::where('id', $comment['user_id'])->get()->toArray();
                                              \Illuminate\Support\Facades\Log::info($user);
                                              $name = $user[0]['name'];
                                        ?>

                                        <h6 class="comment-name">{{$name}}</h6>
                                        <span><strong>Posted on:</strong> {{$comment['created_at']}}</span>
                                        <!-- <i class="fa fa-reply"></i>
                                        <i class="fa fa-heart"></i> -->
                                    </div>
                                    <div class="comment-content">
                                         {{$comment['content']}}
                                         @if(!empty($comment['evidence_url']))
                                        <div class="row">
                                            <div class="col-md-3">
                                                Evidence:
                                            </div>
                                            <div class="col-md-9">
                                                <a href="/{!! $comment['evidence_url'] !!}" target="_blank">Follow link for more!</a>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach


                </ul>
            </div>
        </div>

        <div class="row">
            <div class="comments-container">
                <h4>SMS Comments</h4>
                <ul id="comments-list" class="comments-list">
                    @foreach($smses as $sms)
                        <li>
                            <div class="comment-main-level">
                                <!-- Avatar -->
                                <div class="comment-avatar"><img
                                            src="/img/user.png"
                                            alt=""></div>

                                <div class="comment-box">
                                    <div class="comment-head">


                                        <h6 class="comment-name">{{substr($sms['from'],0,8)}} **</h6>
                                        <span><strong>Posted on:</strong> {{$sms['date']}}</span>
                                        <i class="fa fa-reply"></i>
                                        <i class="fa fa-heart"></i>
                                    </div>
                                    <div class="comment-content">
                                         {{$sms['text']}}
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach


                </ul>
            </div>
        </div>

    </div>


@endsection
