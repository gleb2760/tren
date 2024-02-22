<?php

namespace App\Http\Controllers;

use App\Models\Bron;
use Illuminate\Http\Request;

class BronController extends Controller
{
    public function index(Request $request){
        $query = Bron::with('route');
        if ($request->filled('route')){
            $query->where("route_id", "=", $request->get("route"));
        }
        $posts = $query->get();
        return $posts;
    }

    public function create(Request $request){
        $data = $this->validate($request,[
            'client_name'=>[],
            'phone'=>[],
            'status'=>[],
            'options'=>[],
            'route_id'=>[],
        ]);
        Bron::query()->create($data);
    }

    public function delete($id){
        $bb = Bron::query()->find($id);
        $bb->delete();
    }
    //
}
