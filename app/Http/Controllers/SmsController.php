<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\Sms;
use App\Discussion;
use App\Radiotopics;

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
          'to' => $request->t0,
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
}
