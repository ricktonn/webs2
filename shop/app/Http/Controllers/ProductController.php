<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Session;

class ProductController extends Controller
{

//    public function index()
//    {
//        return view();
//    }

    public function create(){
        return view(products.create);
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'id' => '',
            'name' => 'required',
            'desc' => 'required',
            'img' => 'required|image',
            'price' => 'required|numeric',
            'category' => 'required',
            'seo' => 'required'
        ]);

        $imageName = request()->img->getClientOriginalName();
        request()->img->move(public_path('images'), $imageName);

        $product = new Product();
        $product->name = $request->input('name');
        $product->desc = $request->input('desc');
        $product->img = request()->img->getClientOriginalName();
        $product->price = $request->input('price');
        $product->category = $request->input('category');
        $product->seo = $request->input('seo');
        $product->save();

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
        return back()->with('success','Product has been  deleted');
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
            return redirect('cart');
        }
        else {
            return redirect('login')->with('warning','Please login before buying products :D');
        }
    }

    public function removeFromCart(Request $request, $id)
    {
        if(Auth::check())
        {
            $product = Product::find($id);
            $old = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($old);
            $cart->remove($product, $product->id);
            if($cart->amount <= 0)
            {
                $cart=null;
            }

            $request->session()->put('cart', $cart);
            return redirect('cart');
        }
        else {
            return redirect('login')->with('warning','Please login before buying products :D');
        }
    }

    public function reduceFromCart(Request $request, $id)
    {
        if(Auth::check())
        {
            $product = Product::find($id);
            $old = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($old);
            $cart->reduceByOne($product, $product->id);
            if($cart->amount <= 0)
            {
                $cart=null;
            }

            $request->session()->put('cart', $cart);
            return redirect('cart');
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
