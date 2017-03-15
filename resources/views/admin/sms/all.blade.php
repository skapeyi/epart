@extends('layouts.admin')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Discussion topics</h4>
            <div class="pull-right">

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
                        <td>{{$item["approved"] = 1 ? "Yes":"No"}}</td>
                        <td>
                            <p data-placement="top" data-toggle="tooltip" title="Delete">
                              <a href="/sms/{{$item['id']}}" class="btn btn-danger btn-xs" title="Edit and Update"> <span class="glyphicon glyphicon-pencil"></span> View</a>

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
