<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PostModel;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class DashboardPostController extends Controller
{
   public function store(Request $request)
   {
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'image'=> 'image|file|max:1024',
        'category_id' => 'required',
        'body' => 'required'
    ]);
    if($request->file('image')){
        $validatedData['image'] = $request->file('image')->store('post-images');
        }
        $validatedData['user_id'] = auth() -> user() -> id;
        $validatedData['excerpt'] =Str::limit($request->body, 50);
        PostModel::create($validatedData);
        return redirect('/allpost') -> with('success', 'New post has been added');
    }
    public function update($id, Request $request){
        $this->validate($request,[
            'title' => 'required|max:255',
            'category_id' => 'required',
            'body' => 'required'
        ]);
        $post = PostModel::find($id);
        $post->title=$request->title;
        $post->user_id = Auth::id();
        // $post->excerpt = Str::limit($request->body, 200);
        $post->save();
        return redirect('allpost') -> with('success', 'Post has been updated');
    }
    public function edit($id)
    {
        $post = PostModel::find($id);
        return view('blog.edit', [
            'title'=>"Blog",
            'post' => $post,
            'categories' => Category::all()
        ]);
    }
}
