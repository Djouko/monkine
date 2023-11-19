
    <!-- ======= Top Bar ======= -->
    {{-- <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
            <div class="align-items-center d-none d-md-flex">
                <i class="bi bi-clock"></i> lun - Saturday, 8AM to 10PM
            </div>
            <div class="d-flex align-items-center">
                <i class="bi bi-phone"></i> Call us now +1 5589 55488 55
            </div>
        </div>
    </div>
    --}}
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <a href="/" class="logo me-auto"><img src="{{ asset('assets/img/favicon.png')}}" alt="logo">on KINE</a>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->
<nav id="navbar" class="navbar order-last order-lg-0">
    <ul>
        <li><a class="nav-link scrollto " href="/#hero">Accueil</a></li>
        <li><a class="nav-link scrollto" href="/#about">A propos</a></li>
        <li><a class="nav-link scrollto" href="/#services">Service</a></li>
        <li><a class="nav-link scrollto" href="/#departments">Spécialités</a></li>
        <li><a class="nav-link scrollto" href="/#doctors">Témoignages</a></li>
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        @if (Route::has('login'))
        @auth
        <li>
            <a href="{{ url('admin/dashboard') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
        </li>
        @else
        <li>
            <a href="{{ route('login') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
        </li>
        @endauth
</div>
@endif
</ul>

<i class="bi bi-list mobile-nav-toggle"></i>
</nav>
   <!-- .navbar -->

</div>
</header><!-- End Header -->
