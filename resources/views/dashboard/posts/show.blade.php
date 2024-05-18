@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <h2 class="text-3xl font-bold">{{ $post->title }}</h2>
        <div class="flex space-x-4">

            <a href="/dashboard/posts" class="flex"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 12h14M5 12l4-4m-4 4 4 4" />
                </svg>
                <span>Back</span>
            </a>


            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="flex"><svg
                    class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                </svg>
                <span>Edit</span>
            </a>




            <form action="/dashboard/posts/{{ $post->slug }}" method="post">
                @method('delete')
                @csrf
                <button class="flex" onclick="return confirm('Are you sure?')"><svg
                        class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg><span>Delete</span></button>

            </form>


        </div>
        @if ($post->image)
            <img class="w-full" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
        @else
            <img class="w-full" src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}"
                alt="{{ $post->category->name }}">
        @endif
        {!! $post->body !!}

    </div>
@endsection
