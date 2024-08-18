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

Route::get('/', function () {
    return view('welcome');
});

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

//======(Product)========
Route::get('/Product',[AdminController::class,'viweProd']);

Route::get('/addproduct',[AdminController::class,"addproduct"]);
//==============

//======(Section)========
Route::get('/viweSections',[AdminController::class,'viweSections']);

Route::get('/addSection',[AdminController::class,'addSection']);

//======(signup&login)========

 Route::get('/signup',[AdminController::class,'signup']);

 Route::get('/login',[AdminController::class,'login']);

//======(Call signup&login page)========
Route::get('/signup', function () {
    return view('Admin.signup');
})->name('signup');

Route::get('/login', function () {
    return view('Admin.login');
})->name('login');

//======(Call function signupuser)========
Route::get('/signupuser',[AdminController::class,'signupuser']);

//======(Call Product page in Dashboard)========
Route::get('/Product', function () {
    return view('Admin.Product');
})->name('Product');

Route::get('/DashboardAdmin',[AdminController::class,'viweUser']);




