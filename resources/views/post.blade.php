@extends('layouts.main')

@section('container')
    <h2 class="text-3xl font-bold">{{ $post->title }}</h2>
    <p>By <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a
            href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>

    @if ($post->image)
        <img class="w-full" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
    @else
        <img class="w-full" src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}"
            alt="{{ $post->category->name }}">
    @endif
    {!! $post->body !!}
    <a href="/blog">Back to Posts</a>
@endsection
