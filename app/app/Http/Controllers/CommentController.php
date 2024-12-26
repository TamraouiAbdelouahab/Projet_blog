<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    public function indexByArticle(Article $article){
        $comments = $article->comments;
        return view("admin.comment.index", compact("comments","article"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        return view("admin.comment.show", compact("comment"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        return view("admin.comment.edit", compact("comment"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        $valideted = $request->validate([

            'content'=> 'required',
        ]);

        $comment->update([
            'content'=> $valideted['content'],
        ]);
        $article = $comment->article;

        return redirect()->route('comment.indexByArticle',$article)->with('success', 'Commentaire modifier avec succès.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $article = $comment->article;
        $comment->delete();
        return redirect()->route('comment.indexByArticle',$article)->with('success', 'Commentaire supprimé avec succès.');
    }
}
