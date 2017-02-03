@extends('layouts.admin')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Discussion topics</h4>
            <div class="btn-group pull-right">
                <button
                        type="button"
                        class="btn btn-success btn-sm"
                        data-toggle="modal"
                        data-target="#userModal">
                    <i class="glyphicon glyphicon-plus"></i> Add Topic
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

                @foreach($topics as $topic)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$topic["title"]}}</td>
                        <td>{{$topic["category"]}}</td>
                        <td>{{$topic["author_id"]}}</td>
                        <td>{{$topic["views"]}}</td>
                        <td>{{date('d/M/y',strtotime($topic["created_at"]))}}</td>
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
