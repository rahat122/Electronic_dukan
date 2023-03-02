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


    public function profileEdit(){
        $User=User::find();
        return view('frontend.page.userprofile.userprofile');
    }

    public function profileUpdate(Request $request){
        
        $User=User::find(auth()->user()->id)->update([
            'name'=>$request->name,
            'email'=>$request->email
        ]);
        return redirect()->back();
    }


}
