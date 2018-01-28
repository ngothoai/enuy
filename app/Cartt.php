<?php
namespace App;
class Cartt
{
    public $items = null;
    public $totalQty=0;
    public $totalPrice=0;
    public $totalPriceUpdate=0;
    public function __construct($oldCart){
        if ($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
            $this->totalPriceUpdate = $oldCart->totalPriceUpdate;
        }
    }
    public function add($item, $id){
        $storeItem = ['item' => $item, 'price' => $item->price, 'qty' => 0];
        if ($this->items){
            if (array_key_exists($id,$this->items)) {
                $storeItem = $this->items[$id];
            }
        }
        $storeItem['qty']++;
        $storeItem['price']= $item->price * $storeItem['qty'];
        $this->items[$id]= $storeItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }
    public function addupdate($item, $id,$qty){
        $storeItem = ['item' => $item, 'price' => $item->price, 'qty' => 0];
        if ($this->items){
            if (array_key_exists($id,$this->items)) {
                $storeItem = $this->items[$id];
            }
        }
        $storeItem['qty'] =  $qty;
        $storeItem['price']= $item->price * $storeItem['qty'];
        $this->items[$id]= $storeItem;
        $this->totalQty = $this->totalQty + $qty;
        $this->totalPriceUpdate += $item->price;
    }
}
