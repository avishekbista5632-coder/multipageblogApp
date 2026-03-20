<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // List all posts
    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    // Show form to create a new post
    public function create()
    {
        return view('posts.create');
    }

    // Store a new post
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body'  => 'required',
        ]);

        Post::create($request->all());

        return redirect()->route('posts.index')
                        ->with('flash', [
                            'message' => 'Post created successfully!',
                            'type' => 'success',
                            'duration' => 4000 // 4 seconds
                        ]);
    }

    // Show a single post
    // ✅ Using route model binding
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    // Show form to edit a post
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // Update an existing post
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body'  => 'required',
        ]);

        $post->update($request->all());

        return redirect()->route('posts.show', $post)
                        ->with('flash', [
                            'message' => 'Post updated successfully!',
                            'type' => 'success',
                            'duration' => 4000
                        ]);
    }

    // Delete a post
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')
                        ->with('flash', [
                            'message' => 'Post deleted successfully!',
                            'type' => 'success',
                            'duration' => 6000 // 6 seconds for delete
                        ]);

    }
}
