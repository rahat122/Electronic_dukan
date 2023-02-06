<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList(){
        $Products=Product::paginate(3);
        return view('backend.page.product.productlist',compact('Products'));

        //return view('backend.page.product.productlist');
    }

    public function productCreate(){
        return view('backend.page.product.productcreate') ;
    }

    public function productSubmit(Request $request){
        $request->validate([
            'product_name'=>'required',
            'product_price'=>'required',
            'product_quantity'=>'required'
        ]);
        Product::create([
            'product_name'=>$request->product_name,
            'product_price'=>$request->product_price,
            'product_quantity'=>$request->product_quantity
        ]);

        return redirect()->route('product.list');
    }

    public function productEdit($id){
        $Product=Product::find($id);
        return view('backend.page.product.productedit',compact('Product'));

    }

    public function productUpdate(Request $request,$id){
        $request->validate([
            'product_name'=>'required',
            'product_price'=>'required',
            'product_quantity'=>'required'
        ]);
        $Product=Product::find($id)->update([
            'product_name'=>$request->product_name,
            'product_price'=>$request->product_price,
            'product_quantity'=>$request->product_quantity

        ]);
        return redirect()->route('product.list');

    }

    public function productDelete($id){
        $Product=Product::find($id)->delete();
        return back();
    }


}
