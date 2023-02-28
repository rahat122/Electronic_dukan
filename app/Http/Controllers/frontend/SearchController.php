<?php

namespace App\Http\Controllers\frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function searchBar(Request $request){
        $key=$request->search;
        $order_by=$request->order_by ?? 'asc';
        $Products=Product::where('product_name', 'LIKE', '%'. $key.'%')->orderBy('product_price',$order_by)->get();

        return view('frontend.fixed.search',compact('Products'));
    }

}
