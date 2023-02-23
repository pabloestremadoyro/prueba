<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\SavePostRequest;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function __construct(){
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    public function index()
    {
        $posts = Post::get();

        return view('posts.index', ['posts' => $posts]);

    }

    public function show(Post $post)
    {
       //return $post;
       return view('posts.show', ['post' => $post]);

    }

    public function create()
    {
        return view('posts.create', ['post' => new Post]);
    }

    public function store(SavePostRequest $request)
    {


  /*
        $post = new Post;
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();
*/

        Post::create($request->validated());

        //session()->flash('status', 'Post Creado!');
        return to_route('posts.index')->with('status', 'Post Creado!');

    }

    public function edit(Post $post){

        return view('posts.edit', ['post' => $post]);

    }

    public function update(SavePostRequest $request, Post $post)
    {
       // $post = Post::find($post);


       // $post->title = $request->input('title');
       // $post->content = $request->input('content');
       // $post->save();

        $post->update($request->validated());


        //session()->flash('status', 'Post Actualizdo!');
        return to_route('posts.show', $post)->with('status', 'Post Actualizdo!');
    }

    public function destroy(Post $post)
    {
       // return $post;
       $titulo = $post->title;
       $post->delete();
        return to_route('posts.index')->with('status', "Post \"$titulo\" Eliminado");

    }


}
