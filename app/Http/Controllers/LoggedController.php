<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\PostAction;
use App\Post;


class LoggedController extends Controller{
  public function __construct(){
      $this->middleware('auth');
  }

  public function delete($id){
    $post = Post::findOrFail($id);
    $post -> delete();

    $user = Auth::user();
    $action = 'DELETE';

    Mail::to("admin@boolean.com")
        ->send(new PostAction($user, $post, $action));

    return redirect() -> route('posts-index');
  }

  public function edit($id){
    $post = Post::findOrFail($id);

    return view('posts.post-edit', compact('post'));
  }

  public function update(Request $request, $id){
    $data = $request -> all();
    $post = Post::findOrFail($id);

    $post -> update($data);
    return redirect() -> route('posts-index');
  }

  public function create(){

    return view('posts.post-create');
  }

  public function store(Request $request){
    $data = $request -> all();
    $post = Post::create($data);

    return redirect() -> route('posts-index');
  }
}
