<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Adres;

class OrderController extends Controller
{

    function insertAdres(Request $req)
    {
        $adres = $this->validate($req, [
            'adres.firstname'          => [
                'required',
                'unique:login',
                'between:1,99',
                'regex:(^([a-zA-Z ,.\'-]+$))'
            ],
            'adres.lastname'          => [
                'required',
                'between:1,99',
                'regex:(^([a-zA-Z ,.\'-]+$))'
            ],
            'adres.phonenumber'          => [
                'required',
                'between:1,15',
                'regex:(^\+[0-9]{2}|^\+[0-9]{2}\(0\)|^\(\+[0-9]{2}\)\(0\)|^00[0-9]{2}|^0)([0-9]{9}$|[0-9\-\s]{10}$)'
            ],
            'adres.street'          => [
                'required',
                'between:1,99',
                'regex:(^([a-zA-Z ]+))'
            ],
            'adres.housenumber'          => [
                'required',
                'between:1,6',
                'regex:(^([0-9]+))'
            ],
            'adres.zipcode'          => [
                'required',
                'between:6,99',
                'regex:/\b\d{5}\b/'
            ],
            'adres.statecity'          => [
                'required',
                'between:1,99',
                'regex:(^([a-zA-z ]+))'
            ]
        ]);

        Adres::create($adres);
        return redirect()->to('');
    }
}
