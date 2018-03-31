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
use App\Category;

class CategoryController extends Controller
{
    public function show($category)
    {
//        $categories = Category::all();
        $data['category'] = $category;
        $products = Product::where('category','=',$data)->get();
        return view('/category', $data)->with(compact('products'));
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
        $category = Category::find($id);
        $category->delete();
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