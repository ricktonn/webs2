<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Hash;

class userController extends BaseController
{
    use ValidatesRequests;

    function insertRegister(Request $req)
    {
        $this->validate($req, [
            'username'          => [
                'required',
                'unique:login',
                'between:4,12',
                'regex:(^([a-zA-z0-9]+))'
            ],
            'password'          => [
                'required',
                'between:6,99',
                'regex:(^([a-zA-z0-9!@#$%^&*,.]+))'
            ]
        ]);

        $username = $req->input('username');
        $password = Hash::make($req->input('password'));

        $user = new User();
        $user->username = $username;
        $user->password = $password;
        $user->user_type = 1;

    //    $data = array('username'=>$username,"password"=>$password,'user_type'=>1);

    //    DB::table('login')->insert($data);

        $user->save();

        Auth::login($user);

        return redirect()->to('');
    }

    public function login(Request $req)
    {
   /*     $username = $req->input('username');
        $password = $req->input('password');

        $checkLogin = DB::table('login')->where(['username'=>$username,'password'=>$password])->get();
        if(count($checkLogin) >0)
        {
            echo "Login SUCCESS";
        }
        else
            {
            echo "LOGIN FAIL";
        } */
        if(Auth::attempt(['username' => $req['username'], 'password' => $req['password']])){
            return redirect('home');
        }
        return redirect()->back();
    }

    public function logout () {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('home');
    }
}
