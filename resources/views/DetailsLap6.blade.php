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
    <br></br>
   
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="img/portfolio/lap6_1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="img/portfolio/lap6_2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="img/portfolio/lap6_3.jpg" alt="">
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
                <li><strong>Model name</strong>:17Z90Q-K.AAB8U1</li>
                <li><strong>Price</strong>:$979.00</li>
                <li><strong>CPU</strong>: Core i7</li>
                <li><strong>Memory </strong>: 16 GB</li>
                <li><strong>Screen   </strong>: 17 Inches</li>
                <li><strong>GPU  </strong>: Intel Iris Xe </li>
                <li><strong>Storage   </strong>: 1 TB </li>
                <li><strong>OS    </strong>:Windows 11 Home</li>
              </ul>
            </div>
            
          </div>

        </div>
        <div class="portfolio-description">
              <h2>About Product</h2>
              <p>
              Intel Evo Platform Powered by 12th Gen Intel Core i7 Processor and Iris Xe Graphics. A powerful processor with impressive with Iris Xe graphics, built to carry you through work, studies, and surfing the web.
32GB LPDDR5 RAM - 32GB of memory to a substantial clock speed of 5200 MHz, we’re making it simple to do work and play with minimal buffering
32GB LPDDR5. 32GB of memory to a substantial clock speed of 5200 Mhz, we’re making it simple to do work and play with minimal buffering.
2 TB NVMe Gen 4 M.2 SSD - Supporting 2 TB of storage, you have the power and speed to run multiple large applications while saving your important documents with ease
Ultra-Lightweight. With an ultra-lightweight body, bring your laptop wherever you go since it’ll never weigh you down.
80 Wh Battery: Carry your hustle anywhere with up to 12.5 hours of nonstop power and get up to 19.5 hours of video playback, with a whopping 80 Wh battery.*
Connectivity - Connect with Confidence: Two USB-C ports with Thunderbolt 4 support, two USB-A 3.2 ports, a full-size HDMI port, a microSD card reader, and a 3.5mm audio jack.
Full HD IR Webam: Stay connected Full HD video quality and built-in AI sound technology that filters out background noise so you can always look and sound your best.
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