<?php

use App\Http\Controllers\ContactController;
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
Route::get('/', [ContactController::class, 'index'])->name('index');

Route::post('contact/create', [ContactController::class, 'create'])->name('post-create-contact');

Route::view('contact/create', 'create-contact')->name('create-contact');

Route::get('/contact/show/{id}', [ContactController::class, 'showContact'])->name('show-contact');

Route::get('/contact/update/{id}', [ContactController::class, 'update'])->name('update-contact');

Route::post('/contact/update/{id}', [ContactController::class, 'actionUpdate'])->name('post-update-contact');