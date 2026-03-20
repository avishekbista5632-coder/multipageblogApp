<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Multi Page Blog</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<nav class="navbar">
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/posts">Posts</a>
    <a href="/posts/create">Add Post</a>
</nav>

<div class="container">

    {{-- Flash message (success / error) --}}
    @if(session('flash'))
        <div class="alert-{{ session('flash.type') }}" data-duration="{{ session('flash.duration') }}">
            {{ session('flash.message') }}
        </div>
    @endif

    {{-- Validation error messages --}}
    @if ($errors->any())
        <div class="alert-error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @yield('content')
</div>

<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
