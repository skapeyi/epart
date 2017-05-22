@extends('layouts.admin')

@section('content')
    <!-- <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-body" id="user-activity" style="min-width: 310px; height: 400px; margin: 0 auto">

                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default" id="user-by-country"
                 style="min-width: 310px; height: 400px; margin: 0 auto">
                <div class="panel-body">

                </div>
            </div>
        </div>
    </div> -->
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Users</h4>
            <div class="btn-group pull-right">
                <button
                        type="button"
                        class="btn btn-success btn-sm"
                        data-toggle="modal"
                        data-target="#userModal">
                    <i class="fa fa-plus"></i> Add User
                </button>
            </div>
        </div>

        <div class="panel-body">
            <table class="table table-striped" id="users-table">
                <thead>
                <tr>  
                    <th>Joined</th>                  
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>                    
                    <th>Action</th>
                </tr>
                </thead>               
            </table>
        </div>
    </div>


    <div class="modal fade" id="userModal" role="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}
                    <div class="modal-header">
                        <button type="button" class="close"
                                data-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Add User</h4>
                    </div>
                    <div class="modal-body">


                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email"
                                       value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required>
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal"
                                style="margin-right: 10px;">Close
                        </button>

                    <span class="pull-right">
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </span>
                    </div>
                </form>
            </div>

        </div>
    </div> 

@endsection
@push('scripts')
<script>
    jQuery(document).ready(function ($) {
      $('#users-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: '{!! url('get_users') !!}',
          columns: [
            { data: 'created_at', name: 'created_at'},
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'phone', name: 'phone' },            
            {data: 'view', name: 'view', orderable: false, searchable: false},
          ]
        });
    });

    $(function () {
    Highcharts.chart('user-activity', {
        title: {
            text: 'User Engagement',
            x: -20 //center
        },
        subtitle: {
            text: 'Based on comments and logins',
            x: -20
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Number in 100'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: ' hundred users'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Uganda',
            data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
        }, {
            name: 'Kenya',
            data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
        },]
    });
});


$(function () {
    Highcharts.chart('user-by-country', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Total registered users'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: 'Users',
            colorByPoint: true,
            data: [{
                name: 'Uganda',
                y: 56.33
            }, {
                name: 'Kenya',
                y: 24.03,
            },]
        }]
    });
});
</script>
@endpush