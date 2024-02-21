<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\SavePostRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller {

    public function __construct() {
        $this->middleware('auth', ['except' => ['home', 'index', 'show']]);
    }

    public function home() {
        $posts = Post::orderBy('id', 'desc')->take(3)->get();
        return view('home', ['posts' => $posts]);
    }
    
    public function index() {
        $perPage = 3;

        $posts = Post::orderBy('id', 'desc')->simplePaginate($perPage);
        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post) {
        return view('posts.show', ['post' => $post]);
    }
    
    public function create() {
        return view('posts.create', ['post' => new Post]);
    }

    public function store(SavePostRequest $request) {
        $info = $request->validated();
        $info['author'] = Auth::user()->name;
        
        if($request->hasFile('image')) {
            $info['image'] = $request->file('image')->store('uploads', 'public');
        }

        Post::create($info);
        return to_route('posts.index')->with('status', '¡La publicación se ha creado con éxito!');
    }

    public function edit(Post $post) {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(SavePostRequest $request, Post $post) {
        $info = $request->validated();

        if($request->hasFile('image')) {
            Storage::delete('public/'.$post->image);
            $info['image'] = $request->file('image')->store('uploads', 'public');
        }

        $post->update($info);
        return to_route('posts.show', $post)->with('status', '¡La publicación se ha editado con éxito!');
    }

    public function destroy(Post $post) {
        if(Storage::delete('public/'.$post->image)) {
            $post->delete();
        }

        return to_route('posts.index')->with('status', '¡La publicación se ha eliminado con éxito!');
    }

}
