<?php

namespace App\Http\Controllers;
use illuminate\Support\Facades\Auth;

use illuminate\Http\Request;

use App\Models\User;



class HomeController extends Controller
{
    public function redirect()
    {
       $UserType = Auth::user()->User_Type;

        if ($UserType==='1'){
        return view('Admin.Home');
    }
    else{
        return view('/dashboard');
    }
    }
}
