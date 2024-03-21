
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
                  <img src="img/portfolio/lap5_1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="img/portfolio/lap5_2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="img/portfolio/lap5_3.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Product information</h3>
              <ul>
                <li><strong>Brand </strong>: HP</li>
                <li><strong>Model name</strong>:TPN-C158 Envy</li>
                <li><strong>Price</strong>: $559.00</li>
                <li><strong>CPU</strong>: 2.3 GHz AMD_r_series</li>
                <li><strong>Memory </strong>: 16 GB DDR4</li>
                <li><strong>Screen </strong>: 1920 x 1080 | 15.6 Inches </li>
                <li><strong>GPU </strong>:AMD Radeon Graphics </li>
                <li><strong>Storage </strong>: 512 GB SSD </li>
                <li><strong>OS </strong>:Windows 11</li>
              </ul>
            </div>
            
          </div>

     
        <div class="portfolio-description">
              <h2>About Product</h2>
              <p>
              •	【Memory & Storage】Memory is 16GB high-bandwidth RAM to smoothly run multiple applications and browser tabs all at once. Hard Drive is 512GB PCIe NVMe M.2 Solid State Drive which allows to fast bootup and data transfer
•	【Processor】AMD Ryzen 5 5625U 2.30GHz Hexa-Core Processor up to 4.30GHz, AMD Radeon Graphics
•	【Screen】15.6" Full HD Micro-edge Touchscreen (1920 x 1080) Display, Multitouch-enabled, Edge-to-edge Glass, 250 nits, 45% NTSC
•	【Ports】2 x USB 3.2 Gen 2 Type-C, 2 x USB 3.2 Gen 1 Type-A, 1 x HDMI 2.1, 1 x Combination Audio Jack, 1 x Multi-format SD Media Card Reader; Wireless-AX Wi-Fi 6 + Bluetooth Combo
•	【Operating System】Windows 11 Home, HP Stylus Pen Included 

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