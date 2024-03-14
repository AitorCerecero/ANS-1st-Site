<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('/greeting', function () {
    return 'hello world';
});

//Route::get('/product',[ProductController::class,'index']);

Route::resource('product', ProductController::class);


Route::get('/products/{id}', function (string $id) {
    return 'Profe pongame 100 en los seederes de favor '.$id;
});

