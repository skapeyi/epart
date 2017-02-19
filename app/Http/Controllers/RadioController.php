<?php

namespace App\Http\Controllers;

use App\Radioresponses;
use App\Radiotopics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RadioController extends Controller
{
    public function radioTopics(){
        $topics = Radiotopics::where(['deleted' => Radiotopics::STATUS_ACTIVE])->orderBy('id','DESC')->get()->toArray();
        return view('radio.radiotopics', compact('topics'));
    }

    public function addRadiotopic(){
        return view ('radio.radiotopicadd');
    }

    public function storeRadiotopic(Request $request){
        if(Auth::check()){
            $user_id = Auth::user()->id;
            $topic = Radiotopics::create([
                'title' => $request->title,
                'created_by' => $user_id,
                'station_name' => $request->station_name,
                'description' => $request->description
            ]);

            return redirect('/radiotopics');
        }
        else{
            return redirect('/login');
        }


    }

    public function retrieveRadiotopic($id){
        $topic = Radiotopics::findOrFail($id)->toArray();
        $responses = Radioresponses::where(['topic_id'=>$id,'deleted'=> Radioresponses::STATUS_ACTIVE])->orderBy('id','DESC')->get()->toArray();

        return view('radio.radiotopicview', compact('topic','responses'));
    }

    /** Responses */

    public function storeRadioresponse(Request $request){
        if(Auth::check()){
            $user_id = Auth::user()->id;
            $response = Radioresponses::create([
                'created_by' => $user_id,
                'topic_id' => $request->topic_id,
                'respon_name' => $request->name,
                'respon_phone' => $request->phone,
                'response' => $request->response
            ]);

            return redirect('/radiotopics/'.$request->topic_id);
        }
        else{
            return redirect('/login');
        }

    }


}
