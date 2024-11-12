<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Movie\AddMovieRequest;
use App\Models\Movie\Movie;
use Illuminate\Http\Request;

class movieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('admin.moviesIndex', compact("movies"));
    }

    public function create()
    {
        return view('admin.moviesCreate');
    }

    public function store(AddMovieRequest $request)
    {
        $movie = $request->validated();
        Movie::query()->create($movie);

        return redirect()->route('movie.index');
    }

    public function edit(int $id)
    {
        $movie = Movie::query()->where("id", $id)->first();
        return view('admin.moviesEdit', compact('movie'));
    }

    public function update(AddMovieRequest $request, int $id)
    {
        $findMovie = Movie::query()->findOrFail($id);
        $findMovie->update($request->validated());

        return redirect()->route('movie.index');
    }

    public function destroy(int $id)
    {
        $movie = Movie::query()->findOrFail($id);
        $movie->delete();
        return redirect()->route('movie.index');
    }


}
