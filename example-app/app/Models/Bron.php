<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bron extends Model
{
    protected $table = 'bron';
    protected $fillable = [
        'client_name',
        'phone',
        'status',
        'options',
        'route_id',
    ];

    public function route ()
    {
        $bb = $this->hasMany(
            Routes::class,
            'id',
            'route_id',
        );

        return $bb;
    }

//    use HasFactory;
}
