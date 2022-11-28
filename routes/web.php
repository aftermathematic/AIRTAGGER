<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsItemController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GeneralController;

use Illuminate\Support\Facades\Route;

use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;

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
Route::controller(GeneralController::class)->group(function(){
    Route::get('/', 'home')->middleware('web')->name('home');
    Route::get('about', 'about')->middleware('web')->name('about');
});

Route::get('news', [NewsItemController::class, 'showNewsItems'])->middleware('web')->name('news');
Route::get('faq', [FaqController::class, 'showFaqCats', 'showFaqItems'])->middleware('web')->name('faq');


Route::controller(LoginController::class)->group(function(){
    Route::get('login', 'index')->middleware('web')->name('login');
    Route::get('logout', 'logout')->middleware('web')->name('logout');
    Route::get('register', 'register')->middleware('web')->name('register');
    Route::post('validate_registration', 'validate_registration')->middleware('web')->name('login.validate_registration');
    Route::post('validate_login', 'validate_login')->middleware('web')->name('login.validate_login');
    
    Route::get('profile', 'profile')->middleware('auth')->name('profile');
    Route::get('updateprofile', 'updateprofile')->middleware('auth')->name('updateprofile');

    Route::get('admin_userCreate', 'admin_userCreate')->middleware('auth')->name('admin_userCreate');
    Route::post('validate_adminRegistration', 'validate_adminRegistration')->middleware('auth')->name('login.validate_adminRegistration');
});

Route::controller(ContactController::class)->group(function(){
    Route::get('contact', 'index')->middleware('web')->name('contact');
    Route::post('validate_message', 'validate_message')->middleware('web')->name('validate_message');
    Route::post('reply_message', 'reply_message')->middleware('web')->name('reply_message');
    Route::get('admin', 'showContactMessages')->middleware('auth')->name('admin');  
});

Route::controller(UserController::class)->group(function(){
    Route::get('admin_users', 'showUsers')->middleware('auth')->name('admin_users');
    Route::get('admin_promote', 'admin_promote')->middleware('auth')->name('admin_promote');
});



