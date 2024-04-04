@extends('main')
@section('con')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Details</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/vendor/aos/aos.css" rel="stylesheet">
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/css/style.css" rel="stylesheet">

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
          @foreach (explode(',', $product->images) as $image)
    <div class="swiper-slide">
        <img src="{{ $image }}" alt="">
    </div>
@endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="portfolio-info">
          <h3>Product information</h3>
          <ul>
            <li><strong>Brand</strong>: {{ $product->brand }}</li>
            <li><strong>Model name</strong>: {{ $product->model_name }}</li>
            <li><strong>Price</strong>: {{ $product->price }}</li>
            <li><strong>CPU</strong>: {{ $product->cpu_model}}</li>
            <li><strong>Memory</strong>: {{ $product->ram }}</li>
            <li><strong>Screen</strong>: {{ $product->screen_size }}</li>
            <li><strong>GPU</strong>: {{ $product->graphics_card }}</li>
            <li><strong>Storage</strong>: {{ $product->storge }}</li>
            <li><strong>OS</strong>: {{ $product->os }}</li>
          </ul>
        </div>
      </div>

     
      <div class="portfolio-description">
 <h2>About Product</h2>
     @php
    $sentences = explode("•", $product->about);
@endphp

@foreach ($sentences as $index => $sentence)
    @if ($index === 0)
        <p>{{ $sentence }}</p>
    @else
        <p>- {{ $sentence }}</p>
    @endif
@endforeach
        
  <a class="getstarted scrollto" href="{{ url('s') }}">Buy Now</a>
        </div>
      </div>

    </div>

  </div>
</section>

  </main><!-- End #main -->

  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/vendor/aos/aos.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/js/main.js"></script>

</body>

</html>
@endsection
