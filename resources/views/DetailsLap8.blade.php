@extends('main')
@section('con')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Vesperr Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Vesperr
  * Updated: Mar 13 2024 with Bootstrap v5.3.3
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <main id="main">

  <br></br>
  <br> </br>
       
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="img/portfolio/lap8_1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="img/portfolio/lap8_2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="img/portfolio/lap8_3.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Product information</h3>
              <ul>
                <li><strong>Brand </strong>: Apple</li>
                <li><strong>Model name</strong>: MacBook Air</li>
                <li><strong>Price</strong>: $1,099.00</li>
                <li><strong>CPU</strong>: Unknown</li>
                <li><strong>Memory </strong>: 8 GB</li>
                <li><strong>Screen </strong>: 13.6 Inches</li>
                <li><strong>GPU </strong>: Integrated </li>
                <li><strong>Storage </strong>: 256 GB </li>
                <li><strong>OS </strong>: Mac OS</li>
              </ul>
            </div>
            
          </div>

        </div>
        <div class="portfolio-description">
              <h2>About Product</h2>
              <p>
              LEAN. MEAN. M3 MACHINE — The blazing-fast MacBook Air with the M3 chip is a superportable laptop that sails through work and play.
PORTABLE DESIGN — Lightweight and under half an inch thin, so you can take MacBook Air anywhere you go.
GET MORE DONE FASTER — The powerful 8-core CPU and up to 10-core GPU of the Apple M3 chip keep things running smoothly.
UP TO 18 HOURS OF BATTERY LIFE — Amazing, all-day battery life so you can leave the power adapter at home.
A BRILLIANT DISPLAY — The 13.6-inch Liquid Retina display supports 1 billion colors.
LOOK SHARP, SOUND GREAT — Everything looks and sounds amazing with a 1080p FaceTime HD camera, three mics, and four speakers with Spatial Audio.
APPS FLY WITH APPLE SILICON — All your favorites, from Microsoft 365 to Adobe Creative Cloud, run lightning fast in macOS.
              </p> 
              <a class="getstarted scrollto" href="{{url('s')}}">Buy Now</a>
            </div>
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>
@endsection