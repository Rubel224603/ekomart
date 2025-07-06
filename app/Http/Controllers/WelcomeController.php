<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index(){
        return view('website.frontend.home.welcome');
    }
    public function shop(){
        return view('website.frontend.home.shop');
    }
    public function account(){
        return view('website.frontend.home.account');
    }
    public function contact(){
        return view('website.frontend.home.contact');
    }
    public function about(){
        return view('website.frontend.home.about');
    }
}
