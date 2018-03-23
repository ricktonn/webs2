<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use Illuminate\Support\Facades\Auth;

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
}
