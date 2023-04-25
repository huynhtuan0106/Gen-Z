<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product;
use App\Models\cart;
use App\Models\product_category;
use Illuminate\Support\Facades\Redirect;


class HomeController extends Controller
{
    public function index() {
        $ao = product::where('category_id','29')->get();
        $phukien = product::where('category_id','32')->get();
        $danhmuc = product_category::all();
        return view('welcome',compact('ao','phukien','danhmuc'));
    }

    public function products($id) {
        $product = product::where('id',$id)->get();
        $danhmuc = product_category::all();
        return view('frontend.product',compact('product','danhmuc'));
    }

    #Các danh mục sản phẩm
    public function danhmuc($slug,$id) {
        $product = product_category::find($id)->sanpham;
        $danhmuc = product_category::all();
        return view('frontend.danhmuc',compact('product','danhmuc'));
    }

    #Giỏ hàng
    public function savecart(Request $request) {
        $id = $request->id_hidden;
        $quantity = $request->qty;

        $info = product::where('id',$id)->first();
        
        $tmp = cart::all();
        foreach ($tmp as $t) {
            if ($t->thumbnail == $info->thumbnail) {
                $cart = cart::find($info->id);
                $cart->quantity = $t->quantity + $quantity;
                $cart->save();
                $done = true;
            }
        }
        
        if (!isset($done)) { 
            $cart = new cart();

            $cart->name = $info->name;
            $cart->price = $info->price;
            $cart->id = $info->id;
            $cart->quantity = $quantity;
            $cart->thumbnail = $info->thumbnail;
            
            $cart->save();
        }
        
        return Redirect::to('/shopping-cart');
    }

    public function update_cart(Request $request) {
        $id = $request->id_hidden;

        $cart = cart::find($id);

        $cart->quantity = $_POST['qty'];
        
        $cart->save();

        return Redirect::to('/shopping-cart');
    }

    public function delete_cart(Request $request) {
        $id = $request->id_hidden;

        $cart = cart::find($id);

        if ($cart) {
            cart::destroy($id);
        }

        return Redirect::to('/shopping-cart');
    }



    public function shoppingcart() {
        $cart = cart::all();
        $danhmuc = product_category::all();
        return view('frontend.shopping-cart',compact('cart','danhmuc'));
    }

    
}
