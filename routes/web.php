<?php

use App\Http\Controllers\FileControl;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userControl;
use App\Http\Controllers\profileControl;

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

Route::get('/', [userControl::class, 'index']);
Route::get('/user-create', [userControl::class, 'create']);
Route::post('/user-create', [userControl::class, 'store']);

Route::get('/sendmail', [userControl::class, 'sendmail']);
Route::post('/sendmail', [userControl::class, 'sending']);

Route::get('/fileup', [FileControl::class, 'create']);
Route::post('/fileup', [FileControl::class, 'store']);

Route::get('/profile', [profileControl::class, 'index']);

Route::get('/{id}', [userControl::class, 'show']);
Route::get('/{id}/user-edit', [userControl::class, 'edit']);
Route::patch('/{id}/user-edit', [userControl::class, 'update']);
Route::delete('/{id}/delete', [userControl::class, 'destroy']);

Route::get('/{id}/profile-edit', [profileControl::class, 'edit']);
Route::patch('/{id}/profile-edit', [profileControl::class, 'update']);



