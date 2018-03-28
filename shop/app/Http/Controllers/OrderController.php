<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Adres;

class OrderController extends Controller
{

    function insertAdres(Request $req)
    {
        if (Auth::check() && Session::has('cart')) {
            $adres = $this->validate($req, [
                'firstname' => [
                    'required',
                    'between:1,99',
                    'regex:(^([a-zA-Z ,.\'-]+$))'
                ],
                'lastname' => [
                    'required',
                    'between:1,99',
                    'regex:(^([a-zA-Z ,.\'-]+$))'
                ],
                'phonenumber' => [
                    'required',
                    'digits_between:5,15',
                    'numeric'
                ],
                'street' => [
                    'required',
                    'between:1,99',
                    'regex:(^([a-zA-Z ]+))'
                ],
                'housenumber' => [
                    'required',
                    'between:1,6',
                    'regex:(^([0-9]+))'
                ],
                'zipcode' => [
                    'required',
                    'between:6,7',
                    'regex:(^([0-9A-Z]+))'
                ],
                'statecity' => [
                    'required',
                    'between:1,99',
                    'regex:(^([a-zA-z ]+))'
                ]
            ]);
            $req->session()->put('adres', $adres);
            $price = Session::get('cart')->priceTotal;
            return view('pay', ['total' => $price]);
        } else {
            return redirect('login')->with('warning','Please login before buying products :D');
        }
    }

    function succes()
    {
        return view('succes', ['ID' => '68AKTI589HA8']);
    }
    function adres()
    {
        if (Auth::check() && Session::has('cart')) {
            return view('/adres');
        } else {
            return redirect('login')->with('warning','Please login before buying products :D');
        }
    }
}
