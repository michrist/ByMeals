<?php

use App\Http\Controllers\DashboardPostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostModelController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use App\Models\PostModel;
use App\Models\User;

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
    return view('home', [
        'title'=>'Home'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'title'=>'About'
    ]);
});
Route::get('/article', function () {
    return view('blog.article', [
        'title'=>'Blog',
        'posts'=>PostModel::all(),
        'categories' => Category::all()
    ]);
});
Route::get('/article/{id}',[PostModelController::class, 'show']);
Route::get('/categories', function () {
    return view('categories', [
        'title'=>'Blog'
    ]);
});
Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Blog',
        'categories' => Category::all()
    ]);
});
Route::get('/categories/{category:slug}', function(Category $category){
    return view('blog.blog', [
        'title'=>'Blog',
        'judul' => "Post by category : $category->name",
        'posts' => $category -> posts -> load('category', 'user')
    ]);
});
Route::get('/user/{user:username}', function (User $author) {
    return view('blog.blog', [
        'judul'=>"Post by author : $author->name",
        'title' => 'Blog',
        'posts' => $author -> posts -> load('category', 'user')
    ]);
});
Route::get('/create', function () {
    return view('blog.add', [
        'title' => 'Blog',
        'categories'=>Category::all()
    ]);
});
Route::get('/blog', [PostModelController::class, 'index']);
Route::post('/add', [DashboardPostController::class, 'store']);
// Route::get('/login', function () {
//     return view('register.login');
// });
Route::get('/login', [LoginController::class, 'index'])->name('login') -> middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/registration', [RegisterController::class, 'store']);

Route::get('/register', function () {
    return view('register.register');
});
