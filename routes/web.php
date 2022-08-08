<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/contact', [ContactController::class,'index'])->name('contact.index');
Route::post('/contact',[ContactController::class,'post'])->name('contact.post');
Route::get("/contact/confirm",[ContactController::class,'confirm'])->name('contact.confirm');
Route::post('/contact/confirm', [ContactController::class,"send"])->name('contact.send');
Route::get('/contact/complete', [ContactController::class,'complete'])->name('contact.complete');
Route::get('contact/find',[ContactController::class,'find']);
Route::get('contact/search',[ContactController::class,'search']);
Route::post('/contact/delete',[ContactController::class,'delete']);
Route::post('/contact/reset',[ContactController::class,'reset']);