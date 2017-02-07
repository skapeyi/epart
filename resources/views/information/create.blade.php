@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Add information</h4></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/information') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Title</label>

                            <div class="col-md-10">
                                <input id="name" type="text" class="form-control" name="title" value="{{ old('title') }}" >

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Category</label>

                            <div class="col-md-10">
                                <input id="name" type="text" class="form-control" name="category" value="{{ old('category') }}">

                                @if ($errors->has('category'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Content</label>

                            <div class="col-md-10">
                                <textarea id="name" type="text" class="form-control" name="content" value="{{ old('content') }}"                                      ></textarea>

                                @if ($errors->has('content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('image_url') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Image</label>

                            <div class="col-md-10">
                                <input id="name" type="file"  name="img_url" value="{{ old('img_url') }}"
                                       >

                                @if ($errors->has('img_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('img_url') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('attachment_url') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Attachment( pdf or word document)</label>

                            <div class="col-md-10">
                                <input id="name" type="file"  name="attachment_url" value="{{ old('attachment_url') }}"
                                >

                                @if ($errors->has('attachment_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('attachment_url') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-2">
                                <button type="submit" class="btn btn-primary">
                                    Share information
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector : "textarea",
            plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste"],
            toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        });

    </script>

@endsection