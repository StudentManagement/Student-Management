<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Maths4U</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Home</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#classes">Classes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              @if (Route::has('login'))
                  <div class="top-right links">
                      @auth
                          <a class="nav-link js-scroll-trigger" href="{{ url('/home/dashboard') }}">Home Dashboard</a>
                      @else
                          <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Login</a>
                      @endauth
                  </div>
              @endif
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Intro Header -->
    <header class="masthead">
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="brand-heading">MATHS4U</h2>
              <h3 class="intro-text">The only way to learn mathematics is to do mathmatics</br>
                -Paul Halmos-
                <!--<br>Created by Start Bootstrap.--></h3>
              <a href="#about" class="btn btn-circle js-scroll-trigger">
                <i class="fa fa-angle-double-down animated"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- About Section -->
    <section id="about" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-xs-6 mx-auto" id="about_picture">
          </div>
          <div class="col-lg-6 col-xs-6 mx-auto">
            <h1 class="brand-heading">Chandana Dahanayaka</h1>
            <p class="intro-text">
            <p>Start our A/L classes in 2008 with 6 students. And today we had widen our strength to all over southern province</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Class Section -->
    <section id="classes" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1>Our Classes</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <font size="5" color="#58FA58">Galle</font> | <font size="5" color="#AC58FA">Thigma</font>
            <p>
             <strong>2018 Revision</strong> <code>13th September</code><br> 08.00 a.m.<br>
             <strong>2018 Theory</strong> <code>Saturday</code><br> 1 p.m. - 5 p.m.<br>
             <strong>2019 Theory</strong> <code>Saturday</code><br> 08.00 a.m. - 12.00 p.m.<br>
            </p>
          </div>
          <div class="col-lg-4">
            <font size="5" color="#58FA58">Matara</font> | <font size="5" color="#AC58FA">Gurukula</font>
            <p>
              <strong>2018 Revision</strong> <code>11th September</code><br> 08.00 a.m.<br>
              <strong>2018 Theory</strong> <code>Sunday</code><br> 1 p.m. - 5 p.m.<br>
              <strong>2019 Theory</strong> <code>Sunday</code><br> 08.00 a.m. - 12.00 p.m.<br>
            </p>
          </div>
          <div class="col-lg-4">
            <font size="5" color="#58FA58">Thangalle</font> | <font size="5" color="#AC58FA">Mahargha</font>
            <p>
              <strong>2018 Revision</strong> <code>12th September</code><br> 08.00 a.m.<br>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Contact Us</h2>
            <p>Feel free to contact us any time you need</p>
            <ul class="list-inline banner-social-buttons">
              <li class="list-inline-item">
                <a href="https://plus.google.com/101980840174982766946" target="_blank" class="btn btn-default btn-lg">
                  <i class="fa fa-google-plus fa-fw"></i>
                  <span class="network-name">Google</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/purechandana" target="_blank" class="btn btn-default btn-lg">
                  <i class="fa fa-facebook fa-fw"></i>
                  <span class="network-name">facebook</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.youtube.com/user/purechandana" target="_blank" class="btn btn-default btn-lg">
                  <i class="fa fa-youtube fa-fw"></i>
                  <span class="network-name">YouTube</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container text-center" id="footer">
        <p>Copyright &copy; 2017. Maths4U. All Rights Reserved.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>

  </body>

</html>
