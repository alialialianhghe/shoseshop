<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MongoDB\Driver\Session;

class Giohang extends Model
{
    public  $customer_cart = 0; //ma khach hang
    public $qty_cart = 0;
    public $items = null;
    public $totalQty = 0; // tong so luong san pham
    public $totalPrice = 0; // tong gia san pham

    public function __construct($oldCart){
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
            $this->customer_cart = $oldCart->customer_cart;
            $this->qty_cart = $oldCart->qty_cart;
        }
    }

    public function add($item, $id, $qty_p, $size){
        $giohang = ['qty'=>0, 'price' => $item->product_price, 'item' => $item,'size'=>0];

        if($this->items){
            if(array_key_exists($id, $this->items)){
                $giohang = $this->items[$id];
            }
        }
        $giohang['qty']+=$qty_p;
        $giohang['price'] = $item->product_price * $giohang['qty'];
        $giohang['size']=$size;
        $this->items[$id] = $giohang;
        $this->totalQty++;
        $this->totalPrice += $item->product_price;
    }

    // update cart
    public function update_cart($id,$newQty){
        $present_qty = $this->items[$id]['qty'];

        if( $present_qty > $newQty){
            $this->items[$id]['qty'] = $newQty;
            $this->items[$id]['price'] = $this->items[$id]['item']['product_price'] * $newQty;
            $cut = $present_qty - $newQty;
            $this->totalQty -= $cut;
            $this->totalPrice -= $this->items[$id]['price'];

            if($this->items[$id]['qty']<=0){
                unset($this->items[$id]);
            }
        }

        if($present_qty < $newQty){
            $this->items[$id]['qty'] = $newQty;
            $this->items[$id]['price'] = $this->items[$id]['item']['product_price'] * $newQty;
            $add = $newQty - $present_qty;
            $this->totalQty += $add;
            $this->totalPrice += $this->items[$id]['item']['product_price'] * $add;

            if($this->items[$id]['qty']<=0){
                unset($this->items[$id]);
            }
        }

    }
    //xóa 1
    public function reduceByOne($id){
        $this->items[$id]['qty']--;
        $this->items[$id]['price'] -= $this->items[$id]['item']['product_price'];
        $this->totalQty--;
        $this->totalPrice -= $this->items[$id]['item']['product_price'];
        if($this->items[$id]['qty']<=0){
            unset($this->items[$id]);
        }
    }
    //xóa nhiều
    public function removeItem($id){
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
    }
}
