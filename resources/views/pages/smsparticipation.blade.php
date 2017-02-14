@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3" >
                <h3>How to participate</h3>
                <ol style="padding-left: 20px;">
                    <li>Instruction on how to use the short code will go here! </li>
                </ol>

            </div>
            <div class="col-md-9">
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
                            <tr>
                                <td>Anonymous</td>
                                <td>Thank you ToroDev for this engaging and timely system.</td>
                                <td>11/Feb/2017</td>
                            </tr>
                            <tr>
                                <td>Anonymous</td>
                                <td>Our road are in a sorry state. They need to be fixed.</td>
                                <td>14/Feb/2017</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection