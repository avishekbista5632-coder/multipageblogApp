@extends('layouts.app')

@section('content')
    <h1>Create New Post</h1>

    <form action="/posts" method="POST">
        @csrf

        <input type="text" name="title" placeholder="Title" required>
        <textarea name="body" placeholder="Content" required></textarea>

        <div style="text-align: center; margin-top: 20px;">
            <button type="submit">Create</button>
        </div>
    </form>
@endsection
