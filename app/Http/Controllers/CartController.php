<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Protype;
use App\Helper\CartHelper;

class CartController extends Controller
{
    // public function __construct(){
    //     $this->middleware('cus');
    // }

    //
    public function view(){
        $protype = Protype::all();
        return view('home.cart',['dulieu'=>$protype]);
    }

    //Thêm vào giỏ hàng
    public function add(CartHelper $cart,$id){
        $quantity = request()->quantity ? request()->quantity : 1;
        $product = Product::Find($id);
        $cart->add($product,$quantity);
        return redirect()->back();
    }

    //Xóa khỏi giỏ hàng
    public function remove(CartHelper $cart,$id){
        $cart->remove($id);
        return redirect()->back();
    }

    //Cập nhật giỏ hàng
    public function update(CartHelper $cart,$id){
        $quantity = request()->quantity ? request()->quantity : 1;
        $cart->update($id,$quantity);
        return redirect()->back();
    }

    public function clear(CartHelper $cart){
        $cart->clear();
        return redirect()->back();
    }
}
