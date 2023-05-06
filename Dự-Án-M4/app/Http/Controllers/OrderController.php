<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin.orders.index',compact('orders'));
    }
    public function detail($id){
        $items= DB::table('order_detail')
        ->join('orders','order_detail.order_id','=','orders.id')
        ->join('products','order_detail.product_id','=','products.id')
        ->select('products.*', 'order_detail.*','orders.id')
        ->where('orders.id','=',$id)->get();
        $order = Order::find($id);
        return view('admin.orders.detail',compact('items','order'));
    }
}
