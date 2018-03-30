<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];
    protected $table = 'category';

    public function subcategories(){
        return $this->hasMany(Category::class);
    }
    public function products(){
        return $this->hasMany(Product::class);
    }
}
