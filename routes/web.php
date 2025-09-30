<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::view('/', 'home')->name('home');

// Pages
Route::view('/services',  'services')->name('services');
Route::view('/blog',      'blog')->name('blog'); 

// Contact
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'submit'])
  ->name('contact.submit')
  ->middleware('throttle:5,1');

// Portfolio index
Route::view('/portfolio', 'portfolio.index')->name('portfolio');
Route::view('/portfolio/that-disability-adventure-company', 'portfolio.tdac')->name('portfolio.tdac');
Route::view('/portfolio/evie-graphic-design', 'portfolio.evie')->name('portfolio.evie');