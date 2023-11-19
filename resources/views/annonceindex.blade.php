<!DOCTYPE html>
<html lang="en">
@include('head')

<body>


    @include('nav')
    <!-- .navbar -->

    <main id="main">
        <hr />

        <div class="container" id="featured-services" >
            <div class="row">
                <div class="text-center">
                    <h1>Liste des annonces</h1>
                </div>
                <div class="row">

                    <!-- Afficher les annonces existantes sous forme de cartes -->
                    <div class="col-md-12 text-center">
                        <!-- Ajouter la classe text-center ici -->
                        <div class="card-columns">
                            <!-- Utiliser une boucle pour parcourir les annonces -->
                            @foreach ($annonces as $annonce)
                            <a href="{{ route('annonces.show',$annonce->id) }}">

                            <br>
                            <br>
                            <br>
                            <div class="card">

                                <!-- Afficher le fichier de l'annonce si il existe -->
                                @if ($annonce->fichier)
                                <!-- Détecter le type de fichier en utilisant l'extension -->
                                @php
                                $extension = pathinfo($annonce->fichier, PATHINFO_EXTENSION);
                                @endphp
                                <!-- Utiliser un élément img si le fichier est une image -->
                                @if ($extension == 'jpg' || $extension == 'png' || $extension == 'gif')
                                <div class="col-md-12 text-center">
                                <img src="{{ asset('imgannonce/' . $annonce->fichier) }}" class=""
                                    alt="{{ $annonce->titre }}" width="400" height="250">
                                </div>
                                <!-- Utiliser un élément video si le fichier est une vidéo -->
                                @elseif ($extension == 'mp4' || $extension == 'avi' || $extension == 'mov')
                                <div class="col-md-12 text-center">
                                <video width="500" height="300" controls>
                                    <source src="{{ URL::asset('imgannonce/' . $annonce->fichier)  }}" type="video/mp4">
                                </video>
                                </div>
                                <!-- Utiliser un élément audio si le fichier est un son -->
                                @elseif ($extension == 'mp3' || $extension == 'wav' || $extension == 'ogg')
                                <audio src="{{ asset('imgannonce/' . $annonce->fichier) }}" class="card-img-top"
                                    controls></audio>
                                @endif
                                @endif
                                <div class="card-body">
                                    <!-- Afficher le titre, la description, le prix et la date_annonce de l'annonce -->
                                    <h5 class="card-title">{{ $annonce->titre }}</h5>
                                    <p class="card-text">{!! nl2br(e(Str::limit($annonce->description, 50,'  . . .voir plius'))) !!}
                                    </p>                                    <p class="card-text"><strong>Prix: </strong>{{ $annonce->prix }} FCFA</p>
                                    <p class="card-text"><small class="text-muted">Publié le {{ $annonce->date_annonce
                                            }}</small></p>
                                    <!-- Afficher le user_id et le categorie_id de l'annonce -->
                                    <p class="card-text"><strong>Catégorie: </strong>{{ $annonce->Categorie->nom }}</p>
                                    <!-- Ajouter des boutons pour modifier et supprimer l'annonce -->

                                </div>
                            </div>
                            </a>
                            @endforeach
                            <div class="card-">
                                <ul class="justify-content-center">
                                    {{ $annonces->links() }}
                                 </ul>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
        </div>

    </main><!-- End #main -->
<br>
<br>
<br>

    @include('footer')


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
    <script src="{{  url('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{  url('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{  url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{  url('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{  url('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{  url('assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{  url('assets/js/main.js')}}"></script>

</body>

</html>
