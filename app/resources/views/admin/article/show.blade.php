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
                    <h4>id : </h4>
                    <p>{{ $article->id }}</p>
                    <h4>Name : </h4>
                    <p>{{ $article->title }}</p>
                    <h4>Contenu : </h4>
                    <p>{{ $article->content }}</p>
                    <h4>User_id : </h4>
                    <p>{{ $article->user_id }}</p>
                    <h4>Category_id : </h4>
                    <p>{{ $article->category_id }}</p>
                    <h4>Created at : </h4>
                    <p>{{ $article->created_at }}</p>


                </div>
            </div>
        </section>
    @endsection
