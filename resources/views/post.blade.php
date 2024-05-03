@extends('layouts.main')

@section('container')
    <h2 class="text-3xl font-bold">{{ $post->title }}</h2>
    <p>By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a
            href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

    {!! $post->body !!}
    <a href="/blog">Back to Posts</a>
@endsection
