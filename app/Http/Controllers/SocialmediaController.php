<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialmediaController extends Controller
{
    public function index(){
      return view('social.index');
    }
}
