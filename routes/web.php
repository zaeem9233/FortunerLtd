<?php

use App\Http\Controllers\WebPagesController;
use Illuminate\Support\Facades\Route;

Route::get('', [WebPagesController::class, 'index'])->name('index');
Route::get('about-us', [WebPagesController::class, 'about_us'])->name('about_us');
Route::get('why-us', [WebPagesController::class, 'why_us'])->name('why_us');
Route::get('privacy-policy', [WebPagesController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('terms-and-conditions', [WebPagesController::class, 'terms_and_conditions'])->name('terms_and_conditions');

Route::get('contact-us', [WebPagesController::class, 'contact_us'])->name('contact_us');
Route::post('contact-us/save', [WebPagesController::class, 'contact_us_store'])->name('contact_us.store');

Route::get('get-quote', [WebPagesController::class, 'get_quote'])->name('get_quote');
Route::post('get-quote/save', [WebPagesController::class, 'get_quote_store'])->name('get_quote.store');
