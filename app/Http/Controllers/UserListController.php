<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;

class UserListController extends Controller
{
    public function userList(){
        $Users=User::all();
        return view('backend.page.user.userlist', compact('Users'));
    }
}
