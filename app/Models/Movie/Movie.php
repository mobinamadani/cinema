<?php

namespace App\Models\Movie;

use App\Models\Reservation\Reservation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
         'description',
    ];

    public function reservations(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasmany(Reservation::class);
    }



}
