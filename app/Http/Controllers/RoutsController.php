<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class RoutsController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function registerP(){
        return view('register');
    }

    public function loginP(){
        return view('login');
    }

    public function catalog(){
        return view('catalog');
    }

    public function guarantee(){
        return view('guarantee');
    }

    public function reviews(){
        return view('reviews');
    }


}
