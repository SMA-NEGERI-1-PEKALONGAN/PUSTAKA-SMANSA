<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\Web;
// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('/', Home::class)->name('Home');
Route::get('/{slug}', Web::class)->name('web');
// admin/login filament
// Route::get('/admin/login', Login::class)->name('admin/login');