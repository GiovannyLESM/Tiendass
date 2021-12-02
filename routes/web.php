<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\StoreController;
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

Route::bind('product',function($slug){
    return App\Models\Producto::where('slug',$slug)->first();
});
//Route::resource('empleado', EmpleadoController::class)->middleware('auth');
Auth::routes(['reset'=>false]);
Route::resource('productos', ProductoController::class)->middleware('auth');
Route::resource('categorias', CategoriaController::class)->middleware('auth');
Route::get('/home', StoreController::class)->name('home');
//Shop
Route::get('/',StoreController::class);
Route::get('product/{slug}',[StoreController::class,'show']);
//Carro
Route::get('cart/show',[CartController::class,'show',])->middleware('auth');
Route::get('cart/add/{product}',[CartController::class,'add'])->middleware('auth');
Route::get('cart/delete/{product}',[CartController::class,'delete'])->middleware('auth');
Route::get('cart/trash',[CartController::class,'trash'])->middleware('auth');
Route::get('cart/update/{product}/quantity',[
    'as'=>'cart-update',
    'uses'=>'CartController@update'
])->middleware('auth');

/*Route::group(['middleware'=>'auth'],function(){
    Route::get('/',[EmpleadoController::class,'index'])->name('home');
});*/
