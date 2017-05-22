@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Edit discussion</h4></div>
                <div class="panel-body">
                    {!! Form::model($discussion, ['method'=>'PATCH','route' => ['discussions.update', $discussion]]) !!}

                    <div class="form-group">
                        {!! Form::label('title','Title')!!}
                        {!! Form::text('title', $discussion->title, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('category','Category')!!}
                        {!! Form::select('category', ['educ-and-skills-dev' => 'Education and Skills Development', 'health-and-wellbeing' => 'Health and Well Being','economic-development' => 'Economic Development','others' =>'Others'], null,['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('content','Content')!!}
                        {!! Form::textarea('content', $discussion->content, ['class' => 'form-control']) !!}
                    </div>                    

                    <div class="form-group">
                        {!! Form::label('deleted','Archived?')!!}
                        {!! Form::select('deleted', [0 => 'No', 1 => 'Yes'], null,['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Update',['class' => 'btn btn-primary']) !!}
                    </div>

                    {!! Form::close() !!}

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
