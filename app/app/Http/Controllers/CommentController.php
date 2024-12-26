<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request, $articleId)
    {
        // Validate the request
        $request->validate([
            'content' => 'required|string|max:500',
        ]);

        // Find the article
        $article = Article::findOrFail($articleId);

        // Create and save the comment
        $article->comments()->create([
            'content' => $request->content,
            'user_id' => auth()->id(), // Assuming the user is logged in
        ]);

        // Redirect back with a success message
        return redirect()->route('public.public.show', $article->id)
            ->with('success', 'Your comment has been added!');
    }
}
