<?php
/**
 * Created by PhpStorm.
 * User: Rick
 * Date: 20/03/2018
 * Time: 21:50
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\product;

class CategoryController
{
    public function show($category)
    {


        $data['category'] = $category;
        $products = Product::where('category','=',$data)->get();
        return view('/category', $data)->with(compact('products'));
    }
}