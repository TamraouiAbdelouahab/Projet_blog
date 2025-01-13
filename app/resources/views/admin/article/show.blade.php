@extends('layouts.admin')
    @section('content')
        <!-- Content Header -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Détail</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{Route('dashboard')}}">Accueil</a></li>
                            <li class="breadcrumb-item active"><a href="{{Route('article.index')}}">Articles</a></li>
                            <li class="breadcrumb-item active">view</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row mb-2 justify-content-end">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <a href="{{ Route('article.edit',$article) }}" class="btn btn-primary btn-sm p-2 text-white"><i class="fas fa-edit mr-2"></i>Modifier</a>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card p-4">
                    <h4>ID:</h4>
                    <p>{{ $article->id }}</p>
                    <h4>Titre:</h4>
                    <p>{{ $article->title }}</p>
                    <h4>Contenue:</h4>
                    <p>{{ $article->content }}</p>
                    <h4>Auteur:</h4>
                    <p>{{ $article->user->name }}</p>
                    <h4>Categorie:</h4>
                    <p>{{ $article->category->name }}</p>
                    <h4>Date de publication:</h4>
                    <p>{{ $article->created_at->format('d M Y, H:i') }}</p>

                    <div class="d-flex justify-content-end mt-3">
                        <a href="{{ Route('comment.indexByArticle',$article) }}" class="btn btn-secondary btn-sm p-2 text-white">
                            <i class="fas fa-comments mr-2"></i>Voire les commentaires
                        </a>
                    </div>
                </div>
            </div>
        </section>



    @endsection
