@extends('layouts.main')

@section('container')
    <h1>{{ $title }}</h1>
    @foreach ($posts as $post)
        <h2 class="text-3xl font-bold"><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
        <p>By. <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a
                href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        <p>{{ $post->excerpt }}</p>
        <a href="/posts/{{ $post->slug }}">Read more...</a>
    @endforeach
@endsection
