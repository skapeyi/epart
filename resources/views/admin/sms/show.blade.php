@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="page-header">
      <h3>Approve SMS</h3>
    </div>

    <div class="row">
      <div class="col-md-10 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-body">
            {!! Form::model($sms, ['method'=>'PATCH','route' => ['sms.update', $sms]]) !!}

            <div class="form-group">
              {!! Form::label('from','From')!!}
              {!! Form::text('from', $sms->from, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
              {!! Form::label('text','Text') !!}
              {!! Form::textarea('text', $sms->text, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
              {!! Form::label('approved','Approved') !!}
              {!! Form::select('approved', [0 => 'Not Approved', 1 => 'Approved'], null,['class' => 'form-control']) !!}
            </div>


            <div class="form-group">
              {!! Form::submit('Submit',['class' => 'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
