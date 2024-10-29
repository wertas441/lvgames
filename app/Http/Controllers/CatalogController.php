<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CatalogController extends Controller
{
    public function index(): View
    {
        $user = auth()->user();
        return view('catalog', compact('user'));
    }



}
