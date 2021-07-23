<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    function index(){
        $posts = Post::query()->get();
        return view('models.posts.index', [
            'posts' => $posts
        ]);
    }

    function create(){
        return view('models.posts.form');
    }

    function store(){
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $post = Post::query()
            ->create($data);

        $this->uploadImage($post);

        return redirect()->route('posts.show', $post);
    }

    function show(Post $post){
        return view('models.posts.show',[
            'post' => $post
        ]);
    }

    function edit(Post $post){
        return view('models.posts.form',[
            'post' => $post
        ]);
    }

    function update(Post $post){
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $post->update($data);
        $this->uploadImage($post);
        return redirect()->route('posts.show', $post);
    }

    function destroy(Post $post){
        $post->delete();
        return redirect()->route('posts.index');
    }

    function uploadImage(Post $post){
        $path = request()->file('image')->store('public');

        if($path === false)
            throw 'Eroor';
        $post->fill([
            'image_path' => $path
        ])->save();
    }

}
