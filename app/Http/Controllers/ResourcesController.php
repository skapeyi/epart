<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datatables;
use App\User;
use App\Discussion;
use App\Information;
use App\Sms;
use App\Radiotopics;


class ResourcesController extends Controller
{
    public function get_users(){
        return Datatables::of(User::query())->orderby('id','desc')
        ->addColumn('view', function($user){
                return '<a href ="users/'.$user->id.'"><i class="fa fa-eye"></i></a> ';})
        ->make(true);
    }

    public function get_discussions(){
    	return Datatables::of(Discussion::query())->orderby('id','desc')
    	->addColumn('actions', function($discussion){
    		return '<a title="View" href ="/discussions/'.$discussion->id.'"><i class="fa fa-eye"></i></a> <a title="Edit" href ="/discussions/'.$discussion->id.'/edit"><i class="fa fa-pencil"></i></a> ';
    	})->make(true);
    }

    public function get_information(){
    	return Datatables::of(Information::query())
    	->addColumn('actions', function($information){
    		return '<a href ="/information/'.$information->id.'"><i class="fa fa-eye"></i></a>';
    	})->make(true);
    }

    public function get_smses(){
    	return Datatables::of(Sms::query())
        ->addColumn('view', function($item){
            return '<a href ="/sms/'.$item->id.'"><i class="fa fa-eye"></i></a>';
        })->make(true);
    }

    public function get_radiotopics(){
    	return Datatables::of(Radiotopics::query())
    	->addColumn('actions', function($item){
    		return '<a href ="/radiotopics/'.$item->id.'"><i class="fa fa-eye"></i></a>';
    	})->make(true);
    }
}
