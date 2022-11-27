<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newsItemController;
use App\Http\Controllers\faqController;
use App\Http\Controllers\loginController;

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
    return view('layouts/master');
})->name('home');

Route::get('/news', [newsItemController::class, 'showNewsItems'])->name('news');

Route::get('/faq', [faqController::class, 'showFaqCats', 'showFaqItems'])->name('faq');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');



Route::controller(loginController::class)->group(function(){

    Route::get('login', 'index')->name('login');
    Route::get('logout', 'logout')->name('logout');
    Route::get('register', 'register')->name('register');


    Route::post('validate_registration', 'validate_registration')->name('login.validate_registration');
    Route::post('validate_login', 'validate_login')->name('login.validate_login');
    Route::get('dashboard', 'dashboard')->name('dashboard');
    Route::get('profile', 'profile')->name('profile');
    Route::get('updateprofile', 'updateprofile')->name('updateprofile');

    Route::get('admin', [ContactController::class, 'showContactMessages'])->name('admin');
    Route::get('admin_messages', [ContactController::class, 'showContactMessages'])->name('admin_messages');


});

Route::controller(ContactController::class)->group(function(){

    Route::post('validate_message', 'validate_message')->name('contact.validate_message');

});