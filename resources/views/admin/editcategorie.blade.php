<!DOCTYPE html>
<html lang="en">
    @include('admin.head')
    <body>
        <div id="wrapper">
            @include('admin.nav')
<div class="row">
    <div class="col-lg-12">
        <h1>Modifier une catégorie</h1>
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Voici le formulaire pour modifier une catégorie. Veuillez remplir tous les champs obligatoires.
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" id="name" name="nom" value="{{ $category->nom }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="5">{{ $category->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>

            <p class="help-block">
                Allowed formats: jpeg, jpg, gif, png
            </p><br><br>

            <div class="form-group">
                <button type="submit" class="btn btn-info">Modifier</button>
            </div>
        </form>
    </div>
</div>
     <!-- /#wrapper -->
    </body>
    </html>
