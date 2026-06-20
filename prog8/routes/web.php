<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PublicController;

use App\Http\Controllers\ProductController;

use App\Http\Controllers\MailController;

Route::get('/', [PublicController::class, 'homepage']) -> name('homepage');

Route::get('/Chi-Siamo', [PublicController::class, 'aboutUs']) ->name('aboutUs');

Route::get('/Chi-Siamo/detail/{name}',[PublicController::class, 'aboutUsDetail']) -> name('aboutUsDetail');

Route::get('/Contatti', [PublicController::class, 'contacts'])-> name('contacts');

Route::get('/prodotti', [ProductController::class, 'ListaProdotti'])-> name('prodotti');

Route::get('/prodotti/detail/{id}', [ProductController::class, 'ProdottiDetail'])-> name('prodotto.detail');

Route::post('/contacts', [MailController::class, 'contactUs'])->name('contactUs');

Route::get('/prodotto/create', [ProductController::class, 'create'])->name('prodotti.create');

Route::post('/prodotti/submit', [ProductController::class, 'store'])->name('prodotti.submit');