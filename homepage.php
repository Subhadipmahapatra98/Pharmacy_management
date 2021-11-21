<!doctype html>
<html lang="en">
  <head>
    <title>Home page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>
    <header>
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <img src="images/logo.png" width="50" height="50">&emsp;
    <a class="navbar-brand text-primary" href="#">East-West Pharmacy</a>
     <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        
        <li class="nav-item">
          <a class="nav-link" href="album.php">Album</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="membership.php">Membership's</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        </ul>
      <div class="btn-group dropleft">
            <span type="label" class="btn btn-success">
                  Sign-in
            </button>
            <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only btn-lg">Toggle Dropdown</span>
            </button>
          <div class="dropdown-menu">
              <a class="dropdown-item" href="signinc.php">Customer</a>
              <a class="dropdown-item" href="signins.php">Staff</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="signina.php">Admin</a>
        </div>
        </div>
      
    </div>
  </nav>
</header>

<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" width="100%" height="100%" src="images/5.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
        <div class="container">
          <div class="carousel-caption text-right">
            <h1 class="text-dark">Join us now</h1>
            <p class="bg-light text-muted">The best pharmacy in your locality where you can buy offline and online Medicine or any of the major Medical Utilities.To order online join us now and get Exlcusive discount on Medicines upto <b><i>20%</i></b></p>
            <p><a class="btn btn-lg btn-primary" href="signup.php" role="button">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="images/6.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
        </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="images/7.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="images/icon1.jfif" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
        <h2>Personalised Service</h2>
        <p>We keep track of your medical record with the help of the Unique Customer ID which can be generated at the time of Signing up and joining East-West Pharmacy.</p>
      </div>
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140"src="images/icon3.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
        <h2>Reports</h2>
        <p>Generate health reports whenever you want by Logging in to East-West Pharmacy website from anywhere around the globe.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="images/icon2.jfif" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
        <h2>Emergency Services</h2>
        <p>You can us anytime in case of any Emergency 24 X 7. Our well known Experienced Doctors are always ready to offer their service.</p>
        <p class="text-danger">Emergency Number<br>1800-0081</p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Buy Medicines With Discounts</h2>
        <p class="lead">Now buy Medicines @ 20% discount when you order it online ,Home delivered or Buy at the shop. Offer valid for a limited period of time.</p>
      </div>
      <div class="col-md-5">
       <img src="images/badge1.jpg" width=450 height=450>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Free Home Delivery<br><span class="text-muted">24 X 7 Anytime</span></h2>
        <p class="lead">Now get home delivered the medicines just with a simple call and get 20% discount on the Medicine ordered.It's as simple as that.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="images/badge2.jpg" width=450 height=450>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Verified & Genuine<br><span class="text-muted">FDA Certified</span></h2>
        <p class="lead">All the Products sold at any of our medical premisis are all Verified and Genuine product certified by FDA(Food and Drug Administration).</p>
      </div>
      <div class="col-md-5">
        <img src="images/badge3.jpg" width=450 height=450>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2010-2020 Company, Inc. &middot; Privacy &middot; Terms</p>
  </footer>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="js/jquery.slim.min.js"><\/script>')</script>
      <script src="js/bootstrap.bundle.min.js"></script>
</html>
