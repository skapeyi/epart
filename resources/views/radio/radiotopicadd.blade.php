@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-2">
			<h1>Add new radio topic</h1>
			<div class="panel panel-primary">
                <div class="panel-body">
					{!! Form::open(['action' => 'RadioController@storeRadiotopic','enctype'=>'multipart/form-data']) !!}
                    <div class="form-group">
                        {!! Form::label('title', 'Title'); !!}
                        {!! Form::text('title', '',['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('station_name', 'Station Name'); !!}
                        {!! Form::text('station_name', '',['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('description', 'Description'); !!}
                        {!! Form::textarea('description', '',['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('recording', 'Audio File'); !!}
                        {!! Form::file('recording',['class' => 'form-control','accept' => 'audio/*']) !!}
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Add topic
                        </button>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>

		</div>

	</div>
</div>

@endsection
