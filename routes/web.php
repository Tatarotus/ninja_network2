<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NinjaController;

Route::get('/', [NinjaController::class, 'create'])->name('ninjas');

Route::get('/create', [NinjaController::class, 'create'])->name('ninjas.create');

Route::get('/ninjas', [NinjaController::class, 'index'])->name('ninjas.index');

Route::get('/ninjas/{ninja}', [NinjaController::class, 'show'])->name('ninjas.show');;

Route::post('/ninjas/store', [NinjaController::class, 'store'])->name('ninjas.store');;

Route::delete('/ninjas/{ninja}', [NinjaController::class, 'destroy'])->name('ninjas.destroy');;





