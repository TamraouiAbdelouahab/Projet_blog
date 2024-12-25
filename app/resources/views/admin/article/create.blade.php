
@extends('layouts.admin')
    @section('content')
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Ajouter un Article</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('article.store')}}" method="POST">
                @csrf <!-- Pour la sécurité CSRF -->
                <div class="card-body">
                    <!-- Champ Titre -->
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Entrez le titre">
                    </div>
                    <!-- Champ Description -->
                    <div class="form-group">
                        <label for="description">Content</label>
                        <textarea name="content" class="form-control" id="description" rows="3" placeholder="Entrez la description"></textarea>
                    </div>

                    <!-- Champ Catégorie -->
                    <div class="form-group">
                        <label for="category">Catégorie</label>
                        <select name="category" class="form-control" id="category">

                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach

                        </select>
                    </div>

                    <!-- Champ Image -->
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control-file" id="image">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>
    @endsection
