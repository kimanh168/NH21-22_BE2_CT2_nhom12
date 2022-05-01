<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //Hiển thị 5 sản phẩm
    function index(){
        $product = Product::paginate(5); //SELECT * FROM Product
        //return view('index',['data'=>$product]);
        return view('/admin/products',['data'=>$product]);
    }

    //Sửa sản phẩm
    function edit($id)
    {
        $modal = Product::find($id);
        dd($modal);
        die;
        return view('/admin/edit');
    }

    //xóa sản phẩm:
    function delete($id)
    {
        Product::find($id)->delete();
        return redirect()->back(); //Quay lại trang trước đó
    }

    //Thêm sản phẩm:
    function add()
    {
        return view('/admin/add');
    }

    //Post thêm sản phâm lên:
    function post_add(){
        
    }
}