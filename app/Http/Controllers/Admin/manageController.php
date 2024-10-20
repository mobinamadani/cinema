<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class manageController extends Controller
{
    public function showUser()
    {
        $users = User::all();
        return view('admin.showUser', compact('users'));
    }

    public function showReservation()
    {
        $reservations = Reservation::with('user', 'movie')->get();
        return view('admin.showReservation', compact('reservations'));
    }

}
