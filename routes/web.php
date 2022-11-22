<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CheckoutController;


Route::get('/home',[HomeController::class,'home'])->name('home');
Route::post('/search',[HomeController::class,'search'])->name('search');
Route::get('/list/{category:slug}',[HomeController::class,'list'])->name('list');

Route::get('/checkout',[CartController::class,'checkout'])
->middleware(['auth'])
->name('checkout');
Route::get('/dashb',CheckoutController::class)->name('dashb');



Route::group(['as'=>'cart.','prefix'=>'cart'],function(){

    Route::get('/{prod}/add',[CartController::class,'add'])->name('add');
    Route::get('/{prod}/incr',[CartController::class,'incr'])->name('incr');
    Route::get('/',[CartController::class,'index'])->name('index');
    Route::get('/{prod}/del',[CartController::class,'del'])->name('del');
    Route::get('/clear',[CartController::class,'clear'])->name('clear');

});




Route::get('/', function () {
    return redirect()->route('home');
    #return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
