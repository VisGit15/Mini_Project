<?php

$q = "SELECT * FROM prod_cat";
$query = $pdo->prepare($q);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);





?>



<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link href="bootstrap.min.css" rel="stylesheet">
  <link href="carousel.css" rel="stylesheet">
  <link href="searchbar.css" rel="stylesheet">
  <style>
    body{
        font-family: Arial, sans-serif;
    }
    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
</style>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
  
</head> 

<body>
  <nav class="navbar fixed-top navbar-expand-sm navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="homepage.php">Electronics Store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="homepage.php">Home</a>
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
        <form class="d-flex" action="index.php?page=product&product_id=<?=$result['product_id']?>" method="post">
      <div class="search-box">
        <input type="text" autocomplete="off" placeholder="Search a Product  ..." />
        <div class="result"></div>
    </div>
          <!-- <input class="form-control me-2" type="text" name ="search" placeholder="Search" aria-label="Search"> -->
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
          <li><a class="dropdown-item" href="profile.php">My Account</a></li>
        </ul>
        </div>
      <button type="button" class="btn btn-">Cart</button>
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
          <br><br><br>
          <img src="71L1PbXlVpL._SL1500_.jpg"  width="400px" class="img-fluid">
          <h2>Cameras</h2>
          <p>
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

            </div>
    </div>
    <hr class="featurette-divider">
    </div>
  </main>


    <footer class ="foot">
            <div>
                <p>&copy; 2021, Shopping Cart System</p>
            </div>
        </footer>
  <button onclick="topFunction()" id="myBtn" title="Go to top" style="width: min-content;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
</svg></button>
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