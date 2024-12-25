<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
        public function publicIndex()
    {
        $articles = Article::all();
        return view('public.articles.index', compact('articles'));
    }
    public function publicShow($id)
    {
        $article = Article::findOrFail($id);
        // dd($article->comments);
        return view('public.articles.show', compact('article'));
    }
    
    public function index()
    {
        return view('home');
    }
}
