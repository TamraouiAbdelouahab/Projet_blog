@extends('layouts.admin')
    @section('content')
        <div class="card card-primary">
            <div class="container-fluid">
                <div class="row mb-2 pt-4 justify-content-end">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{Route('dashboard')}}">Accueil</a></li>
                            <li class="breadcrumb-item active"><a href="{{Route('comment.index')}}">Commentaires</a></li>
                            <li class="breadcrumb-item active">Modifier</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="card-header">
                <h3 class="card-title">modifier un commentaire</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ Route('comment.update',$comment) }}" method="POST">
                @csrf <!-- Pour la sécurité CSRF -->
                @method('put')
                <div class="card-body">
                    <!-- Champ Nom -->
                    <div class="form-group">
                        <label for="content">commentaire</label>
                        <input type="text" name="content" class="form-control" id="content" placeholder="Entrez le Commentaire" value="{{ $comment->content }}">
                    </div>


                </div>
                <div class="card-footer d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>
    @endsection
