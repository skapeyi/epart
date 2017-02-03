<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
