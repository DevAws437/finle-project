<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/redirect',[HomeController::class,'redirect']);

//======(DashboardAdmin)========
//we call the page from the Function because there are Data for display it.
Route::get('/viwe_User',[AdminController::class,'viwe_User']);

//======(Product)========
//we call the page from the Function because there are Data for display it.
Route::get('/viwe_Prod',[AdminController::class,'viwe_Prod']);
//we call the page from the Function because there are Data for display it.

Route::get('/add_Prodcut_view',[AdminController::class,'add_Prodcut_view']);

Route::post('/add_product',[AdminController::class,"add_product"]);
//delet_Product
Route::get('/delet_product/{id}',[AdminController::class,"delet_product"]);

//updata_Product
Route::get('/update_Product_viwe',[AdminController::class,"update_Product_viwe"]);

Route::get('/updata_product/{id}',[AdminController::class,"updata_product"]);

Route::get('/Update_confirm_product/{id}',[AdminController::class,"Update_confirm_product"]);


//======(Section)========
Route::get('/viwe_Sections',[AdminController::class,'viwe_Sections']);

Route::get('/',[AdminController::class,'Home_section'])->name('home');

Route::get('/add_Sections_viwe',[AdminController::class,'add_Sections_viwe']);

Route::post('/add_Section',[AdminController::class,'add_Section']);

//delet_Section
Route::get('/delet_section/{id}',[AdminController::class,"delet_section"]);

//Updata_Section
Route::get('/update_Sections_viwe',[AdminController::class,"update_Sections_viwe"]);

Route::get('/updata_section/{id}',[AdminController::class,"updata_section"]);

Route::get('/Update_confirm_Section/{id}',[AdminController::class,"Update_confirm_Section"]);

 //user

 Route::get('/viwe_page_user',[AdminController::class,"viwe_page_user"]);

 Route::get('/edit_user_page',[AdminController::class,"edit_user_page"]);

 Route::get('/delet_user/{id}',[AdminController::class,"delet_user"]);

//======(signup&login)========

 Route::get('/signupe',[AdminController::class,'signupe']);

 Route::get('/login',[AdminController::class,'login']);


//======(Call signup&login page)========
Route::get('/signupe', function () {
    return view('User.signupe');
})->name('signupe');

Route::get('/login', function () {
    return view('User.login');
})->name('login');

//======(Call function signupuser)========
Route::get('/signupuser',[AdminController::class,'signupuser']);

//======(Cart)========

Route::get('/viwe_shopping_cart',[AdminController::class,"viwe_shopping_cart"]);

Route::get('/product_to_user/{Section_ID}',[HomeController::class,'product_to_user']);

Route::post('/View_Shopping_cart/{id}',[HomeController::class,"View_Shopping_cart"]);

Route::get('/Show_sh_cart',[HomeController::class,"Show_sh_cart"]);


//======(Invoice)========
Route::get('/Viwe_Invoice',[AdminController::class,"Viwe_Invoice"]);

Route::post('/viwe_fram/{id}',[HomeController::class,"viwe_fram"]);







Route::get('/cart', function () {
    return view('User.cart');
})->name('cart');
Route::get('/home', function () {
    return view('User.home');
})->name('home');

Route::get('/abuot', function () {
    return view('User.abuot');
})->name('abuot');

// Route::get('/fram', function () {
//     return view('User.fram');
// })->name('fram');





