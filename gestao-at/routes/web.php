//Arquivo que faz o roteamento das páginas web
<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', [HomeController::class,'index'])->name('template');


Route::controller(LoginController::class)->group(function()
{
Route::get('/Login', 'index')->name('login.index');
Route::post('/Login', 'store')->name('login.store');
Route::get('/logout', 'destroy')->name('login.destroy');
});
