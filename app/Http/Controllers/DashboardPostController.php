<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\PostModel;
use Illuminate\Support\Facades\Auth;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:post_models',
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
        return redirect('/blog') -> with('success', 'New post has been added');
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, PostModel $post)
    // {
    //     $rules = [
            // 'title' => 'required|max:255',
            // 'category_id' => 'required',
            // 'body' => 'required'
    //     ];
    //     if($request -> slug != $post -> slug){
    //         $rules['slug'] = 'required|unique:post_models';
    //     };
    //     $validatedData = $request->validate($rules);
    //     $validatedData['user_id'] = auth() -> user() -> id;
    //     $validatedData['excerpt'] =Str::limit($request->body, 200);
    //     PostModel::where('id', $post -> id)
    //                 -> update($validatedData);
    //     return redirect('blog') -> with('success', 'Post has been updated');
    // }
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
        return redirect('blog') -> with('success', 'Post has been updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
