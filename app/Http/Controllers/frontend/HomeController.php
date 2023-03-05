<?php

namespace App\Http\Controllers\frontend;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class HomeController extends Controller
{
    public function Home(){
        $Products = Product::all();
        return view('frontend.page.home',compact('Products'));
    }

    public function registrationFront(Request $request){
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request['password'])
            ]);
            notify()->success('Registration Done');
            return redirect()->back();
    }

    public function loginFront(Request $request){
        $credentials =$request->except('_token');
        //dd($credentials);
        $authentication=auth()->attempt($credentials);
        if($authentication){
            notify()->success('Login Successfully!');
            if(auth()->user());{
                
                return to_route('home');
            }
        } else{
            notify()->error('Email or Password Not Matched!');
            return to_route('home');
        }
        
    }

    public function logoutFront()
    {
        Auth::logout();
        notify()->success('Logout Successfully!');
        return to_route('home');
    }



    public function About(){
        return view('frontend.page.about');
    }


    public function userProfile(){
        return view('frontend.page.userprofile.userprofile');
    }


     

    public function profileUpdate(Request $request){
        $filename=auth()->user()->image;
        if($request->hasFile('image')){
            $filename='ELECTRONIC_DUKAN' . '.' . date('Ymdmsis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('uploads/user',$filename);
        }
        $User=User::find(auth()->user()->id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'image'=>$filename
        ]);
        return redirect()->back();
    }

    

}
