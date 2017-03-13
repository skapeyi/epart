<?php

namespace App\Http\Controllers;

use App\Discussion;
use App\Information;
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
        return view('admin.users.all', compact('users'));
    }

    public function getUsers(){
        return Datatables::of(User::query())->make(true);
    }


    public function discussions(){
        $discussions = Discussion::all()->toArray();
        return view('admin.discussions.all',compact('discussions'));
    }

    public function information(){
        $information = Information::all()->toArray();
        return view('admin.information.all', compact('information'));
    }

    public function sms(){
        $sms = Sms::all()->toArray();
        return view('admin.sms.all',compact('sms'));
    }


}
