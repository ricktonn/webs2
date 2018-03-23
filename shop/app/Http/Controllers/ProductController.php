<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Session;

class ProductController extends Controller
{
    public function index(){
        if(Auth::user()->user_type != "0")
        {
            return redirect('/');
        }
        $products = Product::all()->toArray();
        return view('/admin', compact('products'));
    }

    public function create(){
        return view(products.create);
    }

    public function store(Request $request)
    {
        $product = $this->validate(request(), [
            'id' => '',
            'name' => 'required',
            'desc' => 'required',
            'img' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            'seo' => 'required'
        ]);

        Product::create($product);

        return back()->with('success', 'Product has been added');
    }

    public function show(product $product)
    {
        return view('product')->with('product', $product);
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('products')->with('success','Product has been  deleted');
    }

    public function getProducts(){
        $products = Product::all()->toArray();
        return view('/category', compact('products'));
    }

    public function addToCart(Request $request, $id) {
        if(Auth::check())
        {
            $product = Product::find($id);
            $old = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($old);
            $cart->add($product, $product->id);

            $request->session()->put('cart', $cart);
            return redirect('/');
        }
        else {
            return redirect('login')->with('warning','Please login before buying products :D');
        }
    }

    public function getCart(){
        if(!Session::has('cart')) {
            return view('cart');
        }
        else{
            $old = Session::get('cart');
            $cart = new Cart($old);
            return view('cart', ['products' => $cart->items, 'price' => $cart->priceTotal]);
        }
    }
}
