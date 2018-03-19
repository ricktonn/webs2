<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

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
        'unique:login',
        'between:6,99',
        'regex:(^([a-zA-z0-9!@#$%^&*,.]+))'
    ]
        ]);

        $username = $req->input('username');
        $password = $req->input('password');

        $data = array('username'=>$username,"password"=>$password,'user_type'=>1);

        DB::table('login')->insert($data);

        echo "Success";
        return redirect()->to('');
    }
}
