<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\shopping_carts;
use illuminate\Support\Facades\Auth;
use illuminate\Http\Request;
use App\Models\User;
use App\Models\Section;


class HomeController extends Controller
{


    public function redirect()
    {
       $UserType = Auth::user()->usertype;

        if ($UserType=='1'){
            $user=User::all();
        return view('Admin.DashboardAdmin' ,compact('user'));
    }
    else{
       $product=Product::all();
       $user=User::all();
       return view('User.home',compact('product','user'));
    }
    }
    public function product_to_user($Sid )
    {
        $section=Section::find($Sid);
       $product=Product::where('Section_ID',$Sid)->get();
       $user=User::all();
       return view('User.handbag',compact('product','user','section'));
    }

    public function view()
    {
        return view('User.home');
    }

    public function View_Shopping_cart($id ,Request $req)
    {
        if(Auth::id())
        {
            $product=Product::find($id);
            $sh_cart=new shopping_carts;
            $user= new User;
            $sh_cart->Product_Name=$product->Product_Name;
            $sh_cart->Product_Price=$product->Product_Price;
            $sh_cart->Product_Imge=$product->Product_Imge;
            $sh_cart->Product_id=$product->id;
            $sh_cart->user_id=$req->user_id;
            $sh_cart->Quantity=$req->Quantity;

            $sh_cart->save();
            return redirect()->back();


        }

        else
        {
          return view('auth.login');
        }
    }

        public function Show_sh_cart()
        {
            if (Auth::id())
             {
                $user_login=Auth::user()->id;
                $sh_cart=shopping_carts::where('user_id','=',$user_login)->get();
                return view('admin.Shopping_cart' ,compact($sh_cart));

            }

            else
            {
                return view ('auth.login');

            }


        }

        public function viwe_fram($id ,Request $req)
        {
            $viwe_fram=Product::where('id',$id)->get();

            return view('User.fram' ,compact('viwe_fram'));
        }




    }

