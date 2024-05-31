<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }

    public function create(){
        $name = $_POST ["name"];
        $surname1 = $_POST ["surname1"];
        $surname2 = $_POST ["surname2"];
        $adress = $_POST ["adress"];
        $pc = $_POST ["pc"];
        $city = $_POST ["city"];
        $country = $_POST ["country"];
        $email = $_POST ["email"];
        $password = $_POST ["password"];

        DB::insert('insert into transfer_viajeros (nombre, apellido1, apellido2, direccion, 
        codigoPostal, ciudad, pais, email, password) values ("'.$name.'", "'.$surname1.'", 
        "'.$surname2.'", "'.$adress.'", "'.$pc.'", "'.$city.'", "'.$country.'", "'.$email.'", 
        "'.$password.'")'
        );

        $message = "Se ha creado una nueva cuenta.";
        echo "<script>alert('$message');</script>";
        return view('login');
    }
}
