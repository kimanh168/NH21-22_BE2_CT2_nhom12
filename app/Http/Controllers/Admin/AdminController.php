<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Protype;
use App\Models\Customer;
use App\Http\Controllers\Controller;
use Auth;
use Mail;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $product_count = Product::count();
        $protype_count = Protype::count();
        $order_count = Order::count();
        $customer_count = Customer::count();
        return view('dashboard',['product_count'=>$product_count,'protype_count'=>$protype_count,'order_count'=>$order_count,'customer_count'=>$customer_count]);
    }

    //Hiển thị 5 người dùng
    function customers(){
        $customer = Customer::paginate(5); //SELECT * FROM customer limit(0,5)
        return view('/admin/customers',['customers'=>$customer]);
    }

    //Xóa người dùng:
    function delete_customer($id)
    {
        $customer=Customer::find($id);
        $c_name = $customer->customer_name;
        $c_email = $customer->email;

        $orders = Order::where('customer_id',$id)->get();
        foreach($orders as $item){
            OrderDetail::Where('order_id',$item->id)->delete();
        }
        Order::where('customer_id',$id)->delete();

        Mail::send('email.deletecustomer',[
            'c_name' => $c_name,
        ],function($mail) use($c_email,$c_name){
            $mail->to($c_email,$c_name);
            $mail->from('deliciouscakesy@gmail.com');
            $mail->subject('Email Block Account');
        });

        Customer::find($id)->delete();
        return redirect()->back(); //Quay lại trang trước đó
    }

    // //Hiển thị 5 đơn hàng
    // function orders(){
    //     $orders = Order::paginate(5); //SELECT * FROM orders limit(0,5)
    //     return view('/admin/orders',['order'=>$orders]);
    // }
}