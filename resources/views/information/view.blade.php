@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>{{$information['title']}}</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                  <div class="panel-body">
                      {!! $information['content'] !!}

                      <h3><a href="/{{$information['attachment_url']}}">Download attachment</a> </h3>
                  </div>
              </div>
            </div>
        </div>
    </div>
@endsection
