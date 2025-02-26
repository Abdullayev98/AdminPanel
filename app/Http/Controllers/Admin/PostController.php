<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('tags','category')->paginate(10);

        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::pluck('title','id')->all();
        $tags=Tag::pluck('title','id')->all();
        return view('admin.posts.create', compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'category_id' => 'required|integer',
            'thumbnail' => 'nullable|image',
        ]);
        $data=$request->all();
        
        $data['thumbnail']=Post::uploadImage($request);
        $post = Post::create($data);
        $post->tags()->sync($request->tags);
       
        // $request->session()->flash('success','Ma\'lumot muvaffaqiyatli yuklandi');
        return redirect()->route('posts.index')->with('success','Post is created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        $categories=Category::pluck('title','id')->all();
        $tags=Tag::pluck('title','id')->all();
        return view('admin.posts.edit', compact('post','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'category_id' => 'required|integer',
            'thumbnail' => 'nullable|image',
        ]);
        $data=$request->all();
        $post = Post::find($id);
        $data['thumbnail']=Post::uploadImage($request,$post->thumbnail);

        if($request->hasFile('thumbnail')){
            Storage::delete($post->thumbnail);
            $folder=date('Y-m-d');
            $data['thumbnail']=$request->file('thumbnail')->store("images/{$folder}");
        }
        $post->tags()->sync($request->tags);
        $post->update($data);
        return redirect()->route('posts.index')->with('success','Post is updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->tags()->sync([]);
        Storage::delete($post->thumbnail);
        $post->delete();
        return redirect()->route('posts.index')->with('success','Post is deleted successfully');
    }
}
