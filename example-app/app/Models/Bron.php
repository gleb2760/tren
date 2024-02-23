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

    public function bronWithFillter ($request)
    {
        $query = Bron::with('route');
        if ($request->filled('date')){
            $query = Bron::with('route')->whereHas('route', function ($query) use ($request) {
                $query->where("time_start", "like", "".$request->get("date")."%");
                if ($request->filled('from_city') && $request->filled('to_city')){
                    $query->where("from_id", "=", $request->get("from_city"));
                    $query->where("to_id", "=", $request->get("to_city"));
                }
            });
        }
        $posts = $query->get();
        return $posts;
    }

//    use HasFactory;
}
