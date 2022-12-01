<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsItemController;
use App\Http\Controllers\FaqCatController;
use App\Http\Controllers\FaqItemController;
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

//Route::get('news', [NewsItemController::class, 'showNewsItems'])->middleware('web')->name('news');

//Route::get('/product',[ProductController::class,'index']);

Route::controller(LoginController::class)->group(function(){
    Route::get('login', 'index')->middleware('web')->name('login');
    Route::get('logout', 'logout')->middleware('web')->name('logout');
    //Route::get('register', 'register')->middleware('web')->name('register');
    Route::post('validate_registration', 'validate_registration')->middleware('web')->name('login.validate_registration');
    Route::post('validate_login', 'validate_login')->middleware('web')->name('login.validate_login');
    
    Route::get('profile', 'profile')->middleware('auth')->name('profile');
    //Route::get('updateprofile', 'updateprofile')->middleware('auth')->name('updateprofile');
    Route::post('validate_updatedetails', 'validate_updatedetails')->middleware('auth')->name('validate_updatedetails');

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
    Route::get('user', 'index')                     ->middleware('web')->name('user');
    Route::get('user.create', 'create')             ->middleware('web')->name('user.create');
    Route::get('user.admin.create', 'admin_create') ->middleware('web')->name('user.admin.create');
    
    Route::post('user.store', 'store')              ->middleware('web')->name('user.store');
    Route::post('user.admin.store', 'admin_store')  ->middleware('auth')->name('user.admin.store');

    Route::get('user/{id}', 'show')                 ->middleware('auth')->name('user.show');
    Route::get('user.edit', 'edit')                 ->middleware('auth')->name('user.edit');
    Route::post('user.update', 'update')            ->middleware('auth')->name('user.update');
    Route::get('user.destroy/{id}', 'destroy')      ->middleware('auth')->name('user.destroy');

    Route::get('admin_users', 'index')              ->middleware('auth')->name('admin_users');
    Route::get('admin_promote', 'admin_promote')    ->middleware('auth')->name('admin_promote');    
});


Route::controller(FaqCatController::class)->group(function(){
    Route::get('faq', 'index')                      ->middleware('web')->name('faq');
    Route::get('faqCat.create', 'create')           ->middleware('auth')->name('faqCat.create');
    Route::post('faqCat.store', 'store')            ->middleware('auth')->name('faqCat.store');
    Route::get('faqCat.show/{id}', 'show')          ->middleware('auth')->name('faqCat.show');
    Route::get('faqCat.edit/{id}', 'edit')          ->middleware('auth')->name('faqCat.edit');
    Route::post('faqCat.update', 'update')          ->middleware('auth')->name('faqCat.update');
    Route::get('faqCat.destroy/{id}', 'destroy')    ->middleware('auth')->name('faqCat.destroy');
    Route::get('admin.faq', 'faq_index')            ->middleware('auth')->name('admin.faq');
});

Route::controller(FaqItemController::class)->group(function(){
    Route::get('faqItem', 'index')                  ->middleware('web')->name('faqItem');
    Route::get('faqItem.create', 'create')          ->middleware('auth')->name('faqItem.create');
    Route::post('faqItem.store', 'store')           ->middleware('auth')->name('faqItem.store');
    Route::get('faqItem.show/{id}', 'show')         ->middleware('auth')->name('faqItem.show');
    Route::get('faqItem.edit/{id}', 'edit')         ->middleware('auth')->name('faqItem.edit');
    Route::post('faqItem.update', 'update')         ->middleware('auth')->name('faqItem.update');
    Route::get('faqItem.destroy/{id}', 'destroy')   ->middleware('auth')->name('faqItem.destroy');
});

Route::controller(NewsItemController::class)->group(function(){
    Route::get('news', 'index')     	            ->middleware('web')->name('news');
    Route::get('newsItem.create', 'create')         ->middleware('auth')->name('newsItem.create');
    Route::post('newsItem.store', 'store')          ->middleware('auth')->name('newsItem.store');
    Route::get('newsItem.show/{id}', 'show')        ->middleware('auth')->name('newsItem.show');
    Route::get('newsItem.edit/{id}', 'edit')        ->middleware('auth')->name('newsItem.edit');
    Route::post('newsItem.update', 'update')        ->middleware('auth')->name('newsItem.update');
    Route::get('newsItem.destroy/{id}', 'destroy')  ->middleware('auth')->name('newsItem.destroy');

    Route::get('admin.news', 'admin_index')         ->middleware('auth')->name('admin.news');
});


