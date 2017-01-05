@extends('layouts.admin')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Users</h4>
            <div class="btn-group pull-right">
                <button
                        type="button"
                        class="btn btn-success btn-sm"
                        data-toggle="modal"
                        data-target="#userModal">
                    <i class="glyphicon glyphicon-plus"></i> Add User
                </button>
            </div>
        </div>

        <div class="panel-body">
            <table class="table table-striped" id="users-table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Created</th>

                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
@endsection
