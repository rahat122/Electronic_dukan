<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CustomerController;

class AdminController extends Controller
{
     public function dashboard(){
         return view('backend.dashboard');
     }


     public function master(){
        return view('backend.master');
     }

     public function newPage(){
      $Orders=Order::paginate(5);
      // dd($Orders);
        return view('backend.page.newpage',compact('Orders'));
     }

     public function orderEdit($id){
      $Order=Order::find($id);
      return view('backend.page.newpage',compact('Order'));
     }

     public function orderUpdate($id){
      $order=Order::find($id);
      // dd($order);
      $order->update([
         "status" => "Approved"
      ]);
      return redirect()->back();
     }


     public function orderList(){
      $Orders=Order::orderBy('id', 'DESC')->paginate(5);

      return view('backend.page.Order.OrderList',compact('Orders'));
     }

}
