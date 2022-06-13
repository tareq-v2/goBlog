<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.frontend_index');
    }
    public function about(){
        return view('frontend.about');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function privacy(){
        return view('frontend.privacy');
    }
    public function feature(){
        return view('frontend.feature');
    }
}
