<?php

namespace App\Http\Controllers;

use App\Models\PostModel;
use App\Http\Requests\StorePostModelRequest;
use App\Http\Requests\UpdatePostModelRequest;
use App\Models\Category;

class PostModelController extends Controller
{
    public function index(){
        return view('blog.blog', [
            // "title" => "All Posts",
            // "active"=> 'posts' ,
            // "posts" => PostModel::latest() -> filter(request(['search', 'category', 'author'])) -> paginate(7) -> withQueryString()
        'judul'=>'All Posts',
        'title'=>'Blog',
        'posts'=>PostModel::latest()->paginate(5)
        ]);
    }
    public function show($id){
        // $posts = PostModel::find($id);
        // return view('blog.article', ['posts'=>$posts]);
        return view('blog.article', [
        'title'=>'Blog',
        'posts'=>PostModel::find($id),
        'categories'=>Category::all()
        ]);
    }
}
