<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommandeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('articles', ArticleController::class);

Route::get('/commandes', [CommandeController::class, 'index'])->name('commandes.index');
Route::get('/commandes/{commande}', [CommandeController::class, 'show'])->name('commandes.show');
