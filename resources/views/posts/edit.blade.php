@extends('layouts.app')

@section('content')
<h1 >Edit Idea</h1>


<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="title" value="{{ old('title', $post->title) }}" placeholder="Title" required>

    <textarea name="body" placeholder="Content" required>{{ old('body', $post->body) }}</textarea>

    <button type="submit">Update</button>
    <a href="{{ route('posts.show', $post->id) }}" class="cancel-btn">Cancel</a>
</form>

@endsection
