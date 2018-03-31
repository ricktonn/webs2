<?php
/**
 * Created by PhpStorm.
 * User: Rick
 * Date: 26/03/2018
 * Time: 01:24
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "order";
    protected $fillable = ['orderline_id','adres_id','totalprice', 'created_at', 'updated_at'];
    public $zipcode;
    public $phonenumber;
}