<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList(){
        if(\request()->has('search')){
            $search_key=request()->search;
            $Products=Product::where('product_name','LIKE','%'.$search_key.'%')->get();
        } else{
            $Products=Product::all();
        }
        return view('backend.page.product.productlist',compact('Products'));

        //return view('backend.page.product.productlist');
    }

    public function productCreate(){
        $Categories = Category::all();
        return view('backend.page.product.productcreate',compact('Categories')) ;
    }

    public function productSubmit(Request $request){
        // dd($request->all());
        $request->validate([
            'product_name'=>'required',
            'product_price'=>'required',
            'product_quantity'=>'required'
        ]);
  
        $filename=null;
        if($request->hasFile('product_image')){
            $filename='ELECTRONIC_DUKAN' . '.' . date('Ymdmsis') . '.' . $request->file('product_image')->getClientOriginalExtension();
            $request->file('product_image')->storeAs('uploads/product',$filename);
        } 


        Product::create([
            'product_name'=>$request->product_name,
            'category_id'=>$request->category_id,
            'product_price'=>$request->product_price,
            'product_quantity'=>$request->product_quantity,
            'product_image'=>$filename 
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


        $Product=Product::find($id);
        $filename=$Product->Product_iamge;
        if($request->hasFile('product_image')){
            $filename='ELECTRONIC_DUKAN' . '.' . date('Ymdmsis') . '.' . $request->file('product_image')->getClientOriginalExtension();
            $request->file('product_image')->storeAs('uploads/product',$filename);
        }
            

        
        $Product->update([
            'product_name'=>$request->product_name,
            'product_price'=>$request->product_price,
            'product_quantity'=>$request->product_quantity,
            'product_image'=>$filename
            

        ]);
        return redirect()->route('product.list');

    }

    public function productDelete($id){
        $Product=Product::find($id)->delete();
        return back();
    }
}
