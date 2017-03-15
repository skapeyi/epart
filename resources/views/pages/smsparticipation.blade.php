@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-5" >
                <h5>To participate through SMS please follow the instructions below. Participation is free of charge.</h5>
                <ol style="padding-left: 20px;">
                    <li>Go to your message and create new message.  </li>
                    <li>Type MML leave a space Type your message. </li>
                    <li>Send the message to 6115.</li>
                </ol>
                <p><stong>We will receive your message and have it included in our discussion.Thank You  </strong></p>

            </div>
            <div class="col-md-7">
                <h3>Received messages</h3>

                <div class="panel panel-default">
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Message</th>
                                <th>Date Received</th>
                            </tr>
                            </thead>
                            <tbody>
                              @foreach($smses as $sms)
                                <tr>
                                    <td>{{substr($sms['from'],0,9)}} **</td>
                                    <td>{{$sms['text']}}</td>
                                    <td>{{$sms['date']}}</td>
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
