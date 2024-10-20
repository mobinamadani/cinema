<?php

namespace App\Http\Controllers\Reserve;

use App\Http\Controllers\Controller;
use App\Models\Movie\Movie;
use App\Models\Reservation\Reservation;
use Illuminate\Http\Request;

class reservationController extends Controller
{
    public function create()
    {
        $movies = Movie::all();
        return view('Reservation.reservationCreate', compact('movies'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'movie_id' => 'required|exists:movies,id',
        ]);

        Reservation::create([
            'user_id' => auth()->id(),
            'movie_id' => $request->movie_id,
        ]);

        return redirect()->route('reservation.create');
    }

}
