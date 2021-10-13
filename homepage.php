






<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link href="bootstrap.min.css" rel="stylesheet">
  <link href="carousel.css" rel="stylesheet">
  <link href="searchbar.css" rel="stylesheet">
  
</head> 

<body>
  <nav class="navbar fixed-top navbar-expand-sm navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Electronics Store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              All Categories
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="prod_phones.php">Smartphones</a></li>
              <li><a class="dropdown-item" href="prod_laptops.php">Laptops</a></li>
              <li><a class="dropdown-item" href="prod_tv.php">Televisions</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" action="phpsearch.php" method="post">
          <input class="form-control me-2" type="text" name ="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <div class="btn-group dropdown ml" role="group" aria-label="Button group with nested dropdown" >
          <div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-outline-Secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="margin-left: 20px;">
         Profile
        </button>
        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
          <li><p>Welcome back, <?=$_SESSION['username']?>!</p></li>
          <li><a class="dropdown-item" href="login.php">Login/Sign Up</a></li>
          <li><a class="dropdown-item" href="index.php?page=profile">My Account</a></li>
        </ul>
        </div>
      <button type="button" class="btn btn-" href = "index.php?page=cart">Cart</button>
      <button type="button" class="btn btn-">Orders</button>
      </div>
      </div>
      </div>
    </div>
  </nav>
  <br>
  <br>





  <main>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="51111308992_5d4ecdcc96_o.jpg" class="d-block w-100"
            alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h3 style="color: black;">Sony PlayStation 5</h3>
            <p style="color: black;">Play Has No Limits</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="anh-nhat-UkBwaZEhPFo-unsplash.jpg"
            class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h3>Samsung Galaxy S21</h3>
            <p>Epic. In every way</p>    
          </div>
        </div>
        <div class="carousel-item">
          <img src="proart studio.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h3>ASUS ProArt Studiobook 16 OLED</h3>
            <p>Born for Creative Pros</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>




    <!-- Content -->
    <div class="container marketing">
      <div class="row">
        <div class="col-lg-4">
          <img src="58.jpg" class="img-fluid">
          <h2>Headphones</h2>
          <p>
            <!-- Some representative placeholder content for the three columns of text below the carousel. This is the first column. -->
          </p><br>
          <p><a class="btn btn-primary" href="prod_headphones.php">View all</a></p>
        </div>
        <div class="col-lg-4">
          <img src="64.jpg" class="img-fluid">
          <h2>Cameras</h2>
          <p>
            <!-- Another exciting bit of representative placeholder content. This time, we've moved on to the second column. -->
          </p><br>
          <p><a class="btn btn-primary" href="prod_cameras.php">View all </a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
          <img src="63.jpg" class="img-fluid">
          <h2>Smart Phones</h2>
          <p>
            <!-- And lastly this, the third column of representative placeholder content. -->
          </p><br>
          <p><a class="btn btn-primary" href="prod_phones.php">View all </a></p>
        </div><!-- /.col-lg-4 -->
        <div class="row">
          <hr class="featurette-divider">
          <div class="col-lg-4">
            <img src="1581953002_1546586.jpg" width="410px" height="500px" class="img-fluid">
            <h2>Televisions</h2>
            <p>
              <!-- Some representative placeholder content for the three columns of text below the carousel. This is the first column. -->
            </p><br>
            <p><a class="btn btn-primary" href="prod_tv.php">View all </a></p>
          </div>
          <div class="col-lg-4">
            <img src="1604945711_IMG_1443405.jpg" class="img-fluid">
            <h2>Gaming Consoles</h2>
            <p>
              <!-- Another exciting bit of representative placeholder content. This time, we've moved on to the second column. -->
            </p><br>
            <p><a class="btn btn-primary" href="#">View all </a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
            <img src="1612546281_IMG_1484400.jpg" class="img-fluid">
            <h2>Laptops</h2>
            <p>
              <!-- And lastly this, the third column of representative placeholder content. -->
            </p><br>
            <p><a class="btn btn-primary" href="prod_laptops.php">View all</a></p>  
          </div>
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Apple iPhone 13
              <!-- <span class="text-muted"> It’ll blow your mind.</span> -->
            </h2>
            <p class="lead">
            <h3>Your new superpower.<h3>
                </p><br>
                <p>Chipset : Apple A15 Bionic (5 nm)</p>
                <p>Display : Super Retina XDR OLED 6.1 inches</p>
                <p>Internal : 128GB 4GB RAM, 256GB 4GB RAM, 512GB 4GB RAM</p>
          </div>
          <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
              height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
              preserveAspectRatio="xMidYMid slice" focusable="false">
              <image href="63.jpg" height="550" width="500" class="img-fluid" />
              <title>Placeholder</title><!-- <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text> -->
            </svg><button class="btn btn-primary"> PRE-ORDER </button>

            <!-- image in rest svg
 -->
            <!--     <svg width="500" height="500">
    <rect width=100% height="100%" fill="red"/>
    <image xlink:href="59.jpg"
        x="0" y="0" height="500" width="500" preserveAspectRatio="none"/>
  </svg> -->

          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">LG C1
              <!-- <span class="text-muted">See for yourself.</span> -->
            </h2>
            <p class="lead">
            <h3>LIGHT UP YOUR WORLD with SELF-LIT PIXELS<h3>
                </p><br>
                <p>4K UHD 3840 x 2160 OLED Panel</p>
                <p>120 Hz Refresh Rate</p>
                <p>WebOS & AI ThinQ™</p>
                <p>HDR10, HLG, Dolby Vision HDR Support</p>
          </div>
          <div class="col-md-5 order-md-1" id="thirdimage">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
              height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
              preserveAspectRatio="xMidYMid slice" focusable="false">
              <image href="lg_oled.jpg" width="100%" />
              <title>Placeholder</title><!-- <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text> -->
            </svg>
            <button class="btn btn-primary"> BUY NOW </button>
          </div>
        </div>

        <!-- <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7" >
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-md-5">

          
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><image href="61.jpg" height="500" width="500"/>  <rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text> --></svg>
      </div>
    </div>
    <hr class="featurette-divider">
    </div>
  </main>




  <!-- FOOTER -->
  <div class="container">
    <footer class="py-5">
      <div class="row">
        <div class="col-2">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
          </ul>
        </div>

        <!-- <div class="col-2">
        <h5>Useful Links</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About Us</a></li>
        </ul>
      </div> -->

        <div class="col-2">
          <h5>Help</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Track Order</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Track Return / Request Return</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>

          </ul>
        </div>

        <div class="col-2">
          <h5>Connect With Us</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Twitter</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Facebook</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Instagram</a></li>
          </ul>
        </div>
        <!-- <div class="col-4 offset-1">
        <form>
          <h5>Subscribe to our newsletter</h5>
          <p>Monthly digest of whats new and exciting from us.</p>
          <div class="d-flex w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <button class="btn btn-primary" type="button">Subscribe</button>
          </div>
        </form>
      </div>
    </div> -->
        <!-- Back to top button -->
        <!-- <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top" style="width: min-content ;height: min-content;">Top
          <i class="fas fa-arrow-up"></i>
        </button> -->
        <button onclick="topFunction()" id="myBtn" title="Go to top" style="width: min-content;">TOP</button>


    

        <!-- Explanation -->
        <!-- <div class="container mt-4 text-center" style="height: 2000px">
          <p>
            Start scrolling the page and a strong
            <strong>"Back to top" button </strong> will appear in the
            <strong>bottom right corner</strong> of the screen.
          </p>

          <p>Click this button and you will be taken to the top of the page.</p>
        </div> -->

        <!-- <div class="d-flex justify-content-between py-4 my-4 border-top">
          <p>&copy; 2021 Company, Inc. All rights reserved.</p>
          <ul class="list-unstyled d-flex">
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                  <use xlink:href="#twitter" />
                </svg></a></li>
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                  <use xlink:href="#instagram" />
                </svg></a></li>
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                  <use xlink:href="#facebook" />
                </svg></a></li>
            <p class="float-end"><a href="#">Back to top</a></p>
          </ul>
        </div> -->
    </footer>

  </div>
  <script src="BackToTop.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>
  
    
</body>

</html>

<!-- Home Page 
     Login/Signup/Signout Page
     Cart Page 
     Profile Page
     Product Page
     Product Listing
     Orders Page
     Contact Us Page
     Wish List Page -->