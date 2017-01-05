<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Services\DataTable;

class AdministratorController extends Controller
{
    public function users(){

        return view('admin.users');
    }

    public function getUsers(){
        return Datatables::of(User::query())->make(true);
    }

    public function topics(){
        return view('admin.topics');
    }

    public function comments(){
        return view('admin.comments');
    }


}
