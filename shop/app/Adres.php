<?php
/**
 * Created by PhpStorm.
 * User: Rick
 * Date: 26/03/2018
 * Time: 00:29
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Adres extends Model
{
    protected $fillable = ['adres_id','firstname','lastname', 'phonenumber', ' 	housenumber ', 'zipcode', 'statecity ', 'created_at', 'updated_at'];
}