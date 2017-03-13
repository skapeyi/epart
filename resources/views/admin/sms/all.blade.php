@extends('layouts.admin')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Discussion topics</h4>
            <div class="pull-right">
                    <a href="/discussions/create" class="btn btn-success" role="button">Start Discussion</a>
                </button>
            </div>
        </div>

        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Text</th>
                    <th>Date Sent</th>
                    <th>Approved</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @php
                $i = 1
                @endphp

                @foreach($sms as $item)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$item["from"]}}</td>
                        <td>{{$item["to"]}}</td>
                        <td>{{$item["text"]}}</td>
                        <td>{{$item["date"]}}</td>
                        <td>{{$item["approved"]}}</td>
                        <td>
                            <p data-placement="top" data-toggle="tooltip" title="Delete">
                                <button class="btn btn-danger btn-xs" data-title="Delete"><span
                                            class="glyphicon glyphicon-trash"></span> Delete
                                </button>
                            </p>
                        </td>
                    </tr>
                    @php
                    $i++;
                    @endphp
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
