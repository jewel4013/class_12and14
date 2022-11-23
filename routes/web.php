<?php

use App\Http\Controllers\FileControl;
use App\Http\Controllers\morphControl;
use App\Http\Controllers\morphpostControl;
use App\Http\Controllers\morphvideoControl;
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
Route::get('/ultifileup', [FileControl::class, 'mfcreate']);
Route::post('/ultifileup', [FileControl::class, 'mfstore']);


Route::get('/profile', [profileControl::class, 'index']);



// Morph one to one
Route::get('/morph', [morphControl::class, 'index'])->name('morph');
Route::get('/morph/user', [morphControl::class, 'create']);
Route::post('/morph/user', [morphControl::class, 'store']);
Route::get('/morph/post', [morphControl::class, 'postcreate']);
Route::post('/morph/post', [morphControl::class, 'poststore']);






// Morph one to many
Route::get('/morph2', function(){
    return view('morph2.index');
});
Route::get('/morph2/post', [morphpostControl::class, 'index']);
Route::get('/morph2/post/create', [morphpostControl::class, 'create']);
Route::get('/morph2/video', [morphvideoControl::class, 'index']);
Route::get('/morph2/video/create', [morphvideoControl::class, 'create']);
Route::post('/morph2/video/create', [morphvideoControl::class, 'store']);


Route::get('/{id}', [userControl::class, 'show']);
Route::get('/{id}/user-edit', [userControl::class, 'edit']);
Route::patch('/{id}/user-edit', [userControl::class, 'update']);
Route::delete('/{id}/delete', [userControl::class, 'destroy']);

Route::get('/{id}/profile-edit', [profileControl::class, 'edit']);
Route::patch('/{id}/profile-edit', [profileControl::class, 'update']);

