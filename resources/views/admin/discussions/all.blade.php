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
            <table class="table table-striped" id="discussions-table">
                <thead>
                <tr>                    
                    <th>Title</th>
                    <th>Category</th>
                    <th>Total views</th>
                    <th>Approved</th>
                    <th>Created</th>
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
      $('#discussions-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: '{!! url('get_discussions') !!}',
          columns: [
            { data: 'title', name: 'title' },
            { data: 'category', name: 'category' },
            { data: 'click_count', name: 'click_count'},
            { data: 'approved', name: 'approved'},
            { data: 'created_at', name: 'created_at'},
            {data: 'actions', name: 'actions', orderable: false, searchable: false}

          ]
        });
    });
</script>
@endpush
