<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loginController extends BaseController
{
    public function login(Request $req)
    {
        $username = $req->input('username');
        $password = $req->input('password');

        $checkLogin = DB::table('login')->where(['username'=>$username,'password'=>$password])->get();
        if(count($checkLogin) >0)
        {
            echo "Login SUCCESS";
        }
        else
            {
            echo "LOGIN FAIL";
        }
    }

}
