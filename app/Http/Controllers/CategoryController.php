<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryList(){
        $Categories=Category::paginate(3);
        return view('backend.page.category.categorylist',compact('Categories'));
        //return view('backend.page.category.categorylist');
    }

    public function categoryCreate(){
        return view('backend.page.category.categorycreate');
    }

    public function categorySubmit(Request $request){ //validation
        $request->validate([
            'category_name'=>'required',
            'category_price'=>'required',
            'category_type'=>'required',
            'category_description'=>'required'
        ]);

        Category::create([
            'category_name'=>$request->category_name,
            'category_price'=>$request->category_price,
            'category_type'=>$request->category_type,
            'category_description'=>$request->category_description
      
        ]);
        return redirect()->route('category.list');
    }



    public function categoryEdit($id){
        $Category=Category::find($id);
        // dd($Category);
        return view('backend.page.category.categoryedit',compact('Category'));
    }

    public function categoryUpdate(Request $request,$id){  //validate
        $request->validate([
          'category_name'=>'required',
          'category_price'=>'requird',
          'category_type'=>'requird',
          'category_description'=>'required'
        ]);

        $Category=Category::find($id)->update([
            'category_name'=>$request->category_name,
            'category_price'=>$request->category_price,
            'category_type'=>$request->category_type,
            'category_description'=>$request->category_description

        ]);
        return redirect()->route('category.list');
    }


    public function categoryDelete($id){
        $Category=Category::find($id)->delete();
        return back();
    }
}
