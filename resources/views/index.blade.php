<!DOCTYPE html>
<html lang="en">
@include('head')

<body>


    @include('nav')
    <!-- .navbar -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
                    <div class="container">

                        <h2>Bienvenue sur le site de KinéSanté <span>Mon KINE</span></h2>
                        <p> votre cabinet de kinésithérapie et d’ostéopathie. Nous vous proposons des soins
                            personnalisés et adaptés à vos besoins.</p>
                        <a href="#about" class="btn-get-started scrollto">Read More</a>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
                    <div class="container">
                        <h2>Vous cherchez un kinésithérapeute compétent et à l’écoute ?</h2>
                        <p>Vous êtes au bon endroit ! Découvrez sur notre site nos services, nos spécialités et notre
                            équipe.</p>
                        <a href="#about" class="btn-get-started scrollto">Read More</a>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
                    <div class="container">
                        <h2>Merci de visiter le site </h2>
                        <p>Nous vous invitons à découvrir nos domaines d’intervention, nos tarifs et nos horaires.
                            N’hésitez pas à nous contacter pour prendre rendez-vous.</p>
                        <a href="#about" class="btn-get-started scrollto">Read More</a>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    @foreach ($categories as $category)

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <a href="{{ route('categorie.annonce',$category->id) }}">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon">

                                    @if ($category->image)
                                    <img src="{{ asset('imgCat/' . $category->image) }}" alt="{{ $category->name }}"
                                        width="100" height="80">
                                    @else
                                    Aucune image
                                    @endif
                                </div>
                                <i class="fas fa-heartbeat"></i>
                                <h4 class="title">{{ $category->nom }}</h4>
                                <p class="description">{{ $category->description }}</p>
                            </div>
                        </a>
                    </div>

                    @endforeach
                    <a href="{{ route('categories.index2') }}" class="btn btn-primary">Voir les catégories</a>

                </div>

            </div>
        </section><!-- End Featured Services Section -->


        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">
                <div class="text-center">
                    <h3>Besoin d'un rendez-vous avec un kinésithérapeute ?</h3>
                    <p> Que vous souffriez de douleurs musculaires, articulaires, neurologiques ou respiratoires, nous
                        sommes là pour vous aider. Nous vous proposons des séances de rééducation personnalisées,
                        adaptées à vos besoins et à vos objectifs. Nous utilisons des techniques manuelles,
                        instrumentales ou électrothérapiques pour soulager vos symptômes et améliorer votre qualité de
                        vie.</p>
                </div>

            </div>

        </section><!-- End Cta Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Qui sommes-nous ?</h2>
                    <p>Nous sommes une équipe de kinésithérapeutes diplômés et expérimentés, passionnés par notre métier
                        et à l'écoute de nos patients. Nous vous accueillons dans notre cabinet situé à Doula, équipé
                        de matériel moderne et confortable. Nous vous offrons un service de qualité, dans le respect des
                        règles déontologiques et sanitaires.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>Nos domaines d'intervention</h3>
                        <p class="fst-italic">
                            Nous prenons en charge les patients de tout âge et de toute pathologie, en fonction de nos
                            compétences et de nos formations complémentaires.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Kinésithérapie du sport : prévention, traitement et
                                réathlétisation des blessures sportives.</li>
                            <li><i class="bi bi-check-circle"></i> Kinésithérapie respiratoire : désencombrement
                                bronchique, rééducation ventilatoire, oxygénothérapie.</li>
                            <li><i class="bi bi-check-circle"></i> Kinésithérapie neurologique : prise en charge des
                                troubles moteurs et sensitifs liés à une atteinte du système nerveux central ou
                                périphérique.</li>
                            <li><i class="bi bi-check-circle"></i> Kinésithérapie orthopédique et traumatologique :
                                rééducation post-opératoire, traitement des fractures, entorses, tendinites, etc.</li>
                            <li><i class="bi bi-check-circle"></i> Kinésithérapie gériatrique : maintien de l'autonomie,
                                prévention des chutes, stimulation cognitive, etc.</li>
                            <li><i class="bi bi-check-circle"></i> Kinésithérapie pédiatrique : accompagnement du
                                développement psychomoteur, prise en charge des troubles du tonus, de la posture, de la
                                marche, etc.</li>
                        </ul>
                        <p>
                            Pour plus d'informations sur nos prestations, n'hésitez pas à nous contacter ou à consulter
                            notre blog.
                        </p>
                    </div>
                </div>

            </div>

        </section><!-- End About Us Section -->
        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row no-gutters">
                    @foreach ($categories as $category)
                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">


                        <div class="count-box">
                            <a href="{{ route('categorie.annonce',$category->id) }}">
                                <div class="count">

                                    @if ($category->image)
                                    <img src="{{ asset('imgCat/' . $category->image) }}" alt="{{ $category->name }}"
                                        width="100" height="80">
                                    @else
                                    Aucune image
                                    @endif
                                </div>
                                <div>

                                    <p><strong>{{ $category->nom }}</strong> {{ $category->description }}</p>
                                    <br>
                                    <br>
                                    <i class="fas fa-user-md"></i>
                                    <span data-purecounter-start="0"
                                        data-purecounter-end="{{ $category->annonces->count() }}"
                                        data-purecounter-duration="1" class="purecounter"></span>

                                    <p> Find out more &raquo;</p>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
                <a href="{{ route('categories.index2') }}" class="btn btn-primary">Voir les catégories</a>


            </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Features Section ======= -->
        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
                        <div class="icon-box mt-5 mt-lg-0">
                            <i class="bx bx-receipt"></i>
                            <h4>Notre matériel</h4>
                            <p>Nous disposons d'un matériel de pointe pour réaliser vos séances de kinésithérapie dans
                                les meilleures conditions. Nous utilisons des appareils de dernière génération, comme
                                des tables électriques, des ultrasons, des électrostimulateurs, des vélos, des tapis de
                                course, etc.</p>
                        </div>
                        <div class="icon-box mt-5">
                            <i class="bx bx-cube-alt"></i>
                            <h4>Notre équipe</h4>
                            <p>Nous sommes une équipe de kinésithérapeutes diplômés et expérimentés, passionnés par
                                notre métier et à l'écoute de nos patients. Nous vous accueillons dans une ambiance
                                chaleureuse et conviviale, et nous vous proposons un suivi personnalisé et adapté à vos
                                besoins.</p>
                        </div>
                        <div class="icon-box mt-5">
                            <i class="bx bx-images"></i>
                            <h4>Notre méthode</h4>
                            <p>Nous pratiquons une kinésithérapie basée sur l'évidence scientifique, en nous appuyant
                                sur les recommandations des sociétés savantes et les dernières études publiées. Nous
                                utilisons des techniques manuelles, instrumentales ou électrothérapiques, en fonction de
                                votre diagnostic et de vos objectifs.</p>
                        </div>
                        <div class="icon-box mt-5">
                            <i class="bx bx-shield"></i>
                            <h4>Notre engagement</h4>
                            <p>Nous nous engageons à vous offrir un service de qualité, dans le respect des règles
                                déontologiques et sanitaires. Nous respectons les tarifs conventionnés par la sécurité
                                sociale, et nous acceptons les paiements par carte bancaire, chèque ou espèces. Nous
                                vous délivrons une facture à chaque séance.</p>
                        </div>
                    </div>
                    <div class="image col-lg-6 order-1 order-lg-2"
                        style='background-image: url("assets/img/features.jpg");' data-aos="zoom-in"></div>
                </div>

            </div>

        </section><!-- End Features Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>Nous vous proposons une gamme complète de services de kinésithérapie, pour répondre à tous vos
                        besoins et à toutes vos pathologies. Que vous souffriez de douleurs musculaires, articulaires,
                        neurologiques ou respiratoires, nous sommes là pour vous aider. Voici quelques exemples de
                        services que nous offrons :</p>
                </div>

                <!-- Ici, vous pouvez ajouter des icônes et des descriptions pour chaque service que vous proposez -->

            </div>

        </section><!-- End Services Section -->
        <div class="container">

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


                                <!-- Afficher le fichier de l'annonce si il existe -->
                                @if ($annonce->fichier)
                                <!-- Détecter le type de fichier en utilisant l'extension -->
                                @php
                                $extension = pathinfo($annonce->fichier, PATHINFO_EXTENSION);
                                @endphp
                                <!-- Utiliser un élément img si le fichier est une image -->
                                @if ($extension == 'jpg' || $extension == 'png' || $extension == 'gif')
                                <img src="{{ asset('imgannonce/' . $annonce->fichier) }}" class=""
                                    alt="{{ $annonce->titre }}" width="450">
                                <!-- Utiliser un élément video si le fichier est une vidéo -->
                                @elseif ($extension == 'mp4' || $extension == 'avi' || $extension == 'mov')
                                <video width="500" height="300" controls>
                                    <source src="{{ URL::asset('imgannonce/' . $annonce->fichier)  }}" type="video/mp4">
                                </video>
                                <!-- Utiliser un élément audio si le fichier est un son -->
                                @elseif ($extension == 'mp3' || $extension == 'wav' || $extension == 'ogg')
                                <audio src="{{ asset('imgannonce/' . $annonce->fichier) }}" class="card-img-top"
                                    controls></audio>
                                @endif
                                @endif
                                <div class="card-body">
                                    <!-- Afficher le titre, la description, le prix et la date_annonce de l'annonce -->
                                    <h5 class="card-title">{{ $annonce->titre }}</h5>
                                    <p class="card-text">
                                        {!! nl2br(e(Str::limit($annonce->description, 50,' . . .voir plius'))) !!}
                                    </p>
                                    <p class="card-text"><strong>Prix: </strong>{{ $annonce->prix }} FCFA</p>
                                    <p class="card-text"><small class="text-muted">Publié le {{
                                            $annonce->date_annonce
                                            }}</small></p>
                                    <!-- Afficher le user_id et le categorie_id de l'annonce -->
                                    <p class="card-text"><strong>Catégorie: </strong>{{ $annonce->Categorie->nom }}
                                    </p>

                                </div>
                            </a>
                            @endforeach
                            <br>
                            <br>
                            <p><a href="{{ route('annonces.index2') }}" class="btn btn-primary">Voir les
                                    annonces</a>

                    </div>

                    </p>
                </div>
            </div>
        </div>
        </div>

        </section><!-- End Services Section -->


        <!-- ======= Departments Section ======= -->
        <section id="departments" class="departments">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Nos domaines d'intervention</h2>
                    <p>Nous vous proposons une gamme complète de services de kinésithérapie, pour répondre à tous vos
                        besoins et à toutes vos pathologies. Que vous souffriez de douleurs musculaires, articulaires,
                        neurologiques ou respiratoires, nous sommes là pour vous aider. Voici quelques exemples de
                        domaines dans lesquels nous intervenons :</p>
                </div>
                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                                    <h4>Kinésithérapie respiratoire</h4>
                                    <p>Nous prenons en charge les troubles respiratoires, qu'ils soient d'origine
                                        infectieuse, allergique, obstructive ou restrictive. Nous utilisons des
                                        techniques de désencombrement bronchique, de rééducation ventilatoire,
                                        d'oxygénothérapie, etc.</p>

                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                                    <h4>Kinésithérapie neurologique</h4>
                                    <p>Nous prenons en charge les troubles moteurs et sensitifs liés à une atteinte du
                                        système nerveux central ou périphérique. Nous utilisons des techniques de
                                        stimulation, de mobilisation, de proprioception, d'équilibre, etc.</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                                    <h4>Kinésithérapie du sport</h4>
                                    <p>Nous prenons en charge les blessures sportives, qu'elles soient aiguës ou
                                        chroniques, et nous vous accompagnons dans votre réathlétisation. Nous utilisons
                                        des techniques adaptées à votre sport et à votre niveau, comme le renforcement
                                        musculaire, les étirements, les massages, etc.</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                                    <h4>Kinésithérapie orthopédique et traumatologique</h4>
                                    <p>Nous prenons en charge les affections du système musculo-squelettique, qu'elles
                                        soient d'origine traumatique, dégénérative ou inflammatoire. Nous utilisons des
                                        techniques de mobilisation articulaire, de renforcement musculaire, d'ultrasons,
                                        d'électrothérapie, etc.</p>
                                </a>
                        </ul>
                    </div>
                    <div class="col-lg-8">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <h3>Kinésithérapie du sport</h3>
                                <p class="fst-italic">La kinésithérapie du sport est une spécialité qui vise à prévenir,
                                    traiter et réadapter les blessures liées à la pratique sportive.</p>
                                <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">

                            </div>
                            <div class="tab-pane" id="tab-2">
                                <h3>Kinésithérapie du sport</h3>
                                <p class="fst-italic">La kinésithérapie du sport est une spécialité qui vise à prévenir,
                                    traiter et réadapter les blessures liées à la pratique sportive.</p>
                                <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">

                            </div>
                            <div class="tab-pane" id="tab-3">
                                <h3>Kinésithérapie neurologique</h3>
                                <p class="fst-italic">La kinésithérapie neurologique est une spécialité qui vise à
                                    rééduquer les patients présentant des troubles du mouvement ou de la sensibilité
                                    liés à une atteinte du système nerveux.</p>
                                <img src="assets/img/departments-3.jpg" alt="" class="img-fluid">

                            </div>
                            <div class="tab-pane" id="tab-4">
                                <h3>Kinésithérapie orthopédique et traumatologique</h3>
                                <p class="fst-italic">La kinésithérapie orthopédique et traumatologique est une
                                    spécialité qui vise à rétablir la mobilité et la fonction des articulations, des
                                    muscles, des tendons et des ligaments après une blessure ou une intervention
                                    chirurgicale.</p>
                                <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Departments Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Témoignages</h2>
                    <p>Nous sommes fiers de la satisfaction de nos patients, qui témoignent de la qualité de nos
                        services et de nos résultats. Voici quelques exemples de témoignages que nous avons reçus :</p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    J'ai consulté ce cabinet de kinésithérapie suite à une entorse de la cheville. J'ai
                                    été très bien pris en charge, avec des séances adaptées à mon état et à mes progrès.
                                    Les kinés sont très professionnels, attentifs et sympathiques. Grâce à eux, j'ai pu
                                    reprendre le sport sans douleur ni appréhension.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Je souffrais de bronchite chronique depuis plusieurs années, et je n'arrivais pas à
                                    me débarrasser de mes quintes de toux. J'ai décidé de tenter la kinésithérapie
                                    respiratoire sur les conseils de mon médecin. Je ne regrette pas du tout mon choix !
                                    Les séances m'ont permis de libérer mes bronches, d'améliorer ma respiration et de
                                    diminuer ma consommation de médicaments.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Après un accident vasculaire cérébral, j'ai perdu l'usage de mon bras droit. J'étais
                                    très déprimé et je pensais ne jamais retrouver ma mobilité. Heureusement, j'ai
                                    rencontré les kinésithérapeutes de ce cabinet, qui m'ont redonné espoir et
                                    confiance. Grâce à leur travail acharné et à leur soutien, j'ai pu récupérer une
                                    partie de mes capacités et reprendre une vie normale.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Je suis une grande fan de yoga, mais j'ai eu la mauvaise idée de forcer sur une
                                    posture qui m'a causé une hernie discale. J'ai eu très mal au dos pendant des
                                    semaines, et je ne pouvais plus faire aucun mouvement sans souffrir. J'ai alors
                                    contacté ce cabinet de kinésithérapie, qui m'a proposé un programme de rééducation
                                    adapté à ma situation. Les kinés ont été très doux, patients et efficaces. Ils m'ont
                                    aidé à soulager ma douleur, à renforcer mes muscles et à reprendre le yoga en toute
                                    sécurité.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                            </div>
                        </div><!-- End testimonial item -->



                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->


        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="section-title">
                <h2>Galerie</h2>
                <p>Découvrez quelques photos de notre cabinet de kinésithérapie, de notre matériel, de notre équipe et
                    de nos patients. Vous pourrez ainsi vous faire une idée de l'ambiance et du professionnalisme qui
                    règnent chez nous.</p>
            </div>

            <div class="gallery-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-1.jpg"><img
                                src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-2.jpg"><img
                                src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-3.jpg"><img
                                src="assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-4.jpg"><img
                                src="assets/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-5.jpg"><img
                                src="assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-6.jpg"><img
                                src="assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-7.jpg"><img
                                src="assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-8.jpg"><img
                                src="assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

            </div>
        </section><!-- End Gallery Section -->



        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Vous souhaitez prendre rendez-vous, nous poser une question ou nous faire part de votre
                        témoignage ? N’hésitez pas à nous contacter par téléphone, par e-mail ou via le formulaire
                        ci-dessous. Nous vous répondrons dans les meilleurs délais. Nous sommes à votre écoute et à
                        votre service.</p>
                </div>

            </div>

            <div>
                <iframe style="border:0; width: 100%; height: 350px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127911.1117321225!2d9.663558999999999!3d4.0510564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xf6a8a7c9b6c9c7d%3A0x8a8e6b5c7e9a9a8e!2sDouala%2C%20Cameroon!5e0!3m2!1sen!2sbg!4v1634726190165!5m2!1sen!2sbg"
                    frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="container">

                <div class="row mt-5">

                    <div class="">

                        <div class="row">
                            <div class="">
                                <div class="info-box">
                                    <i class="bx bx-map"></i>
                                    <h3>Notre Addresse</h3>
                                    <p> Bepanda, Douala</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-envelope"></i>
                                    <h3>Email </h3>
                                    <p>Landrymuntessu@gmail.com<br></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-phone-call"></i>
                                    <h3>appellez nous</h3>
                                    <p>+237 676668407<br>+237 695497793 <br> +237 696499207</p>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->



    @include('footer')

    <div id="preloader"></div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
