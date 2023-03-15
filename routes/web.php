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

Route::get('/', [\App\Http\Controllers\MainController::class, 'home'])->name('home');
Route::get('/about', [\App\Http\Controllers\MainController::class, 'about'])->name('about');
Route::get('/contact', [\App\Http\Controllers\IndexController::class,'showContactForm'])->name('contact');
Route::post('/contact_form_process', [\App\Http\Controllers\IndexController::class,'contactForm'])->name('contact_form_process');









//Route::get('mail', [\App\Http\Controllers\MailController::class,'send'])->name('send');
//Route::get('mail',     [\App\Http\Controllers\MailController::class, 'index'])->name('index');
//Route::get('mail/{id}', [\App\Http\Controllers\MailController::class, 'show']);
//Route::get('/contact/all', [\App\Http\Controllers\MailController::class,'allData'])->name('contact-data');
//Route::get('mail', [\App\Http\Controllers\MailController::class,'send'])->name('mail');
//Route::get('/', [\App\Http\Controllers\MailController::class,'allData'])->name('store');
//    Route::get('/', [App\Http\Controllers\MailController::class, 'edit'])->name('all');
//    Route::resource('all', App\Http\Controllers\MailController::class,);



