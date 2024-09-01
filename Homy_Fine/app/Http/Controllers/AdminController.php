<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Section;
use App\Models\User;
use Illuminate\Support\Facades\Validator;






class AdminController extends Controller
{
//======(signup&login)========

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


//======(Dashboard)========
public function DashboardAdmin()
{
    //show Product page
    return view('admin.DashboardAdmin');
}

//======(User)========
    public function viwe_User()
{
    //show user tabel in dashboard admin page
    $user=User::all();
    return view('admin.DashboardAdmin',compact('user'));
}

public function add_user_api(Request $req)
{
    $vaild =Validator::make($req->all(), [
        'name'=>'required|string|max:255',
         'email'=>'required|string|max:255',
         'password'=>'required|string|max:255',
    ]);
    if($vaild->fails())
    {
        return response()->json(['errors'=>$vaild->errors()],400);

    }
    $User=new User;
    $User->full_name=$req->Full_name;
    $User->email_signup=$req->email;
    $User->create_password=$req->password;
    $User->save();
    return response()->json(['message'=>'add succeful','User'=>$User],201);
}

//======(Sections Function)========
    public function viwe_Sections()
    {
        //show sections page
        $section=Section::all();
        return view('admin.section',compact('section'));
    }


    public function add_Sections_viwe()
    {
        //show sections page
        $section=Section::all();
        return view('Admin.addSection',compact('section'));
    }

    public function Home_section()
    {
        //show sections page
        $section=Section::all();
        return view('User.home',compact('section'));
    }

    public function add_Section(Request $req)
    {
        //add a new section to the sql table
        $section=new section ;
        $section->Section_Name=$req->Section_Name;
        $section->Description=$req->Description;
        $image=$req->Section_image;
    if ($image)
    {
        $image=$req->file('Section_image');
        $imageName = time().'.'.$req->file('Section_image')->getClientOriginalExtension();
        $req->Section_image->move('images', $imageName);
        $section->Section_image='images/'. $imageName;
    }
    $section->save();
    return redirect()->back()->with("message","product added successfully");

    }

    public function delet_section($id)
    {
        $section=Section::find($id);
        $section->delete();
        return redirect()->back()->with("message1", "Section removed successfully");
    }

    public function update_Sections_viwe()
    {
        //show sections page
        $section=Section::all();
        return view('Admin.edite_delete_section',compact('section'));
    }
    public function updata_section($id)
    {
        $section=Section::find($id);
        return view('Admin.edite_delete_section',compact('section'));
    }

    public function Update_confirm_Section($id,Request $req)
{
    $section=Section::find($id);
    $section->Section_Name=$req->Section_Name;
    $section->Description=$req->Description;
    $image=$req->Section_image;
    if ($image)
    {
        $image=$req->file('Section_image');
        $imageName = time().'.'.$req->file('Section_image')->getClientOriginalExtension();
        $req->Section_image->move('images', $imageName);
        $section->Section_image='images/'. $imageName;
    }
    $section->save();
    return redirect()->back()->with("message1", "Section updata successfully");
}
//==================================================================================


//======(Product)========

public function viwe_Prod()
{
    //show Product page
    $product=Product::all();
    $sec=Section::all();
    return view('admin.Product',compact('product','sec'));
}

public function add_Prodcut_view()
{
    //show Product page
    $product=Product::all();
    $sec=Section::all();
    return view('admin.addproductPage',compact('product','sec'));
}

public function add_product(Request $req)
{
    //add new product to the sql tabel
    $product=new Product;
    $sec = new Section;
    $product->Product_Name=$req->Product_Name;
    $product->Product_Price=$req->Product_Price;
    $product->Section_ID=$req->Section_ID;
    $product->Description=$req->Description;
    $product->Color=$req->Color;
    $product->Size=$req->Size;
    $image=$req->imge;
    if ($image)
    {
        $image=$req->file('imge');
        $imageName = time().'.'.$req->file('imge')->getClientOriginalExtension();
        $req->imge->move('images', $imageName);
        $product->Product_Imge='images/'. $imageName;
    }
    $product->save();

    return redirect()->back()->with("message","product added successfully");
}



public function delet_product($id)
{
    $delet_product=product::find($id);
    $delet_product->delete();
    return redirect()->back()->with("message1", "Product removed successfully");
}

public function update_Product_viwe()
{
    //show sections page
    $product=product::all();
    return view('Admin.edite_delete_product',compact('product'));
}

public function updata_product($id)
{
    $product=product::find($id);
    return view('admin.edite_delete_product',compact('product'));
}

public function Update_confirm_product($id,Request $req)
{
    $product=product::find($id);
    $product->Product_Name=$req->Product_Name;
    $product->Product_Price=$req->Product_Price;
    $product->Product_Imge=$req->Product_Imge;
    $product->Section_ID=$req->Section_ID;
    $product->Description=$req->Description;
    $product->Color=$req->Color;
    $product->Size=$req->Size;
    $product->save();
    return redirect()->back()->with("message1", "Product updata successfully");
}

//==================================================================================

//======(shopping_carts)========
public function viwe_shopping_cart()
{
    $sec= Section::all();
    return view('admin.section',compact('sec'));
}

//======(Invoice)========
public function Viwe_Invoice()
{
    //show user tabel in dashboard admin page
    $bill=Bill::all();
    return view('Admin.invoice',compact('bill'));
}
}



