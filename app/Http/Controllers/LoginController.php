<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function validate(){
        /*$x = DB::select('select * from actos');
        return "Login ".$x[0]->Titulo;*/
    }

    function dashboard(/*$username, $password*/){
        return "Dashboard";
    }
}
