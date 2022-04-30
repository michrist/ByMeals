<?php

namespace App\Http\Controllers;

use App\Models\PostModel;
use App\Http\Requests\StorePostModelRequest;
use App\Http\Requests\UpdatePostModelRequest;
use App\Models\Category;
use App\Models\Comment;

class PostModelController extends Controller
{
    public function index(){
        $posts = PostModel::latest();
        if(request('search')){
            $posts->where('title', 'like', '%'. request('search') . '%')
            ->orWhere('body', 'like', '%'. request('search') . '%');
        }
        return view('blog.home', [
            // "title" => "All Posts",
            // "active"=> 'posts' ,
            // "posts" => PostModel::latest() -> filter(request(['search', 'category', 'author'])) -> paginate(7) -> withQueryString()

        'judul'=>'All Posts',
        'title'=>'Blog',
        'posts'=>$posts
        ]);
    }
    // public function show($id){
    //     // $posts = PostModel::find($id);
    //     // return view('blog.article', ['posts'=>$posts]);
    //     return view('blog.article', [
    //     'title'=>'Blog',
    //     'posts'=>PostModel::find($id),
    //     'categories'=>Category::all(),
    //     'comments'=>Comment::all()
    //     ]);
    // }
    public function show($id){
        $posts = PostModel::find($id);
        // $posts = PostModel::find($id);
        // return view('blog.article', ['posts'=>$posts]);
        return view('blog.article', [
        'title'=>'Blog',
        'posts'=>$posts,
        'categories'=>Category::all(),
        'comments'=>Comment::where('postmodel_id','=', $id)->get()
        ]);
    }
    public function test(){
        $categories = Category::all();
        $posts = PostModel::all();
        return view('blog.home', [
            'title'=>'Blog',
            'categories'=>$categories,
            'posts'=>$posts
        ]);
    }
}
