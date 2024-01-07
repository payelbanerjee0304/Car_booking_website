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
          <a class="navbar-brand" href="{{url('/index')}}"><h2>Cab Rental <em>Website</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/index')}}">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="{{url('/offer')}}">Offers</a></li>


                <li class="nav-item"><a class="nav-link" href="{{url('/aboutus')}}">About Us</a></li>
                
                <li class="nav-item"><a class="nav-link" href="{{url('/contactus')}}">Contact Us</a></li>
            </ul>
            <div class="btn btn-warning btn-lg"><a href="{{url('/insert')}}" class=""><ins><strong>Book Your Ride</strong></ins></a>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4><font color="black">Unlock Your Ride Today!</font></h4>
            <h2>Elevate Your Journey with Us</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h2><font color="red">Ride Beyond Limits</h2>
            <h2>Your Door to Destination, Anytime, Anywhere</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Book Your Journey Today</h4>
            <h2>Ride in Style, Arrive with a Smile</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center">
    <div class="btn btn-warning btn-lg"><a href="{{url('/login')}}" class=""><ins><strong>Edit Your Booking Time OR Location</strong></ins></a>
          </div></div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Offers</h2>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="{{url('/offer')}}"><img src="assets/images/offer-1-370x270.jpeg" alt=""></a>
              <div class="down-content">
                <a href="{{url('/offer')}}"><h4>Two-Wheeler</h4></a>
                <h6><small>Starting from</small> 500 &#8377 <small>per ride</small></h6>
                <p>Upto 10 Km<br>&nbsp &nbsp OR<br>maximum 1 hour</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="offers.html"><img src="assets/images/offer-2-370x270.jpg" alt=""></a>
              <div class="down-content">
                <a href="{{url('/offer')}}"><h4>Four-Seater</h4></a>
                <h6><small>Starting from</small> 1000 &#8377 <small>per ride</small></h6>
                <p>Upto 10 Km<br>&nbsp &nbsp OR<br>maximum 1 hour</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="{{url('/offer')}}"><img src="assets/images/offer-3-370x270.jpeg" alt=""></a>
              <div class="down-content">
                <a href="{{url('/offer')}}"><h4>Six-Seater</h4></a>
                <h6><small>Starting from</small> 1000 &#8377 <small>per ride</small></h6>
                <p>Upto 10 Km<br>&nbsp &nbsp OR<br>maximum 1 hour</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Us</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <p>At ShiBolt Company, we're more than just a cab booking company; we're your trusted partner in transportation. With a passion for redefining the way you move, we combine cutting-edge technology, exceptional service, and a commitment to sustainability.<br>

Our mission is to provide seamless, reliable, and environmentally responsible transportation solutions that cater to your unique needs. Whether you're traveling for business or leisure, we're here to make your journey effortless, enjoyable, and memorable.<br>

Join us on the road to a greener, more connected future. Experience the difference with ShiBolt Company, where every ride is an opportunity to exceed your expectations.</p>
              <a href="{{url('/aboutus')}}" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/about-1-570x350.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="services" style="background-image: url(assets/images/other-image-fullscren-1-1920x900.jpg);" >
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Happy Clients</h2>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-clients owl-carousel text-center">
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Payel Banerjee</h4>
                  <p class="n-m"><em>"I recently had the pleasure of using ShiBolt for my transportation needs, and I must say, it was an exceptional experience. From booking to drop-off, they truly stand out in the crowded field of cab services."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Nayan Ghosh</h4>
                  <p class="n-m"><em>"The convenience of their app made booking a breeze, and I was pleasantly surprised by the promptness of their response. The driver who arrived was not only punctual but also very courteous and professional, making the journey comfortable and enjoyable."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Md Masud Hasan</h4>
                  <p class="n-m"><em>"What sets ShiBolt apart, in my opinion, is their commitment to eco-friendliness. Their vehicles are clean and environmentally responsible, which aligns with my values. The fare was reasonable, and I appreciate their transparent pricing structure."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Abesh Mondal</h4>
                  <p class="n-m"><em>"Overall, I highly recommend ShiBolt for anyone in need of reliable, efficient, and sustainable transportation. They've won me over as a loyal customer, and I look forward to more rides with them in the future. Thank you for an excellent service!"</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Subhajit Das</h4>
                  <p class="n-m"><em>"The fare was reasonable, and there were no surprises or hidden charges. [Company Name] delivers on their promise of reliable and affordable transportation."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Payel Baidya</h4>
                  <p class="n-m"><em>"I highly recommend ShiBolt to anyone in need of dependable and hassle-free cab services. They have earned my trust, and I will definitely be a returning customer. Kudos to the entire team for a job well done!"</em></p>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Connect, Collaborate, and Cruise with Us!</h4>
                  <p>Your Questions, Our Answers – Reach Out for Assistance, Information, or Collaboration!</p>
                </div>
                <div class="col-lg-4 col-md-6 text-right">
                  <a href="{{url('/contactus')}}" class="filled-button">Contact Us</a>
                </div>
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