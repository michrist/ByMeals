<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardPostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostModelController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MpasiController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\FavoritController;
use App\Models\Category;
use App\Models\Comment;
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

Route::get('/', [IndexController::class, 'viewMenu']);
Route::get('/about', function () {
    return view('about', [
        'title' => 'About'
    ]);
});
Route::get('/user/profile/{id}', [RegisterController::class, 'show']);
Route::put('/user/update/{id}', [RegisterController::class, 'update']);
Route::get('/article', function () {
    return view('blog.article', [
        'title' => 'Blog',
        'posts' => PostModel::all(),
        'categories' => Category::all(),
        'comments' => Comment::all()
    ]);
});
Route::get('/article/{id}', [PostModelController::class, 'show']);
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Blog'
    ]);
});

Route::get('/allpost', [PostModelController::class, 'test']);
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('blog.blog', [
        'title' => 'Blog',
        'judul' => "Post by category : $category->name",
        'posts' => $category->posts->load('category', 'user')
    ]);
});
Route::get('/user/{user:username}', function (User $author) {
    return view('blog.blog', [
        'judul' => "Post by author : $author->name",
        'title' => 'Profile',
        'posts' => $author->posts->load('category', 'user')
    ]);
});
Route::get('/create', function () {
    return view('blog.add', [
        'title' => 'Blog',
        'categories' => Category::all()
    ]);
});
// Route::get('/blog', [PostModelController::class, 'index']);
Route::get('/blog', [PostModelController::class, 'index']);
Route::post('/add', [DashboardPostController::class, 'store']);
Route::get('/edit/{id}', [DashboardPostController::class, 'edit']);
Route::put('/update/{id}', [DashboardPostController::class, 'update']);
// Route::post('/comment/{id}', [CommentController::class, 'store']);
// Route::post('/comment/{id}', App\Http\Livewire\CreateComment::class);

// Register and Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/registration', [RegisterController::class, 'store']);
Route::get('/register', function () {
    return view('register.register');
});
Route::get('/test', [testController::class, 'index']);
Route::get('/menu', [MpasiController::class, 'show']);
Route::get('/menu/detail/{idmpasi}', [MenuController::class, 'detail']);

Route::get('/jadwal', [JadwalController::class, 'displayList']); //Halaman List Jadwal
//fitur jadwal
Route::get('/report-jadwal', [JadwalController::class, 'index']);
Route::get('/add-jadwal', [JadwalController::class, 'addJadwal']);
Route::post('add-jadwal', [JadwalController::class, 'storeJadwal']);

Route::get('/favorit', [FavoritController::class, 'favorit']);
Route::get('user/favorit/hapus/{idbookmark}',[FavoritController::class,'hapusfavorit']);