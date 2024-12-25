@extends('layouts.public')

@section('content')
<div class="container mx-auto my-12 px-6">

    <!-- Header -->
    <div class="text-center mb-12">
        <h1 class="text-5xl font-bold text-gray-900">Article Details</h1>
    </div>

    <!-- Article Card -->
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <!-- Article Image -->
        @if(!empty($article->image_url))
            <img class="w-full h-64 object-cover" src="{{ $article->image_url }}" alt="{{ $article->title }}">
        @else
            <img class="w-full h-64 object-cover" src="https://via.placeholder.com/1200x600" alt="Placeholder Image">
        @endif
        <div class="p-8">

            <!-- Article Title -->
            <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ $article->title }}</h2>

            <!-- Author and Metadata -->
            <div class="flex flex-wrap gap-4 mb-6 text-sm text-gray-600">
                <p>By <span class="font-medium text-gray-800">{{ $article->user->name }}</span></p>
                <p>Published on <span>{{ $article->created_at->format('F j, Y') }}</span></p>
                <p>Category:                     <span class="inline-block bg-purple-100 text-purple-600 text-xs font-semibold rounded-full px-3 py-1 mb-3">
                        {{ $article->category->name }}
                    </span>
</p>
            </div>

            <!-- Article Content -->
            <div class="text-gray-800 leading-relaxed">
                {{ $article->content }}
            </div>
        </div>
    </div>

    <!-- Comments Section -->
    <div class="bg-gray-50 rounded-lg shadow-md p-6 mt-12">
        <h3 class="text-2xl font-semibold text-gray-900 underline">Comments</h3>

        <!-- Display Comments -->
        @if ($article->comments->isEmpty())
            <p class="text-gray-600 mt-4">No comments yet. Be the first to comment!</p>
        @else
            <div class="mt-6 space-y-6">
                @foreach ($article->comments as $comment)
                    <div class="border-b border-gray-300 pb-4">
                        <p class="font-medium text-gray-800">{{ $comment->user->name }}</p>
                        <p class="mt-2 text-gray-700">{{ $comment->content }}</p>
                    </div>
                @endforeach
            </div>
        @endif

        <!-- Add Comment Form -->
        <form action="" method="POST" class="mt-8">
            @csrf
            <textarea name="content" rows="3" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400" placeholder="Write your comment..." required></textarea>

            <button type="submit" class="mt-4 w-full px-4 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-500">
                Add Comment
            </button>
        </form>
    </div>

    <!-- Back to Articles Button -->
    <div class="mt-12 text-center">
        <a href="{{ route('public.public.index') }}" class="px-8 py-3 bg-green-600 text-white rounded-lg hover:bg-green-500 inline-block">
            Back to Articles
        </a>
    </div>
</div>
@endsection
