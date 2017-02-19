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
                   <table class="table table-responsive table-striped">
                       <thead>
                       <tr>
                           <th>Topic</th>
                           <th>Date created</th>
                           <th>Station name</th>
                           <th>Actions</th>
                       </tr>
                       </thead>
                       <tbody>
                            @foreach( $topics as $item)
                                <tr>
                                    <td>{{$item['title']}}</td>
                                    <td>{{date('d/M/y',strtotime($item["created_at"]))}}</td>
                                    <td>{{$item['station_name']}}</td>
                                    <td>
                                        <a href="/radiotopics/{{$item['id']}}" title="view"><span class="fa fa-eye"></span></a>
                                    </td>
                                </tr>
                            @endforeach
                       </tbody>

                   </table>
                </div>
            </div>

		</div>

	</div>	
</div>

@endsection