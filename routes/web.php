<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OtpController;
use App\Http\Controllers\AddOfferController;
use App\Http\Controllers\MyOffersController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\OfferDetailsController;
use Illuminate\Support\Facades\Auth; 

use App\Http\Controllers\AdminUserGestionController;
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




// ...

Route::get('/otp', [OtpController::class, 'index'])->name('otp');

Route::get('/a_user_gestion', [AdminUserGestionController::class, 'index'])->name('a_user_gestion');

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['verify' => true]);

Route::get('/home', function () {
    if (Auth::check() && Auth::user()->role === 'admin') {
        return view('a_home'); // Rediriger vers la vue a_home.blade.php si l'utilisateur a le rôle "admin"
    } else {
        return view('home'); // Sinon, rediriger vers la vue home.blade.php
    }
})->name('home');

Route::get('/a_home', function () {
    return view('a_home'); // Ajouter cette route au cas où l'utilisateur naviguerait directement vers /a_home
})->name('a_home')->middleware('auth', 'role:admin');

Route::get('/addoffer', [AddOfferController::class, 'index'])->name('add_offer');
Route::get('/myoffers', [MyOffersController::class, 'index'])->name('myoffers');
Route::get('/offerdetails', [OfferDetailsController::class, 'index'])->name('offer_details');
Route::get('/offers', [OffersController::class, 'index'])->name('offers');



