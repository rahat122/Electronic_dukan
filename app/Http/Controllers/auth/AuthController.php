<?php

namespace App\Http\Controllers\auth;


use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registrationForm(){
        return view('backend.auth.registration');
    }

    public function registrationSubmit(Request $request){
        // dd($request->all());
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'


        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            //'password'=>$request->password
            'password'=>bcrypt($request['password']),

        ]);
        return to_route('login.form');
    }

    public function loginForm(){
        return view('backend.auth.login');
    }

    public function loginSubmit(Request $request){
        // dd($request->all());
        $credentials=$request->except('_token');
        $authentication = auth()->attempt($credentials);
        if($authentication){
            
            return to_route('admin.newPage');
        } else {
            return to_route('registration.form');
        }
    }


    public function logout()
    {
        Auth::logout();
        return to_route('home');
    }


}
