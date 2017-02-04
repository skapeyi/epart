<?php

namespace App\Http\Controllers;

use App\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class InformationController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
    
    public function index(){
        return view('information.index');
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
        Log::info($request);
        $information = Information::create([
            'title' => $request->title,
            'category' => $request->category,
            'content' => $request->content,
            'user_id' => $user_id,
        ]);

        $request->session()->flash('status','Information has been saved and is awaiting approval');

        return redirect('/information');
    }
}
