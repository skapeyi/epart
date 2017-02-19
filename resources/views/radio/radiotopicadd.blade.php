@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-2">
			<h1>Add new radio topic</h1>
			<div class="panel panel-primary">
                <div class="panel-body">
                    {!! Form::open(action('RadioController@storeRadiotopic')) !!}

                    <div class="form-group">
                        {!! Form::text('title', 'Title',['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::text('station_name', 'Radio Station',['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::textarea('description', 'Description',['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Add topic
                        </button>
                    </div>
                </div>
            </div>

		</div>

	</div>	
</div>

@endsection