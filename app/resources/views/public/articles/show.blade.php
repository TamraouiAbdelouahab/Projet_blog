@extends('layouts.public')

@section('content')
<div class="container mx-auto my-10 px-4">
    <!-- Header -->
    <div class="text-center">
        <h1 class="text-5xl font-extrabold text-gray-900">Article Details</h1>
    </div>

    <!-- Article Card -->
    <div class="bg-white shadow-lg rounded-lg p-8 mt-10 border border-gray-200">
        <!-- Article Title -->
        <h2 class="text-3xl font-bold text-gray-900">Title: <span class="font-extrabold text-blue-600">{{ $article->title }}</span></h2>

        <!-- Author and Metadata -->
        <div class="mt-4 text-sm text-gray-600">
            <p>By <span class="font-medium text-gray-800">{{ $article->user->name }}</span></p>
            <p>Published on <span>{{ $article->created_at->format('F j, Y') }}</span></p>
            <p>Category: <span class="font-medium text-gray-800">{{ $article->category->name }}</span></p>
        </div>

        <!-- Article Content -->
        <div class="mt-6 text-gray-800 leading-relaxed">
            {{ $article->content }}
        </div>
    </div>

    <!-- Comments Section -->
    <div class="bg-gray-50 rounded-lg shadow-md p-6 mt-10">
        <h3 class="text-2xl font-semibold text-gray-900 underline">Comments</h3>

        <!-- Display Comments -->
        @if ($article->comments->isEmpty())
            <p class="text-gray-600 mt-4">No comments yet. Be the first to comment!</p>
        @else
            <div class="mt-6 space-y-4">
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
            <textarea name="content" rows="2" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400" placeholder="Write your comment..." required></textarea>

            <button type="submit" class="mt-4 w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-500">
                Add Comment
            </button>
        </form>
    </div>

    <!-- Back to Articles Button -->
    <div class="mt-10 text-center">
        <a href="/" class="px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-500 inline-block">
            Back to Articles
        </a>
    </div>
</div>
@endsection
