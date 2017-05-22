@extends('layouts.admin')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Discussion topics</h4>
            <div class="pull-right">

            </div>
        </div>

        <div class="panel-body">
            <table class="table table-striped" id="sms-table">
                <thead>
                <tr>
                    <th>Created At</th>
                    <th>From</th>
                    <th>Text</th>
                    <th>Date Sent</th>
                    <th>Approved</th>
                    <th>Actions</th>
                </tr>
                </thead>             
            </table>
        </div>
    </div>
@endsection

@push('scripts')
<script type="text/javascript">
    jQuery(document).ready(function ($) {
      $('#sms-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: '{!! url('get_smses') !!}',
          columns: [
            { data: 'created_at', name: 'created_at'},
            { data: 'from', name: 'from' },
            { data: 'text', name: 'text' },
            { data: 'date', name: 'date' },
            { data: 'approved', name: 'approved'},            
            { data: 'view', name: 'view', orderable: false, searchable: false},
          ]
        });
    });
</script>
@endpush
