<!DOCTYPE html>
<html lang="en">
@include('admin.head')
<body>
    <div id="wrapper">
        @include('admin.nav')
        <div>
            <div class="row text-center">
                <h2>MODIFIER L'ANNONCE </h2>
            </div>
            <form action="{{ route('annonces.update', $annonce->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="titre">Titre</label>
                    <input type="text" class="form-control" id="titre" name="titre" value="{{ $annonce->titre }}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description">{{ $annonce->description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="prix">Prix</label>
                    <input type="number" class="form-control" id="prix" name="prix" value="{{ $annonce->prix }}">
                </div>

                <div class="form-group">
                    <label for="categorie_id">Catégorie</label>
                    <select class="form-control" id="categorie_id" name="categorie_id">
                        @foreach ($categories as $categorie)
                        <option value="{{ $categorie->id }}" {{ $annonce->categorie_id == $categorie->id ? 'selected' : '' }}>{{ $categorie->nom }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="image">fichier</label>
                    <input type="file" class="form-control-file" id="fichier" name="fichier">
                      <!-- Afficher le fichier de l'annonce si il existe -->
                      @if ($annonce->fichier)
                      <!-- Détecter le type de fichier en utilisant l'extension -->
                      @php
                      $extension = pathinfo($annonce->fichier, PATHINFO_EXTENSION);
                      @endphp
                      <!-- Utiliser un élément img si le fichier est une image -->
                      @if ($extension == 'jpg' || $extension == 'png' || $extension == 'gif')
                      <img src="{{ asset('imgannonce/' . $annonce->fichier) }}" class="card-img-top" alt="{{ $annonce->titre }}"
                      width="250" height="500">
                                                                 <!-- Utiliser un élément video si le fichier est une vidéo -->
                      @elseif ($extension == 'mp4' || $extension == 'avi' || $extension == 'mov')
                      <video src="{{ asset('imgannonce/' . $annonce->fichier) }}" class="card-img-top" width="200" height="300"></video>
                      <!-- Utiliser un élément audio si le fichier est un son -->
                      @elseif ($extension == 'mp3' || $extension == 'wav' || $extension == 'ogg')
                      <audio src="{{ asset('imgannonce/' . $annonce->fichier) }}" class="card-img-top" controls></audio>
                      @endif
                      @endif
                </div>

                <button type="submit" class="btn btn-info">Modifier</button>
            </form>
        </div>
    </div>
</body>
</html>
