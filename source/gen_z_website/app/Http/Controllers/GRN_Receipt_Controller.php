<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product;
use App\Models\cart;
use App\Models\order_product;
use App\Models\GRN;
use App\Models\order_detail;
use App\Models\product_category;
use Illuminate\Support\Facades\Redirect;

class GRN_Receipt_Controller extends Controller
{
    

    public function all_receipt(){
        $donhang = order_product::orderBy('created_at', 'desc')->get();;
        return view('admin.all_receipt',compact('donhang'));
    }

    public function update_receipt($id){
        $info = order_product::where('id',$id)->get();
        $detail = order_detail::where('order_id',$id)->get();
        return view('admin.update_receipt',compact('info','detail'));
    }

    public function view_receipt($id){
        $info = order_product::where('id',$id)->get();
        $detail = order_detail::where('order_id',$id)->get();
        return view('admin.view_receipt',compact('info','detail'));
    }


    public function updating_receipt(Request $request){
        $id_old = $request->id_old;

        $order_product = order_product::find($id_old);

        $order_product->customer_name = $request->customer_name;
        $order_product->phone = $request->phone;
        $order_product->email = $request->email;
        $order_product->billing_address = $request->address;
        $order_product->pay = $request->pay;

        $order_product->save();
     
        return Redirect::to('admin/all-receipt')->with('success', 'Chỉnh sửa đơn hàng thành công!');
    }

    public function remove_receipt($id){

        $order_product = order_product::find($id);

        if ($order_product) {
            order_product::destroy($id);
        }

        $detail = order_detail::where('order_id',$id)->get();
        if ($detail) {
            foreach ($detail as $d) {
                order_detail::destroy($d->id);
            }
        }

        return back()->with('success', 'Xóa đơn hàng thành công!');
    }
    

    #Thanh toán

    #Giỏ hàng
    public function order() {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $billing_address = $_POST['address'];
        $paymentMethod = $_POST['paymentMethod'];
        
        $tmp = cart::all();
        $sum = 0;
        foreach ($tmp as $t) {
            global $sum;
            $sum = $sum + $t->price*$t->quantity;
        }

        $order_product = new order_product();
        $order_product->customer_name = $name;
        $order_product->email = $email;
        $order_product->phone = $phone;
        $order_product->total = $sum;
        $order_product->billing_address = $billing_address;
        $order_product->pay = $paymentMethod;
        
        $order_product->save();

        $order = order_product::all()->last();

        $cart = cart::all();

        foreach ($cart as $t) {
            $k = $t->price*$t->quantity;

            $order_detail = new order_detail();
            $order_detail->order_id = $order->id;
            $order_detail->product_id = $t->id;
            $order_detail->product_name = $t->name;
            $order_detail->quantity = $t->quantity;
            $order_detail->total = $k;

            $order_detail->save();

            cart::destroy($t->id);
        }

        
        return Redirect::to('/index.html');
    }

    public function checkout() {
        $cart = cart::all();
        $danhmuc = product_category::all();
        
        return view('frontend.check-out',compact('cart','danhmuc'));
    }
}
