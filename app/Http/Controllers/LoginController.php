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
        $email = $_POST["email"];
        $password = $_POST["password"];

        $results_admin=DB::select('select * from admin where email_admin = "'.$email.'" and password = "'.$password.'"');
        $results_driver=DB::select('select * from transfer_vehiculo where email_conductor = "'.$email.'" and password = "'.$password.'"');
        $results_user=DB::select('select * from transfer_viajeros where email = "'.$email.'" and password = "'.$password.'"');
        $results_corpuser=DB::select('select * from tranfer_hotel where email_hotel = "'.$email.'" and password = "'.$password.'"');

        if(count($results_admin) > 0){
            return view('admin_dashboard', ['admindata' => $results_admin]);
        }
        else if(count($results_driver) > 0){
            return view('driver_dashboard', ['driverdata' => $results_driver]);
        }
        else if(count($results_user) > 0){
            return view('user_dashboard', ['userdata' => $results_user]);
        }
        else if(count($results_corpuser) > 0){
            return view('corpuser_dashboard', ['corpuserdata' => $results_corpuser]);
        }
        else{
            $message = "El email o la contraseña introducida es incorrecta. Vuelva a intentarlo.";
            echo "<script>alert('$message');</script>";
            return view('login');
        }
    }
}
