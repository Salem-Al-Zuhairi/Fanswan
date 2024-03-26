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
   
    <br> </br>
    <br> </br>


    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="img/portfolio/lap7_1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="img/portfolio/lap7_2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="img/portfolio/lap7_3.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Product information</h3>
              <ul>
                <li><strong>Brand </strong>: LG</li>
                <li><strong>Model name</strong>:16Z90Q-R.AAS8U1</li>
                <li><strong>Price</strong>: $922.19</li>
                <li><strong>CPU</strong>: Core i7</li>
                <li><strong>Memory </strong>: 16 GB</li>
                <li><strong>Screen   </strong>:17 Inches </li>
                <li><strong>GPU </strong>: RTX2050 </li>
                <li><strong>Storage </strong>: 1 TB  </li>
                <li><strong>OS  </strong>:Windows 11 Home</li>
              </ul>
            </div>
            
          </div>

       
        <div class="portfolio-description">
              <h2>About Product</h2>
              <p>
              LG gram 16'' WQXGA Notebook Computer (Charcoal Gray) - AC Adapter - Original Box
LG gram16Z90Q Thin and Lightweight Laptop
16" WQXGA (2560x1600) Anti-Glare IPS LCD, with DCI-P3 99% (Typical, min 95%)
Windows 11 Home
Intel Evo 12th Gen Intel Core i5-1240P 12 Core Processor Built with tools to help you multitask, think,create, and connect-all designed with simplicity and intuition in mind.Intel Evo platform powered by Intel Core i5 processor and Intel Iris Xe graphics - Bring it to LifeMake strides with a powerful processor with impressive Iris Xe graphics, built to carry you through work, studies, and surfing the web.16GB 5200 MHz LPDDR5 - The Speed of YouFrom 16GB of memory to a substantial clock speed of 5200 MHz, we're making it simple to do work and play with minimal buffering so you can always focus on your next move.
Ultra-Lightweight - Might Meets LightWith an ultra-lightweight body, bring your laptop wherever you go since it'll never weigh you down.MIL-STD-810 - Tried and True DurabilityNo matter where your day takes you, your laptop is up for the challenge.
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