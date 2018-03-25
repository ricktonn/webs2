<?php

namespace App;


class Cart
{
    public $amount = 0;
    public $priceTotal = 0;
    public $items = null;

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

    public function remove($item, $id){
        $this->amount = $this->amount - $this->items[$id]['count'];
        $this->priceTotal = $this->priceTotal - $item->price;
        unset($this->items[$id]);
    }

    public function reduceByOne($item, $id){
        $this->amount--;
        $this->priceTotal = $this->priceTotal - $item->price;
        $this->items[$id]['count']--;
        if($this->items[$id]['count'] <= 0)
        {
            unset($this->items[$id]);
        }
    }
}
