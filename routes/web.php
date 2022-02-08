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


Route::get('/', [App\Http\Controllers\Payment::class, 'donate']);
Route::get('/submit', [App\Http\Controllers\Payment::class, 'submit']);
Route::get('/instamojo_redirect', [App\Http\Controllers\Payment::class, 'instamojo_redirect']);