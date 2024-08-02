<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactinfoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TestimonialController;
use App\Models\Contactinfo;

Route::get('/', [HomeController::class, 'home']);
Route::post('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contactinfo', [ContactinfoController::class, 'contactinfo'])->name('contactinfo');
Route::post('/testimonial', [TestimonialController::class, 'testimonial'])->name('testimonial');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/admin/dashboard/contactlist', [ContactinfoController::class, 'contactlist'])->name('contactlist');
