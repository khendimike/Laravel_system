<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PollingStations extends Model
{
    use HasFactory;

    protected $table = 'polling_stations';
    protected $fillable = [
        'polling_station',
        'registered_stations',
    ];
}
