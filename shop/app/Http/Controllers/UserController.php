<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userController extends BaseController
{
    use ValidatesRequests;

    public function admin(){
        if(Auth::user()->user_type != "0")
        {
            return redirect('/');
        }
        $products = Product::all()->toArray();
        $orders = DB::table('order')->join('adres', 'order.adres_id', '=', 'adres.adres_id')->get()->toArray();


        return view('/admin', compact('products'), compact('orders'));
    }

    function page()
    {
        if (Auth::check())
        {
            return redirect('/');
        }
        return view('/login');
    }

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
        $user->save();

        Auth::login($user);

        return redirect()->to('');
    }

    public function login(Request $req)
    {
        $this->validate($req, [
            'username'          => [
                'required'
            ],
            'password'          => [
                'required'
            ]
        ]);
        if(Auth::attempt(['username' => $req['username'], 'password' => $req['password']])){
            return redirect('/');
        }
        return back()->with('fail', 'Login Failed');
    }

    public function logout () {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('/');
    }
}
