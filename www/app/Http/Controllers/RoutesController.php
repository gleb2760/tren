<?php

namespace App\Http\Controllers;

use App\Models\Routes;
use Illuminate\Http\Request;

class RoutesController extends Controller
{
    public function index(){
        return Routes::all();
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
