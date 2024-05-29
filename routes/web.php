<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/materials', [App\Http\Controllers\MaterialsController::class, 'index'])->name('materials');



Route::post('/language-switch',[LanguageController::class,'languageSwitch'])->name('language.switch');

Route::get('contact', [ContactController::class, 'index']);

Route::post('contact',[ContactController::class,'sendContactMail'])->name('contact');







