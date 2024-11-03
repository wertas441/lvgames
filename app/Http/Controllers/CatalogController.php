<?php

namespace App\Http\Controllers;

use App\Models\Games;
use Faker\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CatalogController extends Controller
{
    public function index(): View
    {
        $allGames = Games::all();
        $user = auth()->user();
        return view('catalog', compact('user'), compact('allGames'));
    }

    public function create(): View
    {
        return view('make-games');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'genre' => 'required',
            'date' => 'required',
            'about' => 'required',
            'price' => 'required',
            'developer' => 'required',
            'url' => 'required',
            'publisher' => 'required',
            'activation' => 'required',
            'system' => 'required',
            'typeof' => 'required',
        ]);

        $systems = json_encode($request ->input('system'));
        $genre = json_encode($request ->input('genre'));

        Games::create([
            'name' =>$request ->input('name'),
            'genre' => $genre ,
            'date' => $request ->input('date'),
            'about' => $request ->input('about'),
            'price' => $request ->input('price'),
            'developer' => $request ->input('developer'),
            'url' => $request ->input('url'),
            'publisher' => $request ->input('publisher'),
            'activation' => $request ->input('activation'),
            'system' => $systems,
            'typeof' => $request ->input('typeof'),
        ]);


        return redirect() -> route('catalog-page');
    }


    public function show($id): Factory | View
    {
        $game = Games::find($id);
        return view('show', compact('game'));
    }


    public function destroy($id): RedirectResponse
    {
        $destroy = Games::find($id);

        if($destroy){
            $destroy->delete();
            return redirect() -> route('catalog-page');
        } else{
            return redirect()->route('catalog-page') -> with('errors','Такой товар не найден');
        }
    }

    public function edit($id): View
    {
        $game = Games::find($id);
        return view('edit-game', compact('game'));
    }
    public function update(Request $request, $id): RedirectResponse
    {
        $updateValidate = $request->validate([
            'name' => 'required',
            'genre' => 'required',
            'date' => 'required',
            'about' => 'required',
            'price' => 'required',
            'developer' => 'required',
            'url' => 'required',
            'publisher' => 'required',
            'activation' => 'required',
            'system' => 'required',
            'typeof' => 'required',
        ]);

        $updateGame = Games::find($id);
        $updateGame->update($updateValidate);
        return redirect() -> route('catalog-page');

    }


}
