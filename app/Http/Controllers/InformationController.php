<?php

namespace App\Http\Controllers;

use App\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;

class InformationController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index(){
        $information_articles = Information::all()->toArray();
        return view('information.index', compact('information_articles'));
    }

    public function create(){
        return view('information.create');
    }

    public function store(Request $request)
    {
        if(Auth::check()){
            $user_id = Auth::user()->id;
        }
        else{
            $user_id = Information::ANONYMOUS_USER;
        }
        if(Input::file('attachment_url')->isValid()){
            $path = 'uploads';
            $extension = Input::file('attachment_url')->getClientOriginalExtension();
            $originalName = Input::file('attachment_url')->getClientOriginalName();
            $fileName = $originalName.'.'.$extension;
            Input::file('attachment_url')->move($path,$fileName);
            $attachment_url = "uploads/".$fileName;

            $information = Information::create([
                'title' => $request->title,
                'category' => $request->category,
                'content' => $request->content,
                'user_id' => $user_id,
                'attachment_url' => $attachment_url
            ]);

        }



        $request->session()->flash('status','Information has been saved and is awaiting approval');

        return redirect('/information');
    }

    public function show($id){
        $this->updateCount($id);
        $information = Information::find($id)->toArray();
        return view('information.view',compact('information'));
    }

    public function updateCount($id){
      $information = information::find($id);
      $counter = $information->click_count;
      $counter += 1;
      $information->click_count = $counter;
      $information->save();
    }
}
