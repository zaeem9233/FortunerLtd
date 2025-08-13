<?php

use App\Http\Controllers\WebPagesController;
use Illuminate\Support\Facades\Route;

Route::get('', [WebPagesController::class, 'index'])->name('index');
Route::get('about-us', [WebPagesController::class, 'about_us'])->name('about_us');
Route::get('why-us', [WebPagesController::class, 'why_us'])->name('why_us');
Route::get('contact-us', [WebPagesController::class, 'contact_us'])->name('contact_us');
Route::get('get-quote', [WebPagesController::class, 'get_quote'])->name('get_quote');