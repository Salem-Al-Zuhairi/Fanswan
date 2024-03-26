

<!DOCTYPE html>
<html>
<head>
<title>login</title>
 <!-- Vendor CSS Files -->
 <link href="vendor/aos/aos.css" rel="stylesheet">   
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet"type="text/css" href="css\signup.css">
    <link href="css/style.css" rel="stylesheet">
 
</head>
            
             
               
<body>
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="{{url('home')}}">Fanswan</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="getstarted scrollto" href="{{url('home')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{url('login')}}">login</a></li>
          <li><a class="nav-link scrollto" href="{{url('signup')}}">signup</a></li>
         
       
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

            <div class="box">
                <form method="post">
                    <h1>Login</h1>
                    <div class="user-name">
                        <label class="label">UserName:</label>
                        <input class="inputs" type="text" name="user-name" required placeholder="Enter Username">
                    </div>

                  

                    <div class="user-name">
                        <label class="label">Password:</label>
                        <input class="inputs" type="password" name="password" required placeholder="Enter Your Password">
                    </div>

                    <div class="c-submit">
                        <input class="submit" type="submit" name="submit" value="login">
                    </div>

                </form>
                <div class="dont">
                    <span>don't have an account?</span>
                    <a href="{{url('signup')}}" target="_bla8nk">Sing up</a>
                </div>

            </div>
       
   
  


</body>
</html>
