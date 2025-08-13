<?php

use App\Http\Controllers\WebPagesController;
use Illuminate\Support\Facades\Route;

Route::get('', [WebPagesController::class, 'index'])->name('index');
Route::get('about-us', [WebPagesController::class, 'about_us'])->name('about_us');
Route::get('why-us', [WebPagesController::class, 'why_us'])->name('why_us');
Route::get('contact-us', [WebPagesController::class, 'contact_us'])->name('contact_us');
Route::get('get-quote', [WebPagesController::class, 'get_quote'])->name('get_quote');

Route::get('privacy-policy', [WebPagesController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('privacy-and-conditions', [WebPagesController::class, 'terms_and_conditions'])->name('terms_and_conditions');