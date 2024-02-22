<?php

namespace App\Http\Controllers;

use App\Models\Routes;
use Illuminate\Http\Request;

class RoutesController extends Controller
{
    public function index(Request $request){
        $query = Routes::with('bus', 'from_city', 'to_city');
        if ($request->filled('from_city') and $request->filled('to_city')) {
            $query->where('from_id', '=', $request->get('from_city'));
            $query->where('to_id', '=', $request->get('to_city'));
        }
        if ($request->filled('date')) {
            $query->where('time_start', 'like', ''. $request->get('date') .'%');
        }
        $posts = $query->get();
        return $posts;
    }

    public function create(Request $request){
        $data = $this->validate($request,[
            'from_id' =>[],
            'to_id' =>[],
            'busstop_id' =>[],
            'bus_id' =>[],
            'time_start' =>[],
            'time_end'=>[],
        ] );
        Routes::query()->create($data);
    }

    public function delete($id){
        $data = Routes::query()->find($id);
        $data->delete();
    }
}
