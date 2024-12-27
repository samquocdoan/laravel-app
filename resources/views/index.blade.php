@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <div class="post_container flex flex-col gap-8">
            @foreach ($posts as $post)
                <div class="mb-8 border-b-2 border-gray-300 pb-6">
                    <h2
                        class="text-2xl font-semibold text-gray-900 hover:text-indigo-600 transition duration-300 ease-in-out">
                        {{ $post->title }}</h2>
                    <div class="time-and-author flex items-center mt-3 gap-4 text-sm text-gray-500">
                        <p class="font-medium text-gray-700">By <span
                                class="font-semibold text-indigo-600">{{ $post->user_name }}</span></p>
                        <p class="text-gray-400">{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</p>
                    </div>
                    <p class="text-gray-700 mt-4 text-base leading-relaxed">{{ $post->content }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
