<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusStop extends Model
{
    protected $table = 'bus_stop';
    protected $fillable = [
        'name',
        'city_id',
        'coordinat',
    ];


//    use HasFactory;
}
