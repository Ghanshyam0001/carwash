<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\ChangeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\WashplanController;


Route::get('/', function () {
    return view('front.layouts.loginform');
});





Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
Route::get('emailsend',[PasswordResetLinkController::class,'emailsend'])->name('email.send');
Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.update');

Route::group(['prefix' =>  'home'],function(){

    Route::group(['middleware' => 'guest'],function(){
      Route::get('/register', [HomeController::class, 'showregister']);
Route::post('/register', [HomeController::class, 'register'])->name('register');
Route::get('/login', [HomeController::class, 'showLogin'])->name('login');
Route::post('/login', [HomeController::class, 'login']);
    });
    
    Route::group(['middleware' => 'auth'],function(){
       Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
       Route::get('/index', [HomeController::class, 'index'])->name('home.index');
           Route::get('/about', [HomeController::class, 'about']);
    Route::get('/waching', [HomeController::class, 'waching']);
    Route::get('/contact', [HomeController::class, 'contact']);
    Route::get('/washorder', [HomeController::class, 'washorder']);
    Route::get('/washhistory', [HomeController::class, 'washhistory']);
Route::get('send-mail', [HomeController::class, 'indexmail']);
    Route::get('/change-password', [ChangeController::class, 'changepassword'])->name('change.password');
Route::post('/change-password', [ChangeController::class, 'changeoldpassword'])->name('change.password.post');

       
    });
    
    });
    Route::group(['prefix' =>  'admin'],function(){
    
        Route::group(['middleware' => 'admin.guest'],function(){
            Route::get('/login', [AdminController::class, 'adminLoginForm'])->name('admin_login');
            Route::post('/login', [AdminController::class, 'adminlogin']);
           
        });
            
        Route::group(['middleware' => 'admin.auth'],function(){
            Route::get('/index', [AdminController::class, 'index'])->name('admin.index');
   
    Route::get('/logout',[AdminController::class,'adminlogout'])->name('admin_logout');
    Route::get('/customers', [CustomerController::class, 'index'])->name('customers');
    Route::get('/getcustomerdata',[CustomerController::class,'getcustomerdata'])->name('getcustomerdata');
    Route::post('/editdata', [CustomerController::class, 'editCustomerData'])->name('editdata');
    Route::post('/updatedata', [CustomerController::class, 'updateCustomerData'])->name('updatedata');
    Route::get('/washingplans', [WashplanController::class, 'index'])->name('washingplans');


        });
       
        
        });
    
