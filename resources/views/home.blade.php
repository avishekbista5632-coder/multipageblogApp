@extends('layouts.app')

@section('content')
<div style="text-align: center; margin-top: 50px;">
    <h1>Welcome to Ideas & Thoughts</h1>
    <p>Share your ideas or read what others are thinking.</p>

    <div style="margin-top: 30px;">
        <a href="{{ route('posts.index') }}" class="btn-primary">View Posts</a>
        <a href="{{ route('posts.create') }}" class="btn-primary">Add Post</a>
    </div>
</div>
@endsection
