@extends('main')
@section('con')


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Your ultimate destination for top-notch computer sales</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Shopping for Computers & PC Components Online</h2>
          <div data-aos="fade-up" data-aos-delay="800">
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

   
   <!-- ======= About Us Section ======= -->
   <section id="about" class="about">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>About Us</h2>
      </div>

      <div class="row content">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
          <p>
            Here at Fanswan we’ve spent over 30 years focusing on just three things
           – technology, people, and how we bring them together. Whatever your passion, be it PC gaming, professional graphics, video editing, music production, high performance compute or artificial intelligence – we have a team of specialists ready and waiting to help you find exactly what you need, even if it’s just some good friendly advice. Our family of over 400 teammates live and breathe our 3XS philosophy of providing customers with the best Specification, Service and Satisfaction, which is reflected by the hundreds of media and industry awards Scan has won, and by more than 25,000 positive reviews on Trustpilot.
          </p>
          
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
          <ul>
            <li><i class="ri-check-double-line"></i>
            Whether you’re a customer, 
            staff member or vendor, we welcome you to the Fanswan family. 
            We’re a tight, all inclusive bunch that always looks after its own.
          </ul>
            <ul>
              <li><i class="ri-check-double-line"></i> Thank you for choosing Fanswan as your trusted destination
                for all your computer and accessory needs.
                 We look forward to serving you and helping you find the perfect
                technology solutions to meet your goals and aspirations.</li>
              
              
            </ul>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

    

   
  <section id="Products" class="portfolio">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
      <h2>Products</h2>
    </div>

    <div id="products">
      <div class="container">
        <div class="section-header"></div>
        <div class="row align-items-center">
          @foreach ($products as $product)
            <div class="col-md-3">
              <div class="product-single">
                <div class="product-img">
                  <img src="{{ $product['images'] }}" alt="Product Image">
                </div>
                <div class="product-content">
                  <h2>{{ $product['NAME'] }}</h2>
                  <h3>{{ $product['price'] }}</h3>
                  <a class="btn" href="{{ route('product.show', ['id' => $product['id']]) }}">Read More</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
  
 
  

  </main><!-- End #main   <section id="Products" class="portfolio">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
      <h2>Products</h2>
    </div>

    <div id="products">
      <div class="container">
        <div class="section-header"></div>
        <div class="row align-items-center">
          @foreach ($products as $product)
            <div class="col-md-3">
              <div class="product-single">
                <div class="product-img">
                  <img src="{{ $product['images'] }}" alt="Product Image">
                </div>
                <div class="product-content">
                  <h2>{{ $product['NAME'] }}</h2>
                  <h3>{{ $product['price'] }}</h3>
                  <a class="btn" href="{{ route('product.show', ['id
                      ' => $product['id']]) }}">Read More</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>-->

 


@endsection

