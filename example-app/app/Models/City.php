<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'city';

    protected $fillable = [
        'name',
    ];

//    public function busStops()
//    {
//        return $this->hasMany(BusStop::class, 'city_id', 'id');
//    }

    protected $primaryKey = 'id';
//    use HasFactory;
}
