<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Pricing - SoftLand</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700|Roboto:300,400,700&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

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

    <header class="site-navbar js-sticky-header site-navbar-target" role="banner" >

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-lg-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="mb-0">SoftLand</a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-lg-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li><a href="{{ route('features') }}" class="nav-link">Features</a></li>
                <li class="active"><a href="{{ route('pricing') }}" class="nav-link">Pricing</a></li>
                
                <li class="has-children">
                  <a href="{{ route('blog') }}" class="nav-link">Blog</a>
                  <ul class="dropdown">
                    <li><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>
                    <li><a href="{{ route('blog-single') }}" class="nav-link">Blog Sigle</a></li>
                  </ul>
                </li>
                <li><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">

            <a href="#" class="burger site-menu-toggle js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
              <span></span>
            </a>
          </div>

        </div>
      </div>
      
    </header>


    <main id="main">
      <div class="hero-section inner-page">
        <div class="wave">
          
          <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                      <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
                  </g>
              </g>
          </svg>

        </div>

        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row justify-content-center">
                <div class="col-md-7 text-center hero-text">
                  <h1 data-aos="fade-up" data-aos-delay="">Our Pricing</h1>
                  <p class="mb-5" data-aos="fade-up"  data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>  
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>

      

      <div class="site-section">
        <div class="container">
          
          <div class="row justify-content-center text-center">
            <div class="col-md-7 mb-5">
              <h2 class="section-heading">Choose A Plan</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere illum obcaecati inventore velit laborum earum.</p>
            </div>
          </div>
          <div class="row align-items-stretch">

            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="pricing h-100 text-center">
                <span>&nbsp;</span>
                <h3>Basic</h3>
                <ul class="list-unstyled">
                  <li>Create up to 5 forms</li>
                  <li>Generate 100 monthly reports</li>
                </ul>
                <div class="price-cta">
                  <strong class="price">Free</strong>
                  <p><a href="#" class="btn btn-white">Choose Plan</a></p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="pricing h-100 text-center popular">
                <span class="popularity">Most Popular</span>
                <h3>Professional</h3>
                <ul class="list-unstyled">
                  <li>Create up to 20 forms</li>
                  <li>Generate 2500 monthly reports</li>
                  <li>Manage a team of up to 5 people</li>
                </ul>
                <div class="price-cta">
                  <strong class="price">$9.95/month</strong>
                  <p><a href="#" class="btn btn-white">Choose Plan</a></p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="pricing h-100 text-center">
                <span class="popularity">Best Value</span>
                <h3>Ultimate</h3>
                <ul class="list-unstyled">
                  <li>Create up to 20 forms</li>
                  <li>Generate 2500 monthly reports</li>
                  <li>Manage a team of up to 5 people</li>
                </ul>
                <div class="price-cta">
                  <strong class="price">$199.95/month</strong>
                  <p><a href="#" class="btn btn-white">Choose Plan</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="site-section border-top border-bottom">
        <div class="container">
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi, provident voluptates consectetur maiores quos.</p>
                  </blockquote>

                  

                  <p class="review-user">
                    <img src="img/person_1.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi, provident voluptates consectetur maiores quos.</p>
                  </blockquote>

                  

                  <p class="review-user">
                    <img src="img/person_2.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi, provident voluptates consectetur maiores quos.</p>
                  </blockquote>

                  

                  <p class="review-user">
                    <img src="img/person_3.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                    <span class="d-block">
                      <span class="text-black">Jean Thunberg</span>, &mdash; App User
                    </span>
                  </p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      

      <div class="site-section cta-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 mr-auto text-center text-md-left mb-5 mb-md-0">
              <h2>Starts Publishing Your Apps</h2>
            </div>
            <div class="col-md-5 text-center text-md-right">
              <p><a href="#" class="btn"><span class="icofont-brand-apple mr-3"></span>App store</a> <a href="#" class="btn"><span class="icofont-ui-play mr-3"></span>Google play</a></p>
            </div>
          </div>
        </div>
      </div>


    </main>
    <footer class="footer" role="contentinfo">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-4 mb-md-0">
            <h3>About SoftLand</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi.</p>
            <p class="social">
              <a href="#"><span class="icofont-twitter"></span></a>
              <a href="#"><span class="icofont-facebook"></span></a>
              <a href="#"><span class="icofont-dribbble"></span></a>
              <a href="#"><span class="icofont-behance"></span></a>
            </p>
          </div>
          <div class="col-md-7 ml-auto">
            <div class="row site-section pt-0">
              <div class="col-md-4 mb-4 mb-md-0">
                <h3>Navigation</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Pricing</a></li>
                  <li><a href="#">Features</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>
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
                  <li><a href="#">Get from the App Store</a></li>
                  <li><a href="#">Get from the Play Store</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center text-center">
          <div class="col-md-7">
            <p class="copyright">&copy; Copyright SoftLand. All Rights Reserved</p>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=SoftLand
              -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>. Downloaded from <a href="https://themeslab.org/" target="_blank">Themeslab</a>
            </div>
          </div>
        </div>

      </div>
    </footer>
  </div> <!-- .site-wrap -->
  
  <!-- Vendor JS Files -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/jquery/jquery-migrate.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/easing/easing.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/sticky/sticky.js"></script>
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

  </body>
</html>