@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                <h3>{{$topic['title']}}</h3>
                <div class="panel">
                    <div class="panel-body">
                        {!! $topic['description'] !!}
                    </div>

                </div>

            </div>

            <div class="col-md-10 col-md-offset-2">
                <h3>Responses</h3>

                <div class="panel">
                    <div class="row">
                        <div class="col-md-2 col-md-offset-9" style="margin-top: 15px;">
                            <button class="btn btn-default" id="addResponse" data-toggle="modal" data-target="#myModal">
                                New response
                            </button>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <table class="table table-responsive table-stripped">
                                    <thead>
                                    <tr>
                                        <th>Respondent's Name</th>
                                        <th>Respondent's Phone</th>
                                        <th>Response</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($responses as $response_item)
                                        <tr>
                                            <td>{{$response_item['respon_name']}}</td>
                                            <td>{{$response_item['respon_phone']}}</td>
                                            <td>{{$response_item['response']}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">New Response</h4>
                </div>
                <div class="modal-body">


                    {!! Form::open(action('RadioController@storeRadioresponse')) !!}

                    {!! Form::hidden('topic_id', $topic['id']) !!}

                    <div class="form-group">
                        {!! Form::text('name', 'Name',['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::text('phone', 'Phone',['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::textarea('response', 'response',['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Add topic
                        </button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

@endsection