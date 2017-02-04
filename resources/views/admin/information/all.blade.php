@extends('layouts.admin')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Discussion topics</h4>
            <div class="pull-right">
                <a href="/information/create" class="btn btn-success" role="button">Add information</a>
                </button>
            </div>
        </div>

        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Topic</th>
                    <th>Category</th>
                    <th>Author</th>
                    <th>Total views</th>
                    <th>Created</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @php
                $i = 1
                @endphp

                @foreach($information as $item)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$item["title"]}}</td>
                        <td>{{$item["category"]}}</td>
                        <td>{{$item["user_id"]}}</td>
                        <td>{{$item["click_count"]}}</td>
                        <td>{{date('d/M/y',strtotime($item["created_at"]))}}</td>
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
