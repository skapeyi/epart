<?php

namespace App\Http\Controllers;

use Log;
use Excel;
use App\Sms;
use Datatables;
use App\BulkLog;
use App\Discussion;
use App\Radiotopics;
use App\Http\Controllers\AfricasTalkingGateway;

use Illuminate\Http\Request;

class SmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Log::info($request);
        $sms = Sms::create([
          'from' => $request->from,
          'to' => $request->to,
          'text' => $request->text,
          'date' => $request->date,
          'aft_id' => $request->id,
          'link_id' => $request->link_id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sms = Sms::find($id);
        $discussions = Discussion::all(['id', 'title']);
        $radiotopics = Radiotopics::all(['id','title']);
        return view('admin.sms.show',compact('sms','discussions','radiotopics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sms = Sms::find($id);
        $sms->approved = $request->approved;
        if(!empty($request->discussion_id)){
            $sms->discussion_id = $request->discussion_id;
        }

        if(!empty($request->radiotopic_id)){
            $sms->radiotopic_id = $request->radiotopic_id;
        }
        
        $sms->save();
        return redirect('/admin/sms');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function get_outgoing_sms(){
        return Datatables::of(Sms::where(['type' => 'outgoing']))->make(true);
    }

    public function outgoingsms(){
        return view('sms.outgoing');
    }

    public function send_bulk_sms(Request $request){
      $username   = env('AIT_USERNAME');
      $apikey     = env('AIT_KEY');
      $recipients = "";

      if ($request->hasFile('import_file')){
        $path = $request->file('import_file')->getRealPath();
              $data = Excel::load($path, function($reader) {})->get();
        
              if(!empty($data)){
          foreach ($data->toArray() as $key => $value) {
            if(!empty($value)){
              foreach ($value as $v) {
                //Some cells can be empty, so we need to eliminate these.
                if(strlen($v['phone'] >1)){
                  $recipients = $recipients.',+256'.$v['phone'];
                }
                
              }
            }
          }
        }
        $recipients = substr($recipients, 1);
        $message = $request->message;

        $log = new BulkLog();
        $log->message = $message;
        $log->recipients = $recipients;
        $log->save();

        $gateway    = new AfricasTalkingGateway($username, $apikey);
        $results = $gateway->sendMessage($recipients, $message);

        foreach($results as $result) {
          $sms = Sms::create([
            'from' => 'ToroDev',
            'to' => $result->number,
            'text' => $request->message,
            'type' => 'outgoing',
            'status' => $result->status,
            'message_id' => $result->messageId,
            'cost' => $result->cost
          ]);
        }



        return redirect('/admin/outgoingsms');

      }
      else{
        flash("No file attached saved","success");
        return redirect('/admin/outgoingsms');
      }
    }

    public function ait_delivery_callback(Request $request){
      Log::info($request);
      $message = Sms::where(['message_id' => $request['message_id']])->first();
      $message->status = $request['status'];
      $message->save();
    }

}
