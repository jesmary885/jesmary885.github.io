<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [App\Http\Controllers\WelcomeController::class,'index'])->name('home');

Route::get('sobre_mi', [App\Http\Controllers\Informacion\InformacionController::class,'Sobremi'])->name('sobre_mi');
Route::get('portafolio_web', [App\Http\Controllers\Informacion\InformacionController::class,'Portafolio'])->name('portafolio');
Route::get('contacto', [App\Http\Controllers\Informacion\InformacionController::class,'Contacto'])->name('contacto');

Route::get('portafolio_web/Ventas', [App\Http\Controllers\Informacion\portafolioController::class,'Ventas'])->name('ventas');
Route::get('portafolio_web/Blog', [App\Http\Controllers\Informacion\portafolioController::class,'Blog'])->name('blog');
Route::get('portafolio_web/Ecommerce', [App\Http\Controllers\Informacion\portafolioController::class,'Ecommerce'])->name('ecommerce');
Route::get('portafolio_web/Negocios', [App\Http\Controllers\Informacion\portafolioController::class,'Negocios'])->name('negocios');
Route::get('portafolio_web/Control_actividades_operacionales', [App\Http\Controllers\Informacion\portafolioController::class,'ActOperacional'])->name('actOperacional');

Route::post('contacto', [App\Http\Controllers\Informacion\contactoController::class,'send'])->name('sendMail');

