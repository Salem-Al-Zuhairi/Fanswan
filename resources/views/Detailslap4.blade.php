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
                  <img src="img/portfolio/lap4_1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="img/portfolio/lap4_2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="img/portfolio/lap4_3.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Product information</h3>
              <ul>
                <li><strong>Brand </strong>:MSI</li>
                <li><strong>Model name</strong>: MSI GF63</li>
                <li><strong>Price</strong>:$623.03</li>
                <li><strong>CPU</strong>: Core i5 Family</li>
                <li><strong>Memory </strong>: 16 GB DDR4</li>
                <li><strong>Screen  </strong>:15.6 Inches</li>
                <li><strong>GPU </strong>: Dedicated </li>
                <li><strong>Storage </strong>: 512 GB SSD </li>
                <li><strong>OS </strong>:Windows 11</li>
              </ul>
            </div>
            
          </div>
          <div class="portfolio-description">
              <h2>About Product </h2>
              <p>
              •	15.6" Full HD display: The 1920 x 1080 resolution with 144hz boasts impressive color and clarity. Energy-efficient LED backlight.
•	16GB system memory for intense multitasking and gaming: Reams of high-bandwidth DDR4 RAM to smoothly run your graphics-heavy PC games and video-editing applications, as well as numerous programs and browser tabs all at once.
•	512GB solid-state drive (PCI-e): Save files fast and store more data. With massive amounts of storage and advanced communication power, PCI-e NVMe SSDs are great for major gaming applications, multiple servers, daily backups, and more.
•	NVIDIA GeForce RTX 3050 graphics: Backed by 4GB GDDR6 dedicated video memory for an ultrafast, advanced GPU to fuel your games.
•	11th Gen Intel Core i5-11400H processor optimized for gaming, creating, and productivity. Featuring PCIe Gen 4.0 support

                 
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