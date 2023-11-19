<!DOCTYPE html>
<html lang="en">
@include('head')

<body>


    @include('nav')
    <!-- .navbar -->
 <!-- ======= Featured Services Section ======= -->
 <section id="featured-services" class="featured-services">
    <div class="container" data-aos="fade-up">
        <div class="text-center">
            <h1>Liste des Categories</h1>
        </div>
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

        </div>

    </div>

</section><!-- End Featured Services Section -->
<div class="text-center">
    {!! $categories->links() !!}
</div>
</main><!-- End #main -->


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
