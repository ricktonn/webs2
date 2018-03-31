<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['id','name','desc', 'img', 'price', 'category', 'seo'];
    protected $table = 'products';

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('name', 'LIKE', '%'. $search .'%');
    }
}
