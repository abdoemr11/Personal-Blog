<?php

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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

Route::get('/', [\App\Http\Controllers\PostController::class, 'index'])->name("home");
Route::get('/posts/{post:slug}',[\App\Http\Controllers\PostController::class, 'show']);
Route::get ('register',[\App\Http\Controllers\RegisterController::class, 'create'] );
Route::post ('register',[\App\Http\Controllers\RegisterController::class, 'store'] );
