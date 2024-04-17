<?php

namespace App\Http\Controllers;
use App\Http\Requests\SavePostRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Illuminate\Http\Request;
class PostController extends Controller
{
    public function __construct(){
      $this->middleware("auth",['except'=>['index','show']]);
    }
    public function index(){
       // $posts = DB::table("posts")->get();
       $posts = Post::get();
            return view('posts.index',['posts' => $posts]);
    }
    public function show(Post $post){
      return view('posts.show',['post'=> $post]);
    }

    public function create(){
      return view('posts.create',['post'=> new Post()]);
    }
    public function store(SavePostRequest $request){
      Post::create($request -> validated());
      return to_route('posts.index')->with('status','Post creado exitosamente');
    }

    public function edit(Post $post){
      return view('posts.edit',['post' => $post]);
    }
    public function update(SavePostRequest $request ,Post $post){
    
      $post->update($request ->validated());
      
    return redirect()->route('posts.show',$post)->with('status','Post actualizado exitosamente');
    }

    public function destroy(Post $post){
      $post->delete();
      return to_route('posts.index')->with('status','Post eliminado correctamente');
    }
}