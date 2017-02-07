@extends('layouts.app')

@section('content')
    <div class="container">

        @if(empty($information_articles))
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h1>No information has been shared yet!</h1>
                    </div>
                </div>
            </div>
        @else
            <div class="row">
                @foreach($information_articles as $item)
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h4><strong>{{ $item['title'] }}</strong></h4>
                                {!! substr($item['content'],0, 500) !!} [...]
                            </div>

                            <div class="panel-footer" style="min-height: 50px;">
                                <div class="btn-group pull-right">
                                    <a href="#" class="btn btn-info btn-sm"><i class="fa fa-download"></i> {{$item['click_count']}} Downloads</a>
                                    <a href="/information/{{$item['id']}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> View details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        @endif




    </div>
@endsection
