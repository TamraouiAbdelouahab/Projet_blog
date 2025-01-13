@extends('layouts.admin')
@section('content')
    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Liste des Commentaires</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                        <li class="breadcrumb-item active">Commentaires</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                    
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- Filter Inputs -->
                    <form method="GET" action="{{ route('comment.index') }}" class="mb-3">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" name="article" value="{{ request('article') }}" class="form-control" placeholder="Rechercher par article">
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="author" value="{{ request('author') }}" class="form-control" placeholder="Rechercher par auteur">
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i> Rechercher</button>
                            </div>
                        </div>
                    </form>

                    <div class="table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Commentaire</th>
                                    <th>Auteur</th>
                                    <th>Article</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($comments as $comment)
                                    <tr>
                                        <td>{{ $comment->id }}</td>
                                        <td>{{ $comment->content }}</td>
                                        <td>{{ $comment->user->name }}</td>
                                        <td>{{ $comment->article->title }}</td>
                                        <td>{{ $comment->created_at->format('Y-m-d') }}</td>
                                        <td>
                                            <a href="{{ route('comment.show', $comment) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                            <form action="{{ route('comment.destroy', $comment) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </section>
@endsection
