<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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

Route::controller(PageController::class)->group(function(){
    route::get('/', 'home')->name('home');
    route::get('login', 'login')->name('login');
    route::get('product','product')->name('product');
    route::get('product/{slug}', 'productslug')->name('productslug');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard'); //Solo se puede acceder a esta ruta si esta autenticado


Route::middleware('auth')->group(function(){
    Route::resource('products', ProductController::class)->except(['show']); //Set up the routes for the products controller
}); 

require __DIR__.'/auth.php';
