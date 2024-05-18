@extends('layouts.main')

@section('container')
    <h1>Post Categories</h1>
    <div class="container">
        <div class="flex justify-center">
            <div class="grid grid-cols-3 gap-4 ustify-items-center">
                @foreach ($categories as $category)
                    <a href="/posts?category={{ $category->slug }}">
                        <div class="max-w-sm rounded overflow-hidden shadow-lg">
                            <div class="absolute bg-black p-3 text-white">{{ $category->name }}</div>
                            <img class="w-full" src="https://source.unsplash.com/500x500/?{{ $category->name }}"
                                alt="{{ $category->name }}">


                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
