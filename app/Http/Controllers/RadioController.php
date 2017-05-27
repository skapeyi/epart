<?php

namespace App\Http\Controllers;

use App\Radioresponses;
use App\Radiotopics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

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
        ini_set('post_max_size', '300M'); 
        ini_set('upload_max_filesize', '300M'); 
        
        if(Auth::check()){
            if(Input::file('recording')){
              $path = 'uploads/audio';
              $extension = Input::file('recording')->getClientOriginalExtension();
              $originalName = Input::file('recording')->getClientOriginalName();
              $fileName = $originalName;
              Input::file('recording')->move($path,$fileName);
              $audio_url = "uploads/audio/".$fileName;
          }

            $user_id = Auth::user()->id;
            $topic = new Radiotopics();
            if(!empty($audio_url)){
                $topic->audio_url = $audio_url;

            }
            $topic->title = $request->title;
            $topic->created_by = $user_id;
            $topic->station_name = $request->station_name;
            $topic->description = $request->description;

            if($topic->save()){
                return redirect('/radiotopics');
            }
            
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
