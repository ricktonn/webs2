<?php

namespace App;


class Cart
{
    public $items = null;
    public $amount = 0;
    public $priceTotal = 0;

    public function __construct($old)
    {
        if ($old){
            $this->items = $old->items;
            $this->amount = $old->amount;
            $this->priceTotal = $old->priceTotal;
        }
    }

    // add item to cart
    // check if product already exists in cart
    // if it does ++amount
    public function add($item, $id){
        $addItem = ['count' => 0, 'price' => $item->price, 'item' => $item];
        if(!empty($this->items[$id])) {
            if (array_key_exists($id, $this->items)){
                $addItem = $this->items[$id];
            }
        }
        $addItem['count']++;
        $addItem['price'] = $item->price * $addItem['count'];
        $this->items[$id] = $addItem;
        $this->amount++;
        $this->priceTotal = $this->priceTotal + $item->price;
    }
}
