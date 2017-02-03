<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Services\DataTable;
use Illuminate\Foundation\Auth\User;
use App\Topic;
use App\Comment;

class AdministratorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function users(){
        $users = User::all()->toArray();
        return view('admin.users', compact('users'));
    }

    public function getUsers(){
        return Datatables::of(User::query())->make(true);
    }

   


    public function topics(){
        $topics = Topic::all()->toArray();
        return view('admin.topics',compact('topics'));
    }

    public function comments(){
        $comments = Comment::all()->toArray();
        return view('admin.comments');
    }


}
