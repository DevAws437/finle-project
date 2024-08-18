<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Section;
use App\Models\User;

class AdminController extends Controller
{

    public function signupuser(Request $req)
{
    //add new user to the sql tabel
    $User=new User;
    $User->full_name=$req->Full_name;
    $User->email_signup=$req->email;
    $User->create_password=$req->password;
    $User->save();
    return redirect()->back()->with("message", "user added successfully");

}
    public function viweSections()
    {
        //show sections page
        return view('admin.Sections');
    }

    public function addSection(Request $req)
    {
        //add a new section to the sql table
        $section=new section ;
        $section->Section_Name=$req->Section_Name;
        $section->Section_Imge=$req->Section_Imge;
        $section->Description=$req->Description;
        $section->save();
        return redirect()->back()->with("message", "section added successfully");

    }




//==================================================================================

//     public function viweProducty()
// {
//     //show Product page
//     $prod=Product::all();
//     $sec=Section::all();
//     return view('admin.Product',compact('prod','sec'));
// }

public function viweProd()
{
    //show Product page
    $prod=Product::all();
    $sec=Section::all();
    return view('admin.Product',compact('prod','sec'));
}


public function viweUser()
{
    //show user tabel in dashboard admin page
    $user=User::all();
    return view('admin.DashboardAdmin',compact('user'));
}
public function signup()
{
    //show signup page
    return view('admin.signup');
}

public function login()
{
    //show login page
    return view('admin.login');
}
public function addproduct(Request $req)
{
    //add new product to the sql tabel
    $product=new Product ;
    $product->Product_Name=$req->Product_Name;
    $product->Product_Price=$req->Product_Price;
    $product->Product_Imge=$req->Product_Imge;
    $product->Description=$req->Description;
    $product->Color=$req->Color;
    $product->Size=$req->Size;
    $product->save();
    return redirect()->back()->with("message", "product added successfully");

}

//==================================================================================

public function DashboardAdmin()
{
    //show Product page
    return view('admin.DashboardAdmin');
}

}
