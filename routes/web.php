<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactinfoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InnerpageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TestimonialController;
use App\Models\Contactinfo;

Route::get('/', [HomeController::class, 'home']);
Route::post('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contactinfo', [ContactinfoController::class, 'contactinfo'])->name('contactinfo');
Route::post('/testimonial', [TestimonialController::class, 'testimonial'])->name('testimonial');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/webdesign', [InnerpageController::class, 'innerpage'])->name('innerpage');
Route::get('/laravel', [InnerpageController::class, 'laravel'])->name('laravel');
Route::get('/django', [InnerpageController::class, 'django'])->name('django');
Route::get('/admin/login', [LoginController::class, 'Login'])->name('Login');
Route::Post('/admin/attemptlogin', [LoginController::class, 'attemptLogin'])->name('attemptLogin');
Route::get('/admin/dashboard/contactlist', [ContactinfoController::class, 'contactlist'])->name('contactlist');
