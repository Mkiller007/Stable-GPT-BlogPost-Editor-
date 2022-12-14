<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to my app!';
        return view('pages.index',compact('title'));
        //return view('pages.index', ['title'=>$title]);
        //return view('pages.index')->with('title',$title);
    }
    public function about(){
        $title = 'About us';
        return view('pages.about')->with('title',$title);
    }
    public function services(){
        $title='Services';
        $data = array('title'=>$title,'services'=>['Web design','Programming']);
        return view('pages.services',$data);
    }
}
 