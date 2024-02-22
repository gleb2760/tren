<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\BusStop;
use Illuminate\Http\Request;

class BusStopController extends Controller
{
    public function index(){
        return BusStop::all();
    }

    public function store(Request $request){
        $data = $this->validate($request,
            [
                'name'         => [],
                'city_id'   => [],
                'coordinat'   => [],
            ]
        );
        BusStop::query()->create($data);
    }

    public function delete($id){
        $bb=BusStop::query()->find($id);
        $bb->delete();
    }
    //
}
