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

    public function create(){
        
    }

    function dashboard(/*$username, $password*/){
        return view('admin_dashboard');
        /*return view('driver_dashboard');
        return view('user_dashboard');
        return view('corpuser_dashboard');
        */
    }

    function profile(){
        return view('profile');
    }
}
