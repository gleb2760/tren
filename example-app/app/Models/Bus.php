<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $table = 'bus';

    protected $fillable = [
        'number',
        'count_place',
        'model',
        'ac'
    ];

    protected $primaryKey = 'id';
//    use HasFactory;
}
