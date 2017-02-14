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
                <div class="form-group">
                    <label for="comment">Comment:</label>
                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_discussion_id" id="discussion_id" value="{{ $discussion['id'] }}">
                    <textarea class="form-control" rows="5" id="comment" placeholder="Add comment here."></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" id="post_comment">Submit comment</button>
                </div>
                <ul id="comments-list" class="comments-list">
                    @foreach($comments as $comment)
                        <li>
                            <div class="comment-main-level">
                                <!-- Avatar -->
                                <div class="comment-avatar"><img
                                            src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg"
                                            alt=""></div>

                                <div class="comment-box">
                                    <div class="comment-head">
                                        <?php $user = \App\User::where('id', $comment['user_id'])->get()->toArray();
                                              \Illuminate\Support\Facades\Log::info($user);
                                              $name = $user[0]['name'];
                                        ?>

                                        <h6 class="comment-name">{{$name}}</h6>
                                        <span><strong>Posted on:</strong> {{$comment['created_at']}}</span>
                                        <i class="fa fa-reply"></i>
                                        <i class="fa fa-heart"></i>
                                    </div>
                                    <div class="comment-content">
                                         {{$comment['content']}}
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
