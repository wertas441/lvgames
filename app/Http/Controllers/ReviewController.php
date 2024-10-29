<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ReviewController extends Controller
{

    public function index(): View
    {
        $allReviews = Review::all();
        return view('reviews', compact('allReviews'));
    }


    public function create(): View
    {
        $user = auth()->user();
        return view('make-review', compact('user'));
    }


    public function store(Request $request): RedirectResponse
    {
     $request->validate([
        'name' => ['required','string'],
        'review' =>['required'],
        'stars' => ['required'],
     ]);

     Review::create([
         'name' => $request -> input('name'),
         'review' => $request -> input('review'),
         'stars' => $request -> input('stars'),
     ]);



        return redirect(route('reviews-page'))->with('success', 'Ваш отзыв успешно добавлен!');
    }


}
