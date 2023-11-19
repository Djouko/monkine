<!DOCTYPE html>
<html lang="en">
@include('head')

<body>


    @include('nav')
    <div id="featured-services">
        <!-- .navbar -->
        <h1> Détails de l'annonce </h1>

        <div class="card">

            <!-- Afficher le fichier de l'annonce si il existe -->
            @if ($annonce->fichier)
            <!-- Détecter le type de fichier en utilisant l'extension -->
            @php
            $extension = pathinfo($annonce->fichier, PATHINFO_EXTENSION);
            @endphp
            <!-- Utiliser un élément img si le fichier est une image -->
            @if ($extension == 'jpg' || $extension == 'png' || $extension == 'gif')
            <img src="{{ asset('imgannonce/' . $annonce->fichier) }}" class="" alt="{{ $annonce->titre }}" width="300" >
            <!-- Utiliser un élément video si le fichier est une vidéo -->
            @elseif ($extension == 'mp4' || $extension == 'avi' || $extension == 'mov')
            <video width="500" height="300" controls>
                <source src="{{ URL::asset('imgannonce/' . $annonce->fichier)  }}" type="video/mp4">
            </video>
            <!-- Utiliser un élément audio si le fichier est un son -->
            @elseif ($extension == 'mp3' || $extension == 'wav' || $extension == 'ogg')
            <audio src="{{ asset('imgannonce/' . $annonce->fichier) }}" class="card-img-top" controls></audio>
            @endif
            @endif
            <div class="card-body">
                <!-- Afficher le titre, la description, le prix et la date_annonce de l'annonce -->
                <h5 class="card-title">{{ $annonce->titre }}</h5>
                <p class="card-text">{!! nl2br(e($annonce->description)) !!}</p>
                <p class="card-text"><strong>Prix: </strong>{{ $annonce->prix }} FCFA</p>
                <p class="card-text"><small class="text-muted">Publié le {{
                        $annonce->date_annonce
                        }}</small></p>
                <!-- Afficher le user_id et le categorie_id de l'annonce -->
                <p class="card-text"><strong>Catégorie: </strong>{{ $annonce->Categorie->nom }}
                </p>

            </div>
        </div>
    </div>


    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">
            <div class="text-center">
                <h2> Autres annonces de la même catégorie </h2>
            </div>
            <div class="row">
                @foreach ($annonce->categorie->annonces as $autre_annonce)

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <a href="{{ route('annonces.show',$autre_annonce->id) }}">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon">

                                @if ($autre_annonce->fichier)
                                <!-- Détecter le type de fichier en utilisant l'extension -->
                                @php
                                $extension = pathinfo($autre_annonce->fichier, PATHINFO_EXTENSION);
                                @endphp
                                <!-- Utiliser un élément img si le fichier est une image -->
                                @if ($extension == 'jpg' || $extension == 'png' || $extension == 'gif')
                                <img src="{{ asset('imgannonce/' . $autre_annonce->fichier) }}"
                                    alt="{{ $autre_annonce->titre }}" width="100" >
                                <!-- Utiliser un élément video si le fichier est une vidéo -->
                                @elseif ($extension == 'mp4' || $extension == 'avi' || $extension == 'mov')
                                <video width="100" controls>
                                    <source src="{{ URL::asset('imgannonce/' . $autre_annonce->fichier)  }}"
                                        type="video/mp4" >
                                </video>
                                <!-- Utiliser un élément audio si le fichier est un son -->
                                @elseif ($extension == 'mp3' || $extension == 'wav' || $extension == 'ogg')
                                <audio src="{{ asset('imgannonce/' . $autre_annonce->fichier) }}" class="card-img-top"
                                    controls>
                                </audio>
                                @endif
                                @endif
                            </div>
                            <!-- Afficher le titre, la description, le prix et la date_annonce de l'annonce -->
                            <h5 class="card-title">{{ $autre_annonce->titre }}</h5>
                            <p class="card-text">{!! nl2br(e(Str::limit($autre_annonce->description, 10,' . .
                                .voir plius'))) !!}
                            </p>
                            <p class="card-text"><strong>Prix: </strong>{{ $autre_annonce->prix }} FCFA</p>
                            <p class="card-text"><small class="text-muted">Publié le {{
                                    $autre_annonce->date_annonce
                                    }}</small></p>
                            <!-- Afficher le user_id et le categorie_id de l'annonce -->
                            <p class="card-text"><strong>Catégorie: </strong>{{ $autre_annonce->Categorie->nom
                                }}</p>
                            <!-- Ajouter des boutons pour modifier et supprimer l'annonce -->

                        </div>
                    </a>
                </div>
                @endforeach

            </div>

        </div>

    </section>
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
