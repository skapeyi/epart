@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>E-Information</h2>
            </div>
        </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <h3>Education & Skill Development</h3>
        </div>

        @foreach( $educ as $item)
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h5>{{$item['title']}}</h5>
                    </div>
                    <div class="panel-body">
                        {!! substr($item['content'],0, 500) !!} [.........]
                    </div>
                    <div class="panel-footer" style="min-height: 50px;">

                        <div class="btn-group pull-right">
                            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-comments"></i> {{$item['click_count']}} views</a>
                            <a href="information/{{$item['id']}}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View details</a>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <h3>Health & Wellbeing</h3>
        </div>

        @foreach( $health as $item)
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h5>{{$item['title']}}</h5>
                    </div>
                    <div class="panel-body">
                        {!! substr($item['content'],0, 500) !!} [.........]
                    </div>
                    <div class="panel-footer" style="min-height: 50px;">

                        <div class="btn-group pull-right">
                            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-comments"></i> {{$item['click_count']}} views</a>
                            <a href="information/{{$item['id']}}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View details</a>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <h3>Economic Development</h3>
        </div>

        @foreach( $econ as $item)
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h5>{{$item['title']}}</h5>
                    </div>
                    <div class="panel-body">
                        {!! substr($item['content'],0, 500) !!} [.........]
                    </div>
                    <div class="panel-footer" style="min-height: 50px;">

                        <div class="btn-group pull-right">
                            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-comments"></i> {{$item['click_count']}} views</a>
                            <a href="information/{{$item['id']}}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View details</a>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <h3>Other</h3>
        </div>

        @foreach( $other as $item)
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h5>{{$item['title']}}</h5>
                    </div>
                    <div class="panel-body">
                        {!! substr($item['content'],0, 500) !!} [.........]
                    </div>
                    <div class="panel-footer" style="min-height: 50px;">

                        <div class="btn-group pull-right">
                            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-comments"></i> {{$item['click_count']}} views</a>
                            <a href="information/{{$item['id']}}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View details</a>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    </div>


@endsection
