<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\BusStop;
use App\Models\City;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function index(){
        return Bus::all();
    }

    public function store(Request $request){
        file_put_contents(__DIR__.'/asdasd.log', print_r($request, true), FILE_APPEND);
        $data = $this->validate($request,
            [
                'number'         => [],
                'count_place'   => [],
                'model'   => [],
                'ac'   => []
            ]
        );

        $busItem = Bus::query()->create($data);
    }
    public function delete( $id){
        $busItem = Bus::query()->find($id);
        $busItem->delete();
    }
}
