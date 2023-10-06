<?php

use App\Http\Controllers\Master_controller;
use App\Http\Controllers\Member_controller;
use App\Http\Controllers\Product_controller;
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

// product
Route::get('/', [Product_controller::class, 'index']);
Route::get('/product/insert', [Product_controller::class, 'create']);
Route::post('/product/add', [Product_controller::class, 'store']);
Route::get('/delete/product/{product_model}', [Product_controller::class, 'destroy']);
Route::get('/edit/product/{product_model}', [Product_controller::class, 'edit']);
Route::post('/update/product/{product_model}', [Product_controller::class, 'update']);

// member
Route::get('/user', [Member_controller::class, 'index']);

Route::get('/master', [Master_controller::class, 'index_master']);
