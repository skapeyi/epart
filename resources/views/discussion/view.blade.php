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
                    <textarea class="form-control" rows="5" id="comment" placeholder="Logic to be implemented later!"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit comment</button>
                </div>
                {{--<ul id="comments-list" class="comments-list">--}}
                    {{--<li>--}}
                        {{--<div class="comment-main-level">--}}
                            {{--<!-- Avatar -->--}}
                            {{--<div class="comment-avatar"><img--}}
                                        {{--src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg"--}}
                                        {{--alt=""></div>--}}
                            {{--<div class="comment-box">--}}
                                {{--<div class="comment-head">--}}
                                    {{--<h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Stephen Mugabe--}}
                                            {{--</a></h6>--}}
                                    {{--<span>20 minutes ago</span>--}}
                                    {{--<i class="fa fa-reply"></i>--}}
                                    {{--<i class="fa fa-heart"></i>--}}
                                {{--</div>--}}
                                {{--<div class="comment-content">--}}
                                    {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure--}}
                                    {{--laudantium vitae, praesentium optio, sapiente distinctio illo?--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<ul class="comments-list reply-list">--}}
                            {{--<li>--}}
                                {{--<!-- Avatar -->--}}
                                {{--<div class="comment-avatar"><img--}}
                                            {{--src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg"--}}
                                            {{--alt=""></div>--}}

                                {{--<div class="comment-box">--}}
                                    {{--<div class="comment-head">--}}
                                        {{--<h6 class="comment-name"><a href="http://creaticode.com/blog">The Sammie</a>--}}
                                        {{--</h6>--}}
                                        {{--<span>10 minutes ago</span>--}}
                                        {{--<i class="fa fa-reply"></i>--}}
                                        {{--<i class="fa fa-heart"></i>--}}
                                    {{--</div>--}}
                                    {{--<div class="comment-content">--}}
                                        {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et--}}
                                        {{--iure laudantium vitae, praesentium optio, sapiente distinctio illo?--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</li>--}}

                            {{--<li>--}}
                                {{--<!-- Avatar -->--}}
                                {{--<div class="comment-avatar"><img--}}
                                            {{--src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg"--}}
                                            {{--alt=""></div>--}}

                                {{--<div class="comment-box">--}}
                                    {{--<div class="comment-head">--}}
                                        {{--<h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Stephen Mugabe--}}
                                                {{--</a></h6>--}}
                                        {{--<span>8 minutes ago</span>--}}
                                        {{--<i class="fa fa-reply"></i>--}}
                                        {{--<i class="fa fa-heart"></i>--}}
                                    {{--</div>--}}
                                    {{--<div class="comment-content">--}}
                                        {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et--}}
                                        {{--iure laudantium vitae, praesentium optio, sapiente distinctio illo?--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}

                    {{--<li>--}}
                        {{--<div class="comment-main-level">--}}
                            {{--<!-- Avatar -->--}}
                            {{--<div class="comment-avatar"><img--}}
                                        {{--src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg"--}}
                                        {{--alt=""></div>--}}

                            {{--<div class="comment-box">--}}
                                {{--<div class="comment-head">--}}
                                    {{--<h6 class="comment-name"><a href="http://creaticode.com/blog">James Makumbi</a></h6>--}}
                                    {{--<span>2 days ago</span>--}}
                                    {{--<i class="fa fa-reply"></i>--}}
                                    {{--<i class="fa fa-heart"></i>--}}
                                {{--</div>--}}
                                {{--<div class="comment-content">--}}
                                    {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure--}}
                                    {{--laudantium vitae, praesentium optio, sapiente distinctio illo?--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            </div>
        </div>

    </div>


@endsection
