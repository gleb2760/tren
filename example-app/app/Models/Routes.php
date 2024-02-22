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
        'model'
    ];

    public function bus()
    {
        return $this->hasMany(
            Bus::class,
            'id',
            'bus_id',
        );
    }

    public function from_city()
    {
        return $this->hasMany(
            City::class,
            'id',
            'from_id',
        );
    }

    public function to_city()
    {
        return $this->hasMany(
            City::class,
            'id',
            'to_id',
        );
    }
//    use HasFactory;
}
