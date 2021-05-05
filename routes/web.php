<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Laraval 8 更改寫法
Route::get('/',[PagesController::class,'index']);
Route::get('/about',[PagesController::class,'about']);
Route::get('/services',[PagesController::class,'services']);



// Route::get('/users/{id}', function ($id) {
//     return 'This is user '.$id;
// });
// Auth::routes();

Route::post('/posts/image_upload',[PostController::class,'upload'])->name('upload');

Route::resource('posts', 'PostController');
Route::get('/posts',[PostController::class,'index']);
// Route::post('/posts',[PostController::class,'store']);
Route::get('/posts/create',[PostController::class,'create']);
Route::get('/posts/{id}',[PostController::class,'show']);

Auth::routes();

Route::get('/home', [DashboardController::class, 'index']);
