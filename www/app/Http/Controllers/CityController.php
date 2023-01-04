<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(){
        return  City::all();
    }

    public function create(Request $request){
        $data = $this->validate($request,
            [
                'name'         => [],
            ]
        );
        City::query()->create($data);
    }

    public function delete($id){
        $cityItem = City::query()->find($id);
        $cityItem->delete();
    }
}
