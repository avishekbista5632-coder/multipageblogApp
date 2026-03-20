@extends('layouts.app')

@section('content')
<div class="single-post">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>

    <div class="post-footer">
        <a href="{{ route('posts.index') }}" class="back-btn">← Back to ideas</a>

        <div class="post-actions always-visible">
            <a href="{{ route('posts.edit', $post->id) }}" class="edit">✏️ Edit</a>

            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete">🗑 Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
