@extends('layouts.public')

@section('content')

<!-- Page Header -->
<div class="bg-gray-200 py-10">
    <h1 class="text-4xl font-bold text-center text-gray-800">
        Latest Articles
    </h1>
</div>

<!-- Articles Grid -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-8 py-10 px-6">
    @foreach ($articles as $article)
        <div class="bg-white shadow-lg rounded-lg overflow-hidden transition-transform transform hover:-translate-y-2 hover:shadow-2xl duration-300">
            <!-- Article Image -->
            <a href="{{ route('public.public.show', $article->id) }}">
                <img class="w-full h-48 object-cover" src="{{ $article->image_url ?? 'https://via.placeholder.com/400x200' }}" alt="{{ $article->title }}">
            </a>
            
            <!-- Article Content -->
            <div class="p-6">
                <!-- Category -->
                @if(!empty($article->category))
                    <span class="inline-block bg-purple-100 text-purple-600 text-xs font-semibold rounded-full px-3 py-1 mb-3">
                        {{ $article->category->name }}
                    </span>
                @endif

                <!-- Article Title -->
                <a href="{{ route('public.public.show', $article->id) }}" class="block text-2xl font-semibold text-gray-800 hover:text-purple-600 transition-colors duration-300">
                    {{ $article->title }}
                </a>

                <!-- Content Preview -->
                <p class="text-gray-600 mt-3 line-clamp-3">
                    {{ Str::limit($article->content, 100, '...') }}
                </p>
            </div>

            <!-- Footer Section -->
            <div class="bg-gray-100 px-6 py-4 flex justify-between items-center">
                <!-- Tags -->
                <div class="flex flex-wrap gap-2">
                    @if(!empty($article->tags))
                        @foreach ($article->tags as $tag)
                            <span class="text-xs bg-blue-100 text-blue-600 font-semibold px-2.5 py-0.5 rounded">
                                {{ $tag->name }}
                            </span>
                        @endforeach
                    @endif
                </div>

                <!-- Author Info -->
                <div class="flex items-center">
                    <img class="w-8 h-8 rounded-full object-cover" src="{{ $article->user->profile_picture ?? 'https://via.placeholder.com/50' }}" alt="{{ $article->user->name }}">
                    <p class="ml-2 text-sm font-medium text-gray-700">
                        {{ $article->user->name }}
                    </p>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
