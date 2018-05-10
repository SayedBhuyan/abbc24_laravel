<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>abbc24.com | @yield('title')</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  @yield("styles")
  <link rel="stylesheet" href="{{ asset('assets') }}/css/styles.css">
</head>
<body>

  <header class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="logo">
            <a href="{{ url('/') }}"><img src="{{ asset('assets') }}/img/logo2.jpg" alt="ABBC24.com"></a>
            <!-- <h1>abbc24.com</h1> -->
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <h1>Coming Soon...</h1>
          <!-- <ul>
            <li>√  Over 100 gas stations for sale now</li>
            <li>√  Selling gas stations since 1980</li>
            <li>√  Free consulting services available</li>
          </ul> -->
        </div>
      </div>
    </div>
  </header>


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <div class="row">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </nav>

@yield("breadcrumb")

  @yield("sections")
  
  <section class="news">
    <div class="container">
      <div class="row">
        @yield("left_sidebar")
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          @yield("post_meta")
          <div class="body">
            @yield("content")
          </div>
        </div>
        @yield("right_sidebar")
      </div>
    </div>
  </section>

@yield("related")


<!--Footer-->
<footer class="page-footer font-small unique-color-dark pt-0">

  <div style="background-color: #323741;">
    <div class="container">
      <!--Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!--Grid column-->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0 white-text">Get connected with us on social networks!</h6>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 col-lg-7 text-center text-md-right">
          <ul class="float-right author-social mb-0">
            <li><a href="#"><img src="{{ asset('assets') }}/img/fb.png" alt=""></a></li>
            <li><a href="#"><img src="{{ asset('assets') }}/img/twitter.png" alt=""></a></li>
            <li><a href="#"><img src="{{ asset('assets') }}/img/gp.png" alt=""></a></li>
          </ul>
        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->
    </div>
  </div>

  <!--Footer Links-->
  <div class="container mt-5 mb-4 text-center text-md-left">
    <div class="row mt-3">

    <!--First column-->
    <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
      <h6 class="text-uppercase font-weight-bold">
      <strong>Company name</strong>
      </h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit
      amet, consectetur adipisicing elit.</p>
    </div>
    <!--/.First column-->

    <!--Second column-->
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
      <h6 class="text-uppercase font-weight-bold">
      <strong>Products</strong>
      </h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
        <a href="#!">MDBootstrap</a>
      </p>
      <p>
        <a href="#!">MDWordPress</a>
      </p>
      <p>
        <a href="#!">BrandFlow</a>
      </p>
      <p>
        <a href="#!">Bootstrap Angular</a>
      </p>
    </div>
    <!--/.Second column-->

    <!--Third column-->
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
      <h6 class="text-uppercase font-weight-bold">
        <strong>Useful links</strong>
      </h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
        <a href="#!">Your Account</a>
      </p>
      <p>
        <a href="#!">Become an Affiliate</a>
      </p>
      <p>
        <a href="#!">Shipping Rates</a>
      </p>
      <p>
        <a href="#!">Help</a>
      </p>
  </div>
  <!--/.Third column-->

  <!--Fourth column-->
  <div class="col-md-4 col-lg-3 col-xl-3">
    <h6 class="text-uppercase font-weight-bold">
      <strong>Contact</strong>
    </h6>
    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
    <p>
      <i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
    <p>
      <i class="fa fa-envelope mr-3"></i> info@example.com</p>
    <p>
      <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
    <p>
      <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
  </div>
  <!--/.Fourth column-->

  </div>
  </div>
  <!--/.Footer Links-->

  <!-- Copyright-->
  <div class="footer-copyright py-3 text-center">
    © 2018 Copyright:
    <a href="">
    <strong> abbc24.com</strong>
    </a>
  </div>
  <!--/.Copyright -->

</footer>
<!--/.Footer-->




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
@yield("scripts")
<script src="{{ asset('assets') }}/js/scripts.js"></script>
</body>
</html>
