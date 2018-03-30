<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'p_id'];
    protected $table = 'category';

    public function subcategories(){
        return $this->hasMany('App\Category', 'p_id');
    }
//    public function products(){
//        return $this->hasMany(Product::class);
//    }
}
