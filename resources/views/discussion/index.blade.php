@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Sample topic heading</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p>

                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam est nunc, interdum ornare justo non,
                    fermentum varius diam. In molestie ex quis nisi tincidunt tempor. Etiam vel lorem odio. Nunc laoreet
                    luctus nibh ac vehicula. Pellentesque aliquam pretium tincidunt. Sed volutpat mauris quis rutrum
                    efficitur. Proin vitae orci enim. Integer enim nisl, consequat vel gravida quis, iaculis non arcu.
                    Curabitur lectus magna, vulputate vel libero non, convallis vestibulum leo. Curabitur quis dapibus
                    tellus.</p>

                <p>Fusce eget leo ut velit imperdiet efficitur quis et turpis. Ut efficitur velit ac tellus vulputate
                    rutrum sed vitae ex. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                    inceptos himenaeos. Morbi lobortis elementum turpis, eget accumsan odio malesuada eu. Nullam sed
                    nisi dolor. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis
                    lacinia sapien orci, a pulvinar dolor molestie sit amet. Morbi tincidunt risus at libero
                    sollicitudin, in pretium risus vehicula. Maecenas venenatis sem non nunc vulputate, at rutrum nunc
                    feugiat. Fusce placerat, nibh non scelerisque dapibus, erat urna pulvinar tellus, quis posuere lorem
                    dui ut sapien. Pellentesque sed quam in odio suscipit semper a eget risus.</p>

                <p>Vestibulum ut pharetra mauris. Donec odio nisi, convallis sed viverra non, accumsan vitae ex.
                    Praesent tristique vel leo at rhoncus. Sed auctor augue eu orci pellentesque consequat. Pellentesque
                    ante ligula, volutpat eu leo at, vestibulum pharetra massa. In hac habitasse platea dictumst. Donec
                    finibus molestie accumsan. Etiam vel nunc ipsum.</p>

                <p>Aenean nec elementum nulla, ac tempus velit. Nulla auctor erat id tincidunt luctus. Fusce
                    sollicitudin libero sed nunc fringilla, eget mollis tortor venenatis. Duis quis libero ac purus
                    mollis lacinia sed in odio. Aenean metus quam, placerat et arcu eu, varius gravida magna. Aenean leo
                    nunc, gravida a feugiat id, suscipit ac mi. Vestibulum id scelerisque velit.</p>


            </div>

        </div>

        <div class="row">
            <div class="comments-container">
                <h1>Topic discussion</h1>
                <div class="form-group">
                    <label for="comment">Comment:</label>
                    <textarea class="form-control" rows="5" id="comment" placeholder="Add comment"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit comment</button>
                </div>
                <ul id="comments-list" class="comments-list">
                    <li>
                        <div class="comment-main-level">
                            <!-- Avatar -->
                            <div class="comment-avatar"><img
                                        src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg"
                                        alt=""></div>
                            <div class="comment-box">
                                <div class="comment-head">
                                    <h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Stephen Mugabe
                                            </a></h6>
                                    <span>20 minutes ago</span>
                                    <i class="fa fa-reply"></i>
                                    <i class="fa fa-heart"></i>
                                </div>
                                <div class="comment-content">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure
                                    laudantium vitae, praesentium optio, sapiente distinctio illo?
                                </div>
                            </div>
                        </div>

                        <ul class="comments-list reply-list">
                            <li>
                                <!-- Avatar -->
                                <div class="comment-avatar"><img
                                            src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg"
                                            alt=""></div>

                                <div class="comment-box">
                                    <div class="comment-head">
                                        <h6 class="comment-name"><a href="http://creaticode.com/blog">The Sammie</a>
                                        </h6>
                                        <span>10 minutes ago</span>
                                        <i class="fa fa-reply"></i>
                                        <i class="fa fa-heart"></i>
                                    </div>
                                    <div class="comment-content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et
                                        iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                    </div>
                                </div>
                            </li>

                            <li>
                                <!-- Avatar -->
                                <div class="comment-avatar"><img
                                            src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg"
                                            alt=""></div>

                                <div class="comment-box">
                                    <div class="comment-head">
                                        <h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Stephen Mugabe
                                                </a></h6>
                                        <span>8 minutes ago</span>
                                        <i class="fa fa-reply"></i>
                                        <i class="fa fa-heart"></i>
                                    </div>
                                    <div class="comment-content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et
                                        iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <div class="comment-main-level">
                            <!-- Avatar -->
                            <div class="comment-avatar"><img
                                        src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg"
                                        alt=""></div>

                            <div class="comment-box">
                                <div class="comment-head">
                                    <h6 class="comment-name"><a href="http://creaticode.com/blog">James Makumbi</a></h6>
                                    <span>2 days ago</span>
                                    <i class="fa fa-reply"></i>
                                    <i class="fa fa-heart"></i>
                                </div>
                                <div class="comment-content">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure
                                    laudantium vitae, praesentium optio, sapiente distinctio illo?
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>


@endsection
