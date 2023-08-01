<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AddOfferController;
use App\Http\Controllers\MyOffersController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\OfferDetailsController;

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
    return view('auth.login');
});


Auth::routes(['verify' => true]);//add for redirection

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/addoffer', [AddOfferController::class, 'index'])->name('add_offer');
Route::get('/myoffers', [MyOffersController::class, 'index'])->name('myoffers');
Route::get('/offerdetails', [OfferDetailsController::class, 'index'])->name('offer_details');
Route::get('/offers', [OffersController::class, 'index'])->name('offers');

