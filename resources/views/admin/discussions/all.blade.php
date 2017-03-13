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
                    <th>Title</th>
                    <th>Category</th>
                    <th>Author</th>
                    <th>Total views</th>
                    <th>Approved</th>
                    <th>Created</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @php
                $i = 1
                @endphp

                @foreach($discussions as $discussion)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$discussion["title"]}}</td>
                        <td>{{$discussion["category"]}}</td>
                        <td>{{$discussion["user_id"]}}</td>
                        <td>{{$discussion["click_count"]}}</td>
                        <td>{{$discussion["approved"]}}</td>
                        <td>{{date('d/M/y',strtotime($discussion["created_at"]))}}</td>
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
