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
    <br></br>
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="img/portfolio/lap1_1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="\img/portfolio/lap1_2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="img/portfolio/lap1_3.jpg" alt="">
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
                <li><strong>Model name</strong>:16T90R-K.AAC7U1</li>
                <li><strong>Price</strong>: $817.88</li>
                <li><strong>CPU</strong>: Core i7</li>
                <li><strong>Memory </strong>: 512 GB</li>
                <li><strong>Screen </strong>: 16</li>
                <li><strong>GPU </strong>:Integrated </li>
                <li><strong>Storage </strong>: 16 GB </li>
                <li><strong>OS </strong>:Windows 11 Home</li>
              </ul>
            </div>
   
            </div>
            <div class="portfolio-description">
              <h2>About Product</h2>
              <p>
              13th Gen Intel Core Processor - Powered by Intel’s 13th Gen processor and Intel Iris Xe graphics, this LG gram is engineered to keep users multitasking with ease. You can accomplish those intensive daily demands from crunching numbers, to editing a masterpiece with processor power that won't slow you down.
5200 MHz LPDDR5 RAM - Stay in the zone with 5200 MHz of lightning-quick memory you need to perform at your very best during both work and play.
16" WQXGA Non-Reflective IPS Display With DCI-P3 99% - Expand the realm of what’s possible using a 16” screen with a 16:10 aspect ratio that can make your visions come to life. The non-reflective screen helps maintain your focus and a bold DCI-P3 99% color gamut4 display adds a vivid touch to graphics.
Windows 11 Home - Windows 11 brings you closer to what you love. Pursue your passions and maximize your productivity with the new Windows 11. Built with tools to help you multitask, think, create, and connect—all designed with simplicity and intuition in mind.
Dolby Atmos - Dolby Atmos is a proprietary audio format that brings the same immersive, 360-degree sound you get in a movie theater to your LG gram. Hear and feel more in music and movies through Dolby Atmos and be moved by the immersive surround sound experience.
360-degree Hinge - Transform your gram from laptop to tablet and everything in between with the 360-degree hinge. Whether watching a movie, sharing your screen with others, note taking or on a video call, choose a configuration that works for you.
72Wh Battery - LG gram's large 72Wh battery gives you the power you need, wherever and whenever you need it. Work, play, create and watch wherever your hustle takes you.
              </p > <a class="getstarted scrollto" href="{{url('s')}}">Buy Now</a>
              
          </div>

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