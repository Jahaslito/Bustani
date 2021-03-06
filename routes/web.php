<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

/*Route::get('/profile', function () {
    return view('profile.show');
});
*/

Auth::routes();
/*//Route::resource('profile', \App\Http\Controllers\UserController::class)->middleware(('auth'));

//Route::put('/profile.{user}', [App\Http\Controllers\UserController::class, 'update'])->middleware('auth')

//Create admin middleware group for products page in admin
// Route::resource('products', \App\Http\Controllers\ProductController::class)->middleware('auth');

//Test routes for products page in client
*/
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/*Route::get('/admin', function (){
    return view('admin.dashboard');
});
*/




/*Route::prefix('admin')->group(function () {
    Route::resource('/products', 'App\Http\Controllers\ProductController');

});
Route::resource('products', App\Http\Controllers\ProductController::class);
Route::resource('roles', \App\Http\Controllers\RoleController::class)->middleware('role:admin');
Route::resource('permissions', \App\Http\Controllers\PermissionController::class)->middleware('role:admin');
*/


Route::group(['middleware'=>'auth'], function() {

    Route::group(['prefix'=>'seller'], function() {
Route::resource('profile', \App\Http\Controllers\UserController::class);
Route::resource('products', App\Http\Controllers\ProductController::class)->middleware('role:seller');
    });

Route::group(['middleware'=>'role:admin', 'prefix'=>'admin'],function (){
    Route::get('dashboard',[\App\Http\Controllers\Dashboard::class,'resources']);
    Route::resource('users',\App\Http\Controllers\UserAdminController::class);
    Route::get('products',[\App\Http\Controllers\AdminProducts::class,'products']);
    Route::resource('roles', \App\Http\Controllers\RoleController::class);
    Route::resource('permissions', \App\Http\Controllers\PermissionController::class);
});

});

Route::get('products/addRating','App\Http\Controllers\Buyer\ProductController@addRating')->name('products.addRating');
 Route::get('/', 'App\Http\Controllers\ProductController@viewProduct');

Route::get('/products', 'App\Http\Controllers\Buyer\ProductController@index');



Route::get('/products/{id}', 'App\Http\Controllers\Buyer\ProductController@show');

//Route::resource('products', \App\Http\Controllers\Buyer\ProductController::class);

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact-us', function () {
    return view('contact');
});

//Route::resource('/products', \App\Http\Controllers\Buyer\ProductController::class);


