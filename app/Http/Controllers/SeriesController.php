<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::all();
        // $series = Serie::query()->orderBy('nome')->get();
        // $series = Serie::query()->orderBy('nome', 'desc')->get();

        return view('series.index', compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nameSerie = $request->input("name");
        $serie = new Serie();
        $serie->name = $nameSerie;
        $serie->save();

        return redirect('/series');


    }
}
