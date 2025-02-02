<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>UMKM Masa Kini</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700|Roboto:300,400,700&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/line-awesome/css/line-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Web GIS leaflet js CSS Files -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin="" />

    <style>
        #map {
            height: 300px;
            border-radius: 1%
        }
    </style>

    <!-- =======================================================
    Template Name: SoftLand
    Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com/
  ======================================================= -->
</head>

<body>

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icofont-close js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center">

                    <div class="col-6 col-lg-2">
                        <h1 class="mb-0 site-logo"><a href="{{ route('login') }}" class="mb-0">UMI</a></h1>
                    </div>

                    <div class="col-12 col-md-10 d-none d-lg-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">

                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li class="active"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                                {{-- <li><a href="{{ route('features') }}" class="nav-link">Features</a></li>
                                <li><a href="{{ route('pricing') }}" class="nav-link">Pricing</a></li>

                                <li class="has-children">
                                    <a href="{{ route('blog') }}" class="nav-link">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>
                                        <li><a href="{{ route('blog-single') }}" class="nav-link">Blog Sigle</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('contact') }}" class="nav-link">Contact</a></li> --}}
                            </ul>
                        </nav>
                    </div>


                    <div class="col-6 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">

                        <a href="#" class="burger site-menu-toggle js-menu-toggle" data-toggle="collapse"
                            data-target="#main-navbar">
                            <span></span>
                        </a>
                    </div>

                </div>
            </div>

        </header>


        <main id="main">
            <div class="hero-section">
                <div class="wave">

                    <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                                <path
                                    d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z"
                                    id="Path"></path>
                            </g>
                        </g>
                    </svg>

                </div>

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 hero-text-image">
                            <div class="row">
                                <div class="col-lg-7 text-center text-lg-left">
                                    <h1 data-aos="fade-right">Gunakan aplikasi UMKM Masa Kini</h1>
                                    <p class="mb-5" data-aos="fade-right" data-aos-delay="100">Untuk memajukan UMKM di Indonesia</p>
                                    <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a
                                            href="https://play.google.com/store/apps/details?id=com.umi.mobile" class="btn btn-outline-white">Download</a></p>
                                </div>
                                <div class="col-lg-5 iphone-wrap">
                                    <img src="img/phone1.png" alt="Image" class="phone-1" data-aos="fade-right">
                                    <img src="img/phone2.png" alt="Image" class="phone-2" data-aos="fade-right"
                                        data-aos-delay="200">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="site-section">
                <div class="container">

                    <div class="row justify-content-center text-center mb-5">
                        <div class="col-md-5" data-aos="fade-up">
                            <h2 class="section-heading">Keunggulan Aplikasi UMI</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
                            <div class="feature-1 text-center">
                                <div class="wrap-icon icon-1">
                                    <span class="icon la la-map-marker"></span>
                                </div>
                                <h3 class="mb-3">Informasi Jarak Terdekat</h3>
                                <p>Menyediakan informasi jarak terdekat dari lokasi UMKM. Pengguna dapat mencari penjual produk terdekat, sehingga pengguna bisa mendapatkan produk yang dicari dengan lebih cepat dan lebih efisien.</p>
                            </div>
                        </div>
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="feature-1 text-center">
                                <div class="wrap-icon icon-1">
                                    <span class="icon la la-shopping-cart"></span>
                                </div>
                                <h3 class="mb-3">Produk Barang dan Jasa</h3>
                                <p>Menyediakan penjualan produk berupa barang dan jasa dari beberapa kategori. Kategori-kategori tersebut diantaranya : Kuliner, agrobisnis, fashion, otomatif, teknologi, rumah tangga, dan lain sebagainya.</p>
                            </div>
                        </div>
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="feature-1 text-center">
                                <div class="wrap-icon icon-1">
                                    <span class="icon la la-money"></span>
                                </div>
                                <h3 class="mb-3">Pembayaran dan Pengiriman Fleksibel</h3>
                                <p>Pembayaran dan pengiriman produk dapat dilakukan lebih fleksibel. Pembayaran dapat dilakukan dengan menggunakan metode COD, transfer bank, e-wallet, dan pembayaran melalui minimarket terdekat. Sementara pengiriman dapat menggunakan kurir pribadi yang disediakan oleh pemilik lapak, ataupun dengan menggunakan mitra kulir yang telah bekerjasama dengan pemilik lapak. Dan setiap proses pengiriman dapat dimonitor langsung pada aplikasi UMI.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div> <!-- .site-section -->

            <div class="site-section">
                <div class="container">
                    <div class="row justify-content-center text-center mb-5" data-aos="fade">
                        <div class="col-md-6 mb-5">
                            <img src="img/undraw_svg_1.svg" alt="Image" class="img-fluid">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="step">
                                <span class="number">01</span>
                                <h3>Download</h3>
                                <p>Langkah pertama, download aplikasi UMI dari tombol download di awal halaman web</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="step">
                                <span class="number">02</span>
                                <h3>Buat Akun</h3>
                                <p>Langkah kedua, buat akun dan ikuti langkah-langkah pendaftarannya</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="step">
                                <span class="number">03</span>
                                <h3>Nikmati aplikasinya</h3>
                                <p>Nikmati fitur yang disediakan UMI seperti UMKM terdekat, Pelayanan jasa, Lelang produk, Live Chat, Augmented Reality product style, dan masih banyak lagi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- .site-section -->

            <div class="site-section pb-0">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4 mr-auto">
                            <h2 class="mb-4">Dapat Berjualan Dimanapun</h2>
                            <p class="mb-4">Kami menyediakan aplikasi yang dapat digunakan oleh siapa saja, 
                                kapan saja dan dimana saja. Dengan aplikasi UMI, 
                                kita dapat berjualan berupa produk maupun jasa,
                                dimanapun kita berada, dengan sasaran pelanggan terpusat di desa yang kita tinggali 
                                sehingga pesanan akan cepat sampai.
                            </p>
                            <p><a href="https://play.google.com/store/apps/details?id=com.umi.mobile">Download Sekarang</a></p>
                        </div>
                        <div class="col-md-6" data-aos="fade-left">
                            <img src="img/undraw_svg_2.svg" alt="Image" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div> <!-- .site-section -->

            <div class="site-section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4 ml-auto order-2">
                            <h2 class="mb-4">Dapat Belanja Dimanapun</h2>
                            <p class="mb-4">Dengan aplikasi UMI, kita dapat belanja untuk kebutuhan pokok yang mudah basi seperti.
                                Makanan, Minuman, Sayur, maupun buah-buahan dengan kondisi yang masih segar. 
                                karena aplikasi dapat melacak UMKM terdekat, 
                                sehingga pesanan akan cepat sampai.
                            </p>
                            <p><a href="https://play.google.com/store/apps/details?id=com.umi.mobile">Download Now</a></p>
                        </div>
                        <div class="col-md-6" data-aos="fade-right">
                            <img src="img/undraw_svg_3.svg" alt="Image" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div> <!-- .site-section -->

            <div class="site-section pb-0">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-10 mr-auto">
                            {{-- <div class="row justify-content-center text-center mb-5"> --}}
                            <h2 class="row justify-content-center text-center mb-4">Sebaran titik-titik UMKM</h2>
                            <p class="row justify-content-center mb-4">Berikut dibawah ini adalah peta persebaran UMKM-UMKM yang sudah terdaftar pada aplikasi UMI</p>
                            <p>
                                {{-- <a href="#">Download Now</a></p> --}}
                        </div>
                        <div class="col-md-10" data-aos="fade-left">
                            {{-- <img src="img/undraw_svg_2.svg" alt="Image" class="img-fluid"> --}}
                            <div id="map" style="height: 325px; overflow: hidden"
                                class="leaflet">
                                <div class="map"><svg height="318.92516996871734" version="1.1"
                                        width="515.766" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        style="overflow: hidden; position: relative; left: -0.5px; top: -0.734375px;"
                                        viewBox="0 0 959 593" preserveAspectRatio="xMinYMin">
                                        <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                            Created
                                            with Raphaël 2.3.0 and Mapael undefined
                                            (https://www.vincentbroute.fr/mapael/)</desc>
                                        <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                        </defs>

                                    </svg>
                                    <div class="mapTooltip" style="display: none;"></div>
                                    <div class="zoomButton zoomReset" title="Reset zoom">•</div>
                                    <div class="zoomButton zoomIn" title="Zoom in">+</div>
                                    <div class="zoomButton zoomOut" title="Zoom out">-</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- .site-section -->

            <div class="site-section border-top border-bottom">
                {{-- <div class="container">
                    <div class="row justify-content-center text-center mb-5">
                        <div class="col-md-4">
                            <h2 class="section-heading">Review From Our Users</h2>
                        </div>
                    </div>
                    <div class="row justify-content-center text-center">
                        <div class="col-md-7">
                            <div class="owl-carousel testimonial-carousel">
                                <div class="review text-center">
                                    <p class="stars">
                                        <span class="icofont-star"></span>
                                        <span class="icofont-star"></span>
                                        <span class="icofont-star"></span>
                                        <span class="icofont-star"></span>
                                        <span class="icofont-star muted"></span>
                                    </p>
                                    <h3>Excellent App!</h3>
                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus
                                            pariatur, numquam
                                            aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae
                                            deleniti minus animi,
                                            provident voluptates consectetur maiores quos.</p>
                                    </blockquote>



                                    <p class="review-user">
                                        <img src="img/person_1.jpg" alt="Image"
                                            class="img-fluid rounded-circle mb-3">
                                        <span class="d-block">
                                            <span class="text-black">Jean Doe</span>, &mdash; App User
                                        </span>
                                    </p>

                                </div>

                                <div class="review text-center">
                                    <p class="stars">
                                        <span class="icofont-star"></span>
                                        <span class="icofont-star"></span>
                                        <span class="icofont-star"></span>
                                        <span class="icofont-star"></span>
                                        <span class="icofont-star muted"></span>
                                    </p>
                                    <h3>This App is easy to use!</h3>
                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus
                                            pariatur, numquam
                                            aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae
                                            deleniti minus animi,
                                            provident voluptates consectetur maiores quos.</p>
                                    </blockquote>



                                    <p class="review-user">
                                        <img src="img/person_2.jpg" alt="Image"
                                            class="img-fluid rounded-circle mb-3">
                                        <span class="d-block">
                                            <span class="text-black">Johan Smith</span>, &mdash; App User
                                        </span>
                                    </p>

                                </div>


                                <div class="review text-center">
                                    <p class="stars">
                                        <span class="icofont-star"></span>
                                        <span class="icofont-star"></span>
                                        <span class="icofont-star"></span>
                                        <span class="icofont-star"></span>
                                        <span class="icofont-star muted"></span>
                                    </p>
                                    <h3>Awesome functionality!</h3>
                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus
                                            pariatur, numquam
                                            aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae
                                            deleniti minus animi,
                                            provident voluptates consectetur maiores quos.</p>
                                    </blockquote>



                                    <p class="review-user">
                                        <img src="img/person_3.jpg" alt="Image"
                                            class="img-fluid rounded-circle mb-3">
                                        <span class="d-block">
                                            <span class="text-black">Jean Thunberg</span>, &mdash; App User
                                        </span>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>



            <div class="site-section cta-section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 mr-auto text-center text-md-left mb-5 mb-md-0">
                            <h2>Tunggu Apalagi? Ayo Download Sekarang Juga!</h2>
                        </div>
                        <div class="col-md-5 text-center text-md-right">
                            <p>
                                {{-- <a href="#" class="btn"><span class="icofont-brand-apple mr-3"></span>App store</a>  --}}
                                <a href="https://play.google.com/store/apps/details?id=com.umi.mobile" class="btn"><span
                                        class="icofont-ui-play mr-3"></span>Google play</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>


        </main>
        <footer class="footer" role="contentinfo">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <h3>Tentang UMI</h3>
                        <p>Umi Merupakan aplikasi marketplace berbasis mobile yang dapat membantu umkm dalam mengembangkan usahanya dengan masyarakat dan menentukan umkm yang dicarinya.</p>
                        <p class="social">
                            <a href="#"><span class="icofont-twitter"></span></a>
                            <a href="#"><span class="icofont-facebook"></span></a>
                            <a href="#"><span class="icofont-dribbble"></span></a>
                            <a href="#"><span class="icofont-behance"></span></a>
                        </p>
                    </div>
                    <div class="col-md-7 ml-auto">
                        <div class="row site-section pt-0">
                            {{-- <div class="col-md-4 mb-4 mb-md-0">
                                <h3>Navigasi</h3>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('pricing') }}">Pricing</a></li>
                                    <li><a href="{{ route('features') }}">Features</a></li>
                                    <li><a href="{{ route('blog') }}">Blog</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </div> --}}
                            <div class="col-md-4 mb-4 mb-md-0">
                                <h3>Services</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#">Team</a></li>
                                    <li><a href="#">Collaboration</a></li>
                                    <li><a href="#">Todos</a></li>
                                    <li><a href="#">Events</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4 mb-4 mb-md-0">
                                <h3>Downloads</h3>
                                <ul class="list-unstyled">
                                    {{-- <li><a href="#">Get from the App Store</a></li> --}}
                                    <li><a href="https://play.google.com/store/apps/details?id=com.umi.mobile">Get from the Play Store</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <?php /*
                <div class="row justify-content-center text-center">
                    <div class="col-md-7">
                        {{-- <p class="copyright">&copy; Copyright SoftLand. All Rights Reserved</p> --}}
                        <div class="credits">
                            <!--
                                    All the links in the footer should remain intact.
                                    You can delete the links only if you purchased the pro version.
                                    Licensing information: https://bootstrapmade.com/license/
                                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=SoftLand
                                -->
                            {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>. Downloaded from <a
                                href="https://themeslab.org/" target="_blank">Themeslab</a> --}}
                        </div>
                    </div>
                </div>
                */ ?>

            </div>
        </footer>
    </div> <!-- .site-wrap -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/easing/easing.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('vendor/sticky/sticky.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="js/main.js"></script>

    <!-- Web GIS leaflet js JS File -->
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>

    <script>
        var map = L.map('map', {
            scrollWheelZoom: false
        }).setView([-6.406576, 108.282833], 13);

        var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            // attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);


        // var location from database in laravel array
        var locations = @json($alamatToko);

        for (var i = 0; i < locations.length; i++) {
            marker = new L.marker([locations[i][1], locations[i][2]])
                .bindPopup(locations[i][0])
                .addTo(map);
        }
    </script>
</body>

</html>
