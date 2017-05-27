@extends('layouts.admin')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
          Outgoing Messages          
          <button class="btn btn-primary pull-right" id="uploadBulk" data-toggle="modal" data-target="#bulkModal" title="Send Bulk Messages">
              <i class="fa fa-cloud pull-right"></i>
          </button>

        </div>

        <div class="panel-body">
          <table class="table table-bordered" id="outgoing">
            <thead>
              <tr>
                <th>To</th>
                <th>Text</th>
                <th>Status</th>
                <th>Date</th>
              </tr>
            </thead>
          </table>
			  </div>

    </div>
  

    <!-- Bulk SMS Modal -->
    <div id="bulkModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Send Bulk Messages</h4>
                </div>
                <div class="modal-body">
                    {!! Form::open(['action' => 'SmsController@send_bulk_sms', 'files' => true]) !!}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                      {!! Form::label('import_file', 'Import file') !!}
                      <input type="file" name="import_file"  />
                    </div>
                    <div class="form-group">
                        {!! Form::label('message', 'Message') !!}
                        {!! Form::textarea('message', '',['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <button type="submit"  class="btn btn-primary">
                            Send SMS
                        </button>
                    </div>
                    {!! Form::close() !!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('scripts')
  <script>

    jQuery(document).ready(function($) {
      $.noConflict();
      $('#outgoing').DataTable({
          processing: true,
          serverSide: true,
          ajax: '{!! url('get_outgoing_sms') !!}',
          columns: [
            { data: 'to', name: 'to' },
            { data: 'text', name: 'text' },
            { data: 'status', name: 'status' },
            { data: 'created_at', name: 'created_at'}

          ]
      });
    });
  </script>
@endpush
