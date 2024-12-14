<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id){
        $name="Donald Trum";
        $age ="75";


        $data=[
            "ID"=>$id,
            "Name"=>$name,
            "Age"=>$age,

        ];

        $name="access_token ";
        $value ="123-XYZ";
        $minutes =60;
        $path ="/";
        $domain =$_SERVER['SERVER_NAME'];
        $secure  =false;
        $httpOnly   =true;

        return response(200)->cookie(
            $name,
            $value,
            $minutes,
            $path,
            $domain,
            $secure,
            $httpOnly
        );
    }


}
