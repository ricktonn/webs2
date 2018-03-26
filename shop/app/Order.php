<?php
/**
 * Created by PhpStorm.
 * User: Rick
 * Date: 26/03/2018
 * Time: 01:24
 */

namespace App;


class Order
{
    protected $fillable = ['order_id','adres_id','product_id', 'amount', 'created_at', 'updated_at'];
}