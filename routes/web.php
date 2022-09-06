<?php

use App\Models\User;
use App\Models\Kategori;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\DashboardPostController;

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

Route::get('/', function () {
    return view('home', ["title" => "Home", "active" => "home"]);
});
Route::get('/default', function () {
    return view('welcome');
});
Route::get('/daftar-user', function () {
    return view('posts.listuser', [
        'title' => "Daftar User",
        'lists' => User::paginate(6)
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Khuluqin Azim",
        "email" => "qodr.zorgs@gmail.com",
        "fokus" => "Web Developer"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
// halaman single post
Route::get('/blog/{post:slug}', [PostController::class, 'show']);

Route::get('/kategoris', function () {
    return view('posts.kategoris', [
        'title' => 'Daftar Kategori',
        'kategoris' => Kategori::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::get('/dashboard/kategoris/checkSlug', [AdminKategoriController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/kategoris', AdminKategoriController::class)->except('show')->middleware('admin');