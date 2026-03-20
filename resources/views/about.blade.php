@extends('layouts.app')

@section('content')
<div style="text-align: center; margin-top: 50px;">
<h1>About This Blog</h1>
<p>This is a multipage Laravel blog built to share ideas, thoughts, and creativity. You can create, edit, and delete posts, and read posts from others.</p>

    <div style="margin-top: 30px;">
        <a href="{{ route('posts.index') }}" class="btn-primary">View Posts</a>
        <a href="{{ route('posts.create') }}" class="btn-primary">Add Post</a>
    </div>
</div>
@endsection
