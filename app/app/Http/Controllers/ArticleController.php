<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::All();
        return view('admin.article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::All();
        return view('admin.article.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $this->validate($request, [
        'title'=> 'required',
        'content'=> 'required',
        'category'=> 'required']);

        $article = Article::create([
            'title'=> $request->title,
            'content'=> $request->content,
            'user_id'=>Auth::user()->id,
            'category_id'=> $request->category,
        ]);

        return redirect()->route('article.index')->with('success', 'Article créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.article.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.article.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Article $article)
    {
        // $article = Article::find($id);
        $article->delete();
        return redirect()->route('article.index')->with('success', 'Article supprimé avec succès.');
    }
}
