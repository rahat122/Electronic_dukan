<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CustomerController;

class AdminController extends Controller
{
     public function dashboard(){
         return view('backend.dashboard');
     }


     public function master(){
        return view('backend.master');
     }

     public function newPage(){
        return view('backend.page.newpage');
     }

}
