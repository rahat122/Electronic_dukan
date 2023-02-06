<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function brandList(){
        return view('backend.page.brand.brandlist');
    }


    public function brandCreate(){
        return view('backend.page.brand.brandCreate');
    } 

    public function brandSubmit(Request $request){
        Brand::create([
            'Brand_Name'=>$request->Brand_Name,
            'Brand_Type'=>$request->Brand_Type,
            'Brand_Status'=>$request->Brand_Name,
            'Brand_Image'=>$request->Brand_Image
        ]);

        return redirect()->back();
    }
}
