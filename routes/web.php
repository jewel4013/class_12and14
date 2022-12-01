<?php

use App\Http\Controllers\FileControl;
use App\Http\Controllers\M3MMComment;
use App\Http\Controllers\M3MMPost;
use App\Http\Controllers\M3MMTag;
use App\Http\Controllers\M3MMVideo;
use App\Http\Controllers\morphcommentControl;
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

Route::get('/morph2/comments', [morphcommentControl::class, 'index']);

Route::get('/morph2/post', [morphpostControl::class, 'index']);
Route::get('/morph2/post/create', [morphpostControl::class, 'create']);
Route::post('/morph2/post/create', [morphpostControl::class, 'store']);
Route::get('/morph2/post/{id}', [morphpostControl::class, 'show']);
Route::post('/morph2/post/{id}/comment', [morphcommentControl::class, 'postcommentstore']);

Route::get('/morph2/video', [morphvideoControl::class, 'index']);
Route::get('/morph2/video/create', [morphvideoControl::class, 'create']);
Route::post('/morph2/video/create', [morphvideoControl::class, 'store']);
Route::get('/morph2/video/{id}', [morphvideoControl::class, 'show']);
Route::post('/morph2/video/{id}/comment', [morphcommentControl::class, 'videocommentstore']);



// Morph 3 => Many to Many relation
Route::get('/morph3', function(){
    return view('morph3.index');
});

Route::get('/morph3/comment', [M3MMComment::class, 'index']);

Route::resource('morph3/post', M3MMPost::class);
Route::post('/morph3/post/{id}/comment', [M3MMComment::class, 'postcomment']);
Route::resource('morph3/video', M3MMVideo::class);
Route::post('/morph3/video/{id}/comment', [M3MMComment::class, 'videocomment']);
Route::resource('/morph3/tag', M3MMTag::class);








// 
Route::get('/{id}', [userControl::class, 'show']);
Route::get('/{id}/user-edit', [userControl::class, 'edit']);
Route::patch('/{id}/user-edit', [userControl::class, 'update']);
Route::delete('/{id}/delete', [userControl::class, 'destroy']);

Route::get('/{id}/profile-edit', [profileControl::class, 'edit']);
Route::patch('/{id}/profile-edit', [profileControl::class, 'update']);

