<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Order;
use App\Orderline;
use App\Adres;
use App\Cart;

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
        if (Auth::check() && Session::has('cart') && Session::has('adres')) {

            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $randstring = '';
            for ($i = 0; $i < 10; $i++) {
                $randstring = $randstring . $characters[rand(0, strlen($characters) - 1)];
            }
            $order_id = $randstring;

            $adresData = Session::get('adres');
            $cart = Session::get('cart');

            foreach($cart->items as $item)
            {
                $line = new Orderline();
                $line->orderline_id = $order_id;
                $line->product_id = $item['id'];
                $line->amount = $item['count'];
                $line->save();
            }
            $adres = new Adres();
            $adres->firstname = $adresData['firstname'];
            $adres->lastname = $adresData['lastname'];
            $adres->phonenumber = $adresData['phonenumber'];
            $adres->street = $adresData['street'];
            $adres->housenumber = $adresData['housenumber'];
            $adres->zipcode = $adresData['zipcode'];
            $adres->statecity = $adresData['statecity'];
            $adres->save();

            $order = new Order();
            $order->orderline_id = $order_id;
            $order->adres_id = $adres->id;
            $order->totalprice = $cart->priceTotal;
            $order->save();
            Session::flush('cart');
            Session::flush('adres');

            return view('succes', ['ID' => $order_id]);
        } else {
            return redirect('login')->with('warning','Please login before buying products :D');
        }
    }
    function adres()
    {
        if (Auth::check() && Session::has('cart')) {
            return view('/adres');
        } else {
            return redirect('login')->with('warning','Please login before buying products :D');
        }
    }

    public function destroy($id, $var)
    {
        if(Auth::user()->user_type != "0") {
            $order = Order::find($id);
            $adres = Adres::find($var);
            $lines = Orderline::find($id);
            $order->delete();
            $adres->delete();
            $lines->delete();
            return redirect('products')->with('success', 'Order has been  deleted');
        }
    }
}
