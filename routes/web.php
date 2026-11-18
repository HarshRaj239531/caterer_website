<?php

use App\Http\Controllers\InquiryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/catering', function () {
    return view('pages.catering');
})->name('catering');

Route::get('/tent-house', function () {
    return view('pages.tent-house');
})->name('tent-house');

Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');

Route::redirect('/packages', '/gallery')->name('packages');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::post('/inquiry', [InquiryController::class, 'store'])->name('inquiry.store');
