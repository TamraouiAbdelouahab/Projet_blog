@extends('layouts.public')

@section('title', 'Articles')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center mb-6">Latest Articles</h1>
    <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($articles as $article)
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <!-- Article Image -->
                @if ($article->image)
                    <img src="{{ $article->image }}" alt="{{ $article->title }}" class="w-full h-48 object-cover">
                @else
                @endif
                <!-- Article Content -->
                <div class="p-6 flex flex-col h-full">
                    <h2 class="text-xl font-semibold mb-2">
                        <a href="{{ route('public.public.show', $article->id) }}" class="hover:underline text-blue-600">
                            {{ $article->title }}
                        </a>
                    </h2>
                    <p class="text-gray-500 text-sm mb-4">
                        By <strong>{{ $article->user->name }}</strong> in 
                        <strong>{{ $article->category->name }}</strong>
                    </p>
                    <p class="text-gray-700 flex-grow">{{ Str::limit($article->content, 100) }}</p>
                    <!-- Fixed Button -->
                    <a href="{{ route('public.public.show', $article->id) }}" 
                       class="mt-4 py-2 px-4 bg-light-300 text-black-100 text-sm font-bold rounded-xl hover:bg-gray-300 transition duration-200">
                        Read More
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
