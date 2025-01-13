@extends('layouts.admin')
@section('content')
    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Détails du Commentaire</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Accueil</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('comment.index') }}">Commentaires</a></li>
                        <li class="breadcrumb-item active">Vue</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card shadow-sm p-4">

                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <strong>ID :</strong>
                            <p class="text-muted">{{ $comment->id }}</p>
                        </div>
                        <div class="col-md-6">
                            <strong>Créé le :</strong>
                            <p class="text-muted">{{ $comment->created_at->format('d M Y, H:i') }}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <strong>Contenu :</strong>
                            <p class="text-muted">{{ $comment->content }}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <strong>Utilisateur :</strong>
                            <p class="text-muted">{{ $comment->user->name ?? 'Non attribué' }}</p>
                        </div>
                        <div class="col-md-6">
                            <strong>Email de l'utilisateur :</strong>
                            <p class="text-muted">{{ $comment->user->email ?? 'Non disponible' }}</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('comment.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i></a>
                    <form action="{{ route('comment.destroy', $comment) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
