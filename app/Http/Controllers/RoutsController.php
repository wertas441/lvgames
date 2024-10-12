<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class RoutsController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function catalog()
    {
        return view('catalog');
    }

    public function guarantee()
    {
        return view('guarantee');
    }

    public function reviews()
    {
        return view('reviews');
    }

    public function profilePage()
    {
        return view('profile');
    }

}
