<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routes extends Model
{
    protected $table = 'routes';
    protected $fillable = [
        'from_id',
        'to_id',
        'busstop_id',
        'bus_id',
        'time_start',
        'time_end',
    ];
//    use HasFactory;
}
