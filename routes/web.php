<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('/', Home::class)->name('Home');