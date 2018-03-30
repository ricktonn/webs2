<?php
/**
 * Created by PhpStorm.
 * User: Rick
 * Date: 30/03/2018
 * Time: 14:04
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Orderline extends Model
{

    protected $table = "orderline";
    protected $fillable = ['orderline_id','product_id','amount', 'created_at', 'updated_at'];

}