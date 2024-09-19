@extends('layouts.app')

@section('content')
    <h1>Posts</h1>

    <a href="{{ route('posts.create') }}">Create Post</a>

    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    @foreach ($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            <a href="{{ route('posts.show', $post) }}">View</a>
            <a href="{{ route('posts.edit', $post) }}">Edit</a>
            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                @csrf
                @method('DELETE')
    @endforeach

    <p>hello</p>

    {{ $posts->links() }}
@endsection
