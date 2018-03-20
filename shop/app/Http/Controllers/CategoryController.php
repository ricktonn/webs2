<?php
/**
 * Created by PhpStorm.
 * User: Rick
 * Date: 20/03/2018
 * Time: 21:50
 */

namespace App\Http\Controllers;


class CategoryController
{
    public function show($category)
    {
        $data['category'] = $category;

        return view('category', $data);
    }
}