@extends('layouts.main')

@section('container')
    <h1 class="text-3xl font-bold text-center my-4">{{ $title }}</h1>

    <form class="max-w-md mx-auto mb-5" action="/posts">
        @if (request('category'))
            <input type="hidden" name="categeory" value="{{ request('category') }}">
        @endif
        @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
        @endif
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="text" name="search" value="{{ request('search') }}"
                class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Search" required />
            <button type="submit"
                class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
        </div>
    </form>


    @if ($posts->count())
        <div>
            @if ($posts[0]->image)
                <img class="w-full" src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}">
            @else
                <img class="w-full" src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}"
                    alt="{{ $posts[0]->category->name }}">
            @endif

            <div class="text-center">
                <div class="font-bold text-xl mb-2"><a href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></div>
                <p>By. <a href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a
                        href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                    {{ $posts[0]->created_at->diffForHumans() }}</p>
                <p class="text-base">
                    {{ $posts[0]->excerpt }}
                </p>

                <a href="/posts/{{ $posts[0]->slug }}"><button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Read More
                    </button></a>
            </div>

        </div>


        <div class="container">
            <div class="flex justify-center">
                <div class="grid grid-cols-3 gap-4 ustify-items-center">
                    @foreach ($posts->skip(1) as $post)
                        <div class="max-w-sm rounded overflow-hidden shadow-lg">
                            <div class="absolute bg-black p-3 text-white"><a
                                    href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                            </div>
                            @if ($post->image)
                                <img class="w-full" src="{{ asset('storage/' . $post->image) }}"
                                    alt="{{ $post->category->name }}">
                            @else
                                <img class="w-full" src="https://source.unsplash.com/500x500/?{{ $post->category->name }}"
                                    alt="{{ $post->category->name }}">
                            @endif

                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">{{ $post->title }}</div>
                                <p>By. <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                                    {{ $post->created_at->diffForHumans() }}</p>
                                <p class= "text-base">
                                    {{ $post->excerpt }}
                                </p>
                                <a href="/posts/{{ $post->slug }}"><button
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        Read More
                                    </button></a>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @else
        <p>No post found</p>
    @endif

    {{ $posts->onEachSide(5)->links() }}
@endsection
