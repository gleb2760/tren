<?php

namespace App\Http\Controllers;
use App\Models\Bus;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * @var Request
     */
    private $request;

    public function index() {
        return 'this my page ';
    }

    public function gleb() {
        $bb = User::where('id',1)->get();
        return $bb;
    }

    public function gleb1() {
        $bb = User::all();
        return $bb;
    }

    public function gleb4(){
        foreach (Bus::all() as $flight) {
            return $flight;
        }
    }
}
