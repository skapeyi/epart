<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Discussion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Sms;

class DiscussionController extends Controller
{
 /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educ = Discussion::where(['category' => 'educ-and-skills-dev'])->get()->toArray() ;
        $health = Discussion::where(['category' => 'health-and-wellbeing'])->get()->toArray() ;
        $econ =Discussion::where(['category' => 'economic-development'])->get()->toArray() ;
        $other = Discussion::where(['category' => 'others'])->get()->toArray();

        return view('discussion.index', compact('educ','health','econ','other'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('discussion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check()){
            $user_id = Auth::user()->id;
        }
        else{
            $user_id = Discussion::ANONYMOUS_USER;
        }

        $discussion = Discussion::create([
            'title' => $request->title,
            'category' => $request->category,
            'content' => $request->content,
            'user_id' => $user_id,
        ]);

        $request->session()->flash('status','You topic has been saved and is awaiting approval');

        return redirect('/discussions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->updateCount($id);
        $discussion = Discussion::findOrFail($id)->toArray();
        $comments = Comment::where(['discussion_id' => $id])->latest()->get()->toArray();
        $smses = Sms::where(['discussion_id' => $id])->latest()->get()->toArray();
        return view('discussion.view', compact('discussion','comments','smses'));
    }

    public function updateCount($id){
      $discussion = Discussion::find($id);
      $counter = $discussion->click_count;
      $counter +=1;
      $discussion->click_count = $counter;
      $discussion->save();
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
        //
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

    public function sample(){
        return view('topic.sample');
    }
}
