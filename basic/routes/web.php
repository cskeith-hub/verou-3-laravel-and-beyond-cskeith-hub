<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
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
Route::get('/', [Controller::class, 'index']);
Route::get('contactPage', [ContactController::class, 'contactPage'])->name('contactPage');
Route::post('contactQuestion', [ContactController::class, 'contactPost']);
Route::get('/{id}', [Controller::class, 'user'])->name('user');
