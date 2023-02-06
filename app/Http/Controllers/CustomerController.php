<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function customerList(){
        $Customers=Customer::paginate(3);
        return view('backend.page.customer.customerlist',compact('Customers'));
        //return view('backend.page.customer.customerlist');
    }

    public function customerCreate(){
        return view('backend.page.customer.customercreate');
    }

    public function customerSubmit(Request $request){
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email_address'=>'required',
            'contact_number'=>'required',
            'customer_address'=>'required'

        ]);

        Customer::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email_address'=>$request->email_address,
            'contact_number'=>$request->contact_number,
            'customer_address'=>$request->customer_address
        ]);
        return redirect()->route('customer.list')->with('message','created successfully');
        
    }


    public function customerEdit($id){
        $Customer=Customer::find($id);
        return view('backend.page.customer.customeredit',compact('Customer'));

    }

    public function customerUpdate(Request $request,$id){
        $request->valitade([
            'first_name'=>'required',
            'last_name'=>'required',
            'email_address'=>'required',
            'contact_number'=>'required',
            'customer_address'=>'required'

            
        ]);


        $Customer=Customer::find($id)->update([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email_address'=>$request->email_address,
            'contact_number'=>$request->contact_number,
            'customer_address'=>$request->customer_address

        ]);
        return redirect()->route('customer.list');

    }

    public function customerDelete($id){
        $Customer=Customer::find($id)->delete();
        return back();
    }
}
