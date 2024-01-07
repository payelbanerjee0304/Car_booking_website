<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Cab Rental Website</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Cab Rental <em>Website</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/index')}}">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item active"><a class="nav-link" href="{{url('/offer')}}">Offers</a></li>


                <li class="nav-item"><a class="nav-link" href="{{url('/aboutus')}}">About Us</a></li>
                
                <li class="nav-item"><a class="nav-link" href="{{url('/contactus')}}">Contact Us</a></li>
            </ul>
            <div class="btn btn-warning btn-lg"><a href="{{url('/insert')}}" class=""><ins><strong>Book Your Ride</strong></ins></a>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Driving Excellence, One Ride at a Time</h4>
              <h2>Offers</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="product-item">
              <img src="assets/images/offer-1-370x270.jpeg" alt="">

              <div class="down-content">
                <h4>Two-Wheeler</h4>

                <h6><small>Starting from</small> 500 &#8377 <small>per ride</small></h6>

                <p>Upto 10 Km<br>&nbsp &nbsp OR<br>maximum 1 hour</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <img src="assets/images/offer-2-370x270.jpg" alt="">

              <div class="down-content">
                <h4>Four-Seater</h4>

                <h6><small>Starting from</small> 1000 &#8377 <small>per ride</small></h6>

                <p>Upto 10 Km<br>&nbsp &nbsp OR<br>maximum 1 hour</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <img src="assets/images/offer-3-370x270.jpeg" alt="">

              <div class="down-content">
                <h4>Six-Seater</h4>

                <h6><small>Starting from</small> 1000 &#8377 <small>per ride</small></h6>

                <p>Upto 10 Km<br>&nbsp &nbsp OR<br>maximum 1 hour</p>
              </div>
            </div>
          </div>

          
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>A EjobIndia Project</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>
