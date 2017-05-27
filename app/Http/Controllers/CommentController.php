<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Discussion;
use Input;

class CommentController extends Controller
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
        //Log::info($request);
        if(Auth::check()){
            $user_id = Auth::user()->id;           
        }
        else{
            $user_id = Discussion::ANONYMOUS_USER;
        }
        if(Input::file('evidence')){
          $path = 'uploads/evidence';
          $extension = Input::file('evidence')->getClientOriginalExtension();
          $originalName = Input::file('evidence')->getClientOriginalName();
          $fileName = $originalName;
          Input::file('evidence')->move($path,$fileName);
          $evidence_url = "uploads/evidence/".$fileName;
          }

        $comment = new Comment();
        if(!empty($evidence_url)){
            $comment->evidence_url = $evidence_url;           
        }
        $comment->content = $request->content;
        $comment->user_id = $user_id;
        $comment->discussion_id = $request->discussion_id;

        if($comment->save()){
            $request->session()->flash('status','You comment has been saved and is awaiting approval');

        return redirect('/discussions/'.$request->discussion_id);
        }
        else{
             $request->session()->flash('error','You comment has not been saved and is awaiting approval');

        return redirect('/discussions/'.$request->discussion_id);
        }      


       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
