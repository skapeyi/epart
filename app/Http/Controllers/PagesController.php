<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Form;
use App\Sms;

class PagesController extends Controller
{

    public function index(){
        return view('home');
    }

    public function faq(){
    	return view('pages.faq');
    }

    public function privacy(){
    	return view('pages.privacy');
    }

    public function terms(){
    	return view('pages.terms');
    }

    public function contact(){
    	return view('pages.contact');
    }

    public function sample(){
        return view('discussion.sample');
    }

    public function smsparticipation(){
        $smses = Sms::where(['approved' => 1])->orderBy('id','DESC')->get()->toArray();
        return view ('pages.smsparticipation', compact('smses'));
    }

}
