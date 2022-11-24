<?php

use App\Http\Controllers\faqController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newsItemController;

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

Route::get('/', function () {
    return view('layouts/master');
});

Route::get('/news', [newsItemController::class, 'showNewsItems']);

Route::get('/faq', [faqController::class, 'showFaqCats', 'showFaqItems']);


Route::get('/about', function () {
    dd('about');
});

Route::get('/contact', function () {
    dd('contact');
});

Route::get('/login', function () {
    dd('login');
});