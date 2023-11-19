<!DOCTYPE html>
<html lang="en">
@include('admin.head')

<body>
    <div id="wrapper">
        @include('admin.nav')

        <hr />

        <div class="container">
            <div class="row">
                <div class="panel-heading">
                    <h2 class="d-sm-flex align-items-center justify-content-between mb-4"><i
                            class="fa fa-bar-chart-o"></i> Liste des Annonces</h2>
                </div>
                <div class="row">
                    <!-- Ajouter un bouton pour créer une nouvelle annonce -->
                    <div class="col-md-12 text-center"> <!-- Ajouter la classe text-center ici -->
                        <a href="{{ route('annonces.create') }}" class="btn btn-info">Ajouter <i class="fa fa-plus">
                            </i></a>
                    </div><br><br><br>
                    <p></p>
                    <!-- Afficher les annonces existantes sous forme de cartes -->
                    <div class="col-md-12 text-center"> <!-- Ajouter la classe text-center ici -->
                        <div class="card-columns">
                            <!-- Utiliser une boucle pour parcourir les annonces -->
                            @forelse ($annonces as $annonce)
                                <br>
                                <br>
                                <br>
                                <div class="card">
                            <a href="{{ route('annonces.show',$annonce->id) }}">

                                    <!-- Afficher le fichier de l'annonce si il existe -->
                                    @if ($annonce->fichier)
                                        <!-- Détecter le type de fichier en utilisant l'extension -->
                                        @php
                                            $extension = pathinfo($annonce->fichier, PATHINFO_EXTENSION);
                                        @endphp
                                        <!-- Utiliser un élément img si le fichier est une image -->
                                        @if ($extension == 'jpg' || $extension == 'png' || $extension == 'gif')
                                            <img src="{{ asset('imgannonce/' . $annonce->fichier) }}"
                                                class="card-img-top" alt="{{ $annonce->titre }}" width="350"
                                                height="200">
                                            <!-- Utiliser un élément video si le fichier est une vidéo -->
                                        @elseif ($extension == 'mp4' || $extension == 'avi' || $extension == 'mov')
                                            <video src="{{ asset('imgannonce/' . $annonce->fichier) }}"
                                                class="card-img-top" width="400" controls></video>
                                            <!-- Utiliser un élément audio si le fichier est un son -->
                                        @elseif ($extension == 'mp3' || $extension == 'wav' || $extension == 'ogg')
                                            <audio src="{{ asset('imgannonce/' . $annonce->fichier) }}"
                                                class="card-img-top" controls></audio>
                                        @endif
                                    @endif
                                    <div class="card-body">
                                        <!-- Afficher le titre, la description, le prix et la date_annonce de l'annonce -->
                                        <h5 class="card-title">{{ $annonce->titre }}</h5>
                                        <p class="card-text"> {!! nl2br(e(Str::limit($annonce->description, 50,' . . .voir plius'))) !!}</p>
                                        <p class="card-text"><strong>Prix: </strong>{{ $annonce->prix }} FCFA</p>
                                        <p class="card-text"><small class="text-muted">Publié le
                                                {{ $annonce->date_annonce }}</small></p>
                                        <!-- Afficher le user_id et le categorie_id de l'annonce -->
                                        <p class="card-text"><strong>Catégorie: </strong>{{ $annonce->Categorie->nom }}
                                        </p>
                                        <!-- Ajouter des boutons pour modifier et supprimer l'annonce -->
                                        <a href="{{ route('annonces.edit', $annonce->id) }}" class="btn btn-warning"><i
                                                class="fa fa-edit"></i></a>
                                        <!-- Utiliser un formulaire pour supprimer l'annonce avec la méthode DELETE -->
                                        <form action="{{ route('annonces.destroy', $annonce->id) }}" method="POST"
                                            style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette annonce ?')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                            </a>
                                </div>
                            @empty
                                <div class="text-center">
                                    <h2>Aucune annonce pour le moment</h2>
                                </div>

                            @endforelse
                        </div>
                    </div>
                </div>


</body>

</html>
