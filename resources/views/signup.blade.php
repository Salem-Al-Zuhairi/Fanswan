<!DOCTYPE html>
<html>

<head>

  <title>signup</title>
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css\signup.css">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
      <a href="{{url('home')}}"><img src="{{asset('img/fanswan-logo.png')}}" alt="fanswan logo" class="img-fluid"></a>
        <h1><a href="{{url('home')}}">Fanswan</a></h1>
        </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="getstarted scrollto" href="{{url('home')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{url('login')}}">Login</a></li>
          <li><a class="nav-link scrollto" href="{{url('login.signup')}}">SignUp</a></li>


        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <div class="box">
    <form method="post" action="{{ route('store') }}">
      @csrf
      <h1>SignUp</h1>
      <div class="user-name">
        <label class="label">Username:</label>
        <input class="inputs" type="text" name="name" required placeholder="Enter Username">
      </div>
      @if($errors->has('name'))
      <div class="alert alert-danger">{{ $errors->first('name') }}</div>
      @endif
      <div class="email">
        <label class="label">Email:</label>
        <input class="inputs" type="email" name="email" required placeholder="Enter email">
      </div>
      @if($errors->has('email'))
      <div class="alert alert-danger">{{ $errors->first('email') }}</div>
      @endif
      <div class="user-name">
        <label class="label">Password:</label>
        <input class="inputs" type="password" name="password" required placeholder="Enter Your Password">
      </div>
      @if($errors->has('password'))
      <div class="alert alert-danger">{{ $errors->first('password') }}</div>
      @endif
      <div class="c-submit">
        <input class="submit" type="submit" name="submit" value="Signup">
      </div>

    </form>
    <div class="dont">
      <span>already have an account?</span>
      <a href="{{url('login')}}" target="_blank">Login</a>
    </div>

  </div>
</body>

</html>