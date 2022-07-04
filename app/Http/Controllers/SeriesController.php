<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::all();
        $mensageSuccess = session('mensage.success');
        // $series = Serie::query()->orderBy('nome')->get();
        // $series = Serie::query()->orderBy('nome', 'desc')->get();

        return view('series.index')->with('series', $series)
            ->with('mensageSuccess', $mensageSuccess);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $serie = Serie::create($request->all());

        return to_route('series.index')
            ->with('mensage.success', "Série '$serie->name' foi inserida com sucesso!");
    }

    public function destroy(Serie $series)
    {
        $series->delete();

        return to_route('series.index')
            ->with('mensage.success', "Série '$series->name' foi removida com sucesso!");
    }
}
