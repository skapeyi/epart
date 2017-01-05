@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Trending discussion topics</h2>
            </div>
        </div>

        <div class="row">
            @for ($x =1; $x< 5; $x++)
                <div class="col-md-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">Topic name {{$x}}</h4>
                        </div>
                        <div class="panel-body">
                            <p>Vestibulum dignissim vulputate lectus a feugiat. Morbi sollicitudin, quam ac cursus
                                finibus,
                                leo
                                lorem faucibus sapien, vitae interdum justo felis non quam. Vestibulum lobortis eros nec
                                erat
                                pretium, lobortis auctor nibh ultrices.</p>
                        </div>
                        <div class="panel-footer" style="min-height: 50px;">
                            <div class="btn-group pull-right">
                                <a href="#" class="btn btn-default btn-sm" title="Comments"><i
                                            class="fa fa-comment"></i> 36</a>
                                <a href="#" class="btn btn-default btn-sm" title="See topic"><i
                                            class="fa fa-eye"></i></a>

                            </div>
                        </div>
                    </div>

                </div>
            @endfor
        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Newest topics</h2>
            </div>
        </div>

        <div class="row">
            @for ($x =1; $x< 5; $x++)
                <div class="col-md-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">Topic name {{$x}}</h4>
                        </div>
                        <div class="panel-body">
                            <p>Vestibulum dignissim vulputate lectus a feugiat. Morbi sollicitudin, quam ac cursus
                                finibus,
                                leo
                                lorem faucibus sapien, vitae interdum justo felis non quam. Vestibulum lobortis eros nec
                                erat
                                pretium, lobortis auctor nibh ultrices.</p>
                        </div>
                        <div class="panel-footer" style="min-height: 50px;">
                            <div class="btn-group pull-right">
                                <a href="#" class="btn btn-default btn-sm" title="Comments"><i
                                            class="fa fa-comment"></i> 36</a>
                                <a href="#" class="btn btn-default btn-sm" title="See topic"><i
                                            class="fa fa-eye"></i></a>

                            </div>
                        </div>
                    </div>

                </div>
            @endfor
        </div>

    </div>
@endsection
