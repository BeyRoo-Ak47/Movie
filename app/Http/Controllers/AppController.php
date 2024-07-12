<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){
        return view('app');
    }
    public function movie($name=null){
        if($name==null){
            return view('movie');
        }
        if($name == "categories"){
            return view('categories');
        }
        else{
            return view('movie_with_name')->with('x',$name);
        }
    }
    public function categories(){
        return view('categories');
    }
    public function movie_with_cat($name=null){
        if($name==null){
            return view('categories');
        }
        else{
            return view('movie_with_cat')->with('x',$name);
        }
    }
}
