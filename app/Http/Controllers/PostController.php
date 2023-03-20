<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\SavePostRequest;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except'=>['index', 'show']]);
    }


    public function index(){  
    $posts = Post::get();
    return view('posts.index',['posts' => $posts]);
    }


    public function show(Post $post){
        return view('posts.show', ['post' => $post]);
    }


    public function create(){
        return view('posts.create', ['post' => new Post]);
    }


    public function store(SavePostRequest $request){
       // $validated = $request->validate([
         //   'title' => ['required', 'min:4'],
           // 'body' => ['required'],
           //]);
    
        Post::create($request->validated());

        return to_route('posts.index')->with('status', 'Post created!');
    }

    public function edit(Post $post){

        return view('posts.edit', ['post' => $post]);
    }


    public function update(SavePostRequest $request, Post $post){

        $post->update($request->validated());

        return to_route('posts.show', $post)->with('status', 'Editado exitosamente!');

    
    }

    public function destroy(Post $post){
        $post->delete();
        return to_route('posts.index')->with('status, Post deleted');
    }

    public function pdf(Post $post){
        return view('posts.pdf');
    }








}
