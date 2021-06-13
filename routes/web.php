<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::middleware(['auth'])->group(function () {
// ProductController
Route::get('product/create', [ProductController::class ,"create"])->name("product.create");
Route::get('/product', [ProductController::class,"index"])->name('product.index');
Route::post('product/store', [ProductController::class ,"store"])->name("product.store");
Route::get('product/edit/{id}', [ProductController::class ,"edit"])-> name("product.edit");
Route::put('product/update/{id}', [ProductController::class ,"update"])-> name("product.update");
Route::delete('product/delete/{id}', [ProductController::class ,"destory"])-> name("product.delete");
Route::get('product/show/{id}', [ProductController::class ,"show"])-> name("product.show");
});
require __DIR__.'/auth.php';
