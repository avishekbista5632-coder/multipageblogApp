@php use Illuminate\Support\Str; @endphp
@extends('layouts.app')

@section('content')
<h1 class="page-title">Ideas & Thoughts</h1>

@if($posts->count())
    <div class="posts-grid">
        @foreach($posts as $post)
            <div class="post-card">
                <!-- Make the entire card clickable -->
                <a href="{{ route('posts.show', $post) }}" class="post-link">
                    <h2>{{ $post->title }}</h2>
                    <p class="post-preview">{{ Str::limit($post->body, 120) }}</p>
                    <span class="read-more">Read more →</span>
                </a>
            </div>
        @endforeach
    </div>
@else
    <p>No ideas shared yet. ✨</p>
@endif
@endsection
