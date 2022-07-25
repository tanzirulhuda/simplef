<?php

use App\Http\Controllers\ContactController;
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

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/details/ecommerce-details', function () {
    return view('ecommerce-details');
});

// Contact form
Route::get('/contact', [ ContactController::class, 'index' ])->name('contact');
Route::post('contact-us', [ ContactController::class, 'saveContact' ])->name('contact-us');