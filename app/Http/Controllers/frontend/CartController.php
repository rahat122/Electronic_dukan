<?php

namespace App\Http\Controllers\frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class CartController extends Controller
{
    public function cartDetails(){
        
        return view('frontend.cart.cart');
    }

    public function addCartPage($id){
        $Products=Product::find($id);

        $myCart=session()->get('myCart');
        if(!$myCart)
        {
            $myCart[$id]=[
                'product_name'=>$Products->product_name,
                'product_price'=>$Products->product_price,
                'product_quantity'=>1,
                'subtotal'=>(float)($Products->product_price) * 1,
                'products_image'=>$Products->product_image

            ];
            session()->put('myCart',$myCart);

        } else{
            if(!array_key_exists($id,$myCart))
            {
                $myCart[$id]=[
                    'product_name'=>$Products->product_name,
                    'product_price'=>$Products->product_price,
                    'product_quantity'=>1,
                    'subtotal'=>(float)($Products->product_price) * 1,
                    'products_image'=>$Products->product_image
    
                ];
                session()->put('myCart',$myCart);
    
            }else{
                $myCart[$id]['product_quantity']=$myCart[$id]['product_quantity']+1;
                $myCart[$id]['subtotal']=(float)($myCart[$id]['product_price']) * (int)($myCart[$id]['product_quantity']);
                session()->put('myCart',$myCart);
            }
        }
        notify()->success('product added to cart successfully');
        return redirect()->back();
    }

    public function deleteCart($id)
    {
        $newCart=session()->get('myCart');
        unset($newCart[$id]);
        session()->put('myCart',$newCart);

        notify()->success('Item delete from cart');
        return redirect()->back();
    }


    public function upDate(Request $request,$id){
        $request->validate([
            'qty'=>'required|min:1'
        ]);
        $myCart = session()->get('myCart');

        $product = Product::find($id);

        if($product->product_quantity < $request->qty){
            Alert::warning("Stock Out" , "Product Available $product->product_quantity");
            return redirect()->back();
        }

        if($request->qty < 1){
            Alert::warning("Cart Error" , "Cart 1 or More Product");
            return redirect()->back();
        }
        $myCart[$id]["product_quantity"] = $request->qty;
        $myCart[$id]['subtotal']=(float)($myCart[$id]['product_price']) * (int)($myCart[$id]['product_quantity']);
        // dd( $myCart[$id]["product_quantity"]);

        notify()->success('Cart updated successfully');
        session()->put('myCart', $myCart);
        return to_route("cart.details");
    }
}
