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
            <table class="table table-striped" id="information-table">
                <thead>
                <tr>
                    <th>Created</th>
                    <th>Topic</th>
                    <th>Category</th>
                    <th>Author</th>
                    <th>Total views</th>
                    <th>Actions</th>
                </tr>
                </thead>                
            </table>
        </div>
    </div>
@endsection
@push('scripts')
<script>
jQuery(document).ready(function ($) {
      $('#information-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: '{!! url('get_information') !!}',
          columns: [
            { data: 'created_at', name: 'created_at' },
            {data: 'title', name: 'title'},
            {data: 'category', name:'category'},
            {data: 'user_id', name:'user_id'},
            {data: 'click_count', name: 'click_count'},            
            {data: 'actions', name: 'actions', orderable: false, searchable: false}

          ]
        });
    });
</script>
@endpush