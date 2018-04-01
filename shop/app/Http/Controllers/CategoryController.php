<?php
/**
 * Created by PhpStorm.
 * User: Rick
 * Date: 20/03/2018
 * Time: 21:50
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Category;

class CategoryController extends Controller
{
    public $products = null;

    public function show($category)
    {

        $checkid = Category::select('p_id')->where('name','=',$category)->get()->toArray();
        if($checkid[0]['p_id'] == 0){

            $array = DB::select( DB::raw("select * from products where category in (select B.id from category as A,category as B WHERE A.id = B.p_id AND A.name = '$category')"));

            $products = json_decode(json_encode($array), true);

            $data['category'] = $category;
            return view('/category', $data)->with(compact('products'));

        }else{

            $p_id = Category::select('id')->where('name','=',$category)->get()->toArray();

            $data['category'] = $category;
            $products = Product::where('category','=',$p_id)->get()->toArray();
//            dd($products);
            return view('/category', $data)->with(compact('products'));

        }
    }

    public function addCategory(Request $request){

        if($request->input('category')){
            $this->validate($request, [
                'name' => 'required',
                'category' => 'required'
            ]);

            $subCategoryName = $request->input('name');
            $p_id = $request->input('category');

            $category = new Category();
            $category->name = $subCategoryName;
            $category->p_id = $p_id;
            $category->save();

            return back()->with('success', 'subCategory has been added');
        }else{
            $this->validate($request, [
                'name' => 'required',
            ]);

            $categoryName = $request->input('name');

            $category = new Category();
            $category->name = $categoryName;
            $category->p_id = '0';
            $category->save();

            return back()->with('success', 'Category has been added');
        }
    }

    public function destroy($id)
    {
        Category::find($id)->delete();
        Category::where('p_id','=', $id)->delete();
        return back()->with('success','Category has been  deleted');
    }

    public function productSearch(Request $request)
    {
        $s = $request->input('s');
        $data['category'] = 'Search';
        $products = Product::latest()
            ->search($s)->get();
        return view('/category', $data)->with(compact('products'));
    }
}