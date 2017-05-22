@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-2">
			<h1>All radio topics</h1>
			<div class="panel panel-primary">
                <div class="row">
                    <div class="col-md-2 col-md-offset-9" style="margin-top: 15px;">

                            <a href="/addradiotopic" class="btn btn-default">New Topic</a>

                    </div>
                </div>
                <div class="panel-body">
                   <table class="table table-responsive table-striped" id="topics-table">
                       <thead>
                       <tr>                           
                           <th>Date created</th>
                           <th>Topic</th>
                           <th>Description</th>
                           <th>Station name</th>
                           <th>Actions</th>
                       </tr>
                       </thead>                      

                   </table>
                </div>
            </div>

		</div>

	</div>	
</div>

@endsection
@push('scripts')
<script type="text/javascript">
  jQuery(document).ready(function ($) {
      $('#topics-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: '{!! url('get_radiotopics') !!}',
          columns: [
            { data: 'created_at', name: 'created_at'},
            { data: 'title', name: 'title'},
            { data: 'description', name: 'description' },
            { data: 'station_name', name: 'station_name' },          
            { data: 'actions', name: 'actions', orderable: false, searchable: false},
          ]
        });
    });
</script>

@endpush