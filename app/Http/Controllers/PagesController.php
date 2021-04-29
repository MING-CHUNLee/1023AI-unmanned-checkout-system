<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function index(){
        $title ="Welcome to Laraval!";
        return view('pages.index')->with('title',$title);
    }


    public function about(){
        return view('pages.about');
    }

    public function services(){
        $data=array(
            'title'=>'Service',
            'services'=> ['Web Design','Programing','SEO']
        );
        return view('pages.services')->with($data);
    }
}
