
<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myDB";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com')";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();
?>


<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>InSyncEdu</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="hero_area ">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <img src="images/.png" alt="">
          </a>
          <!-- <a class="navbar-brand" href="index.html">
            <img src="images/logo_ver2.png" style="width: 180px;" alt="Assurem Healthcare Pvt. Ltd. Logo">
          </a> -->
          <div class="" id="">
            <!--<div class="User_option">-->
            <!--  <form class="form-inline my-2  mb-3 mb-lg-0">-->
            <!--    <input type="search" placeholder="Search">-->
            <!--    <button class="btn   my-sm-0 nav_search-btn" type="submit"></button>-->
            <!--  </form>-->
            <!--</div>-->
            
            <nav align="right" style="margin: o auto;"  class="navbar  navbar-expand-lg navbar-light align-self-end bg-light ">
              <!--<a class="navbar-brand" href="#">Navbar</a>-->
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      About Us
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="about_us.php">ABOUT US</a>
                      <a class="dropdown-item" href="valus.php">VALUES</a>
                      <a class="dropdown-item" href="respons.php">SOCIAL RESPONSABILITY</a>
                      <!-- <a class="dropdown-item" href="life_assur.php">LIFE AT ASSUREM</a> -->
                    </div>
                  </li>
                  <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Our Business
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li> -->
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="product.php">
                      Products
                    </a>
                    <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="dom_pro.php">DOMESTIC</a>
                      <a class="dropdown-item" href="#">INTERNATIONAL</a>
                    </div> -->
                  </li>
                  <!-- <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li> -->
                  <li class="nav-item">
                    <a class="nav-link" href="services.php">Services<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Media Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="contact.php">Contact Us</a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
              </div>
            </nav>
            
            <!--<div class="custom_menu-btn">-->
            <!--  <button onclick="openNav()">-->
            <!--    <span class="s-1">-->

            <!--    </span>-->
            <!--    <span class="s-2">-->

            <!--    </span>-->
            <!--    <span class="s-3">-->

            <!--    </span>-->
            <!--  </button>-->
            <!--</div>-->
            <!--<div id="myNav" class="overlay">-->
            <!--  <div class="overlay-content">-->
            <!--    <a href="index.html">Home</a>-->
            <!--    <a href="about.html">About</a>-->
            <!--    <a href="contact.html">Contact Us</a>-->
            <!--  </div>-->
            <!--</div>-->
          </div>
        </nav>
      </div>
    </header>
     <!--end header section -->
    <!-- slider section -->
    
    <section class="slider_section">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <div class="number">
                      <h5>
                        01
                      </h5>
                    </div>
                    <h1>
                    InSyncEdu <br>
                      <span>
                        Stay Safe and Healthy  
                      </span>
                    </h1>
                    <p>
                        Empowering Education on Discovering Intimacy, Period Hygiene, and More
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Read More
                      </a>
                      <a href="" class="btn-2">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/girl_with_lap.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <div class="number">
                      <h5>
                        02
                      </h5>
                    </div>
                    <h1>
                      Sex Education <br>
                      <span>
                        Stay Safe and Healthy 
                      </span>
                    </h1>
                    <p>
                      Empowering Sexual Health, Enriching Lives
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Read More
                      </a>
                      <a href="" class="btn-2">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/girl_with_lap.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <div class="number">
                      <h5>
                        03
                      </h5>
                    </div>
                    <h1>
                      Sex Education <br>
                      <span>
                        Stay Safe and Healthy
                      </span>
                    </h1>
                    <p>
                      Empowering Sexual Health, Enriching Lives
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Read More
                      </a>
                      <a href="" class="btn-2">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/girl_with_lap.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <div class="number">
                      <h5>
                        04
                      </h5>
                    </div>
                    <h1>
                    Sex Education <br>
                      <span>
                        Stay Safe and Healthy
                      </span>
                    </h1>
                    <p>
                      Empowering Sexual Health, Enriching Lives
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Read More
                      </a>
                      <a href="" class="btn-2">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/girl_with_lap.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="detail-box">
        <div class="heading_container">
          <img src="images/sign.png" alt="">
          <h2>
            About Us
          </h2>
        </div>
        <p>
            Welcome to Stay Safe and Healthy, your premier destination for comprehensive sexual health education and resources. Our mission is to provide individuals of all ages across India with the knowledge, tools, and support needed to make informed decisions about their sexual health. We believe that a society educated about sexual health is a healthier and happier society.
        </p>
        <div class="btn-box">
          <a href="">
            <span>
              Read More
            </span>
            <img src="images/link-arrow.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- animal section -->

  <section class="animal_section layout_padding">
    <div class="container">
      <div class="animal_container">
        <div class="box b1">
          <div class="img-box">
            <img src="images/question.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Numerous Query
            </h5>
            <p>
              It is a long established fact that a reader will be distracted by
            </p>
          </div>
        </div>
        <div class="box b2">
          <div class="img-box">
            <img src="images/edu_2.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Suppress Necessary Stydy
            </h5>
            <p>
              It is a long established fact that a reader will be distracted by
            </p>
          </div>
        </div>
        <div class="box b1">
          <div class="img-box">
            <img src="images/talk.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Deceitful Conversation
            </h5>
            <p>
              It is a long established fact that a reader will be distracted by
            </p>
          </div>
        </div>
        <div class="box b2">
          <div class="img-box">
            <img src="images/edu.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
                Numerous Taboos
            </h5>
            <p>
              It is a long established fact that a reader will be distracted by
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end animal section -->

  <!-- pet section -->

  <section class="pet_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/care.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <img src="images/sign.png" alt="">
              <h2>
                Caring for you
              </h2>
            </div>
            <p>
              It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
            </p>
            <div class="btn-box">
              <a href="">
                <span>
                  Read More
                </span>
                <img src="images/link-arrow.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end pet section -->

  <!-- us section -->

  <section class="us_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <img src="images/sign.png" alt="">
        <h2>
            Your Cares
        </h2>
        <p>
          It is a long established fact that a reader will be distracted by the readable content of a
        </p>
      </div>
      <div class="us_container">
        <div class="box">
          <div class="img1-box">
            <img src="images/boy_girl_1.png" alt="">
          </div>
          <div class="img2-box">
            <img src="images/life.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
                LIFE
            </h6>
          </div>
        </div>
        <div class="box">
          <div class="img1-box">
            <img src="images/virus.png" alt="">
          </div>
          <div class="img2-box">
            <img src="images/shield.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
                PROTECTION
            </h6>
          </div>
        </div>
        <div class="box">
          <div class="img1-box">
            <img src="images/dna.png" alt="">
          </div>
          <div class="img2-box">
            <img src="images/omega.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
                HEALTHY
            </h6>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          <span>
            Read More
          </span>
          <img src="images/link-arrow.png" alt="">
        </a>
      </div>
    </div>
  </section>

  <!-- end us section -->

  <!-- food section -->

  <section class="food_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <img src="images/sign.png" alt="">
        <h2>
          Our Hygine Products
        </h2>
        <p>
          It is a long established fact that a reader will be distracted by the readable content of a
        </p>
      </div>
      <div class="food_container">
        <div class="box">
          <div class="img-box">
            <img src="images/p_1.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Basic
            </h6>
            <h3>
              <span>$</span>1
            </h3>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/p_2.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Medium
            </h6>
            <h3>
              <span>$</span>2
            </h3>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/p_3.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Standard
            </h6>
            <h3>
              <span>$</span>3
            </h3>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end food section -->

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <img src="images/sign.png" alt="">
        <h2>
          What Says Our Studentd 
        </h2>
        <p>
          It is a long established fact that a reader will be distracted by the
        </p>
      </div>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="img-box">
                <img src="images/student.png" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  Jack Mengo
                </h4>
                <p>
                  It is a long established fact that a reader will be distracted by the readable cIt is a long established fact that a reader will be distracted by the readable c
                </p>
                <img src="images/quote.png" alt="">
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="images/student.png" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  Jack Mengoc
                </h4>
                <p>
                  It is a long established fact that a reader will be distracted by the readable cIt is a long established fact that a reader will be distracted by the readable c
                </p>
                <img src="images/quote.png" alt="">
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="images/student.png" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  Jack Mengo
                </h4>
                <p>
                  It is a long established fact that a reader will be distracted by the readable cIt is a long established fact that a reader will be distracted by the readable c
                </p>
                <img src="images/quote.png" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- contact section -->

  <section class="contact_section layout_padding-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="form_container">
            <div class="heading_container">
              <img src="images/sign.png" alt="">
              <h2>
                Request A Call Back
              </h2>
              <p>
                It is a long established fact that a reader will be distracted by the
              </p>
            </div>
            <form action="callbackentry.php" method="POST">
              <div>
                <input type="text" name="name" placeholder="Full Name " />
              </div>
              <div>
                <input type="text" name="number" placeholder="Phone number" />
              </div>
              <div>
                <input type="email" name="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" name="message" class="message-box" placeholder="Message" />
              </div>
              <div class="d-flex ">
                <button type="submit" name="callsubmit">
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="map_container">
            <div class="map-responsive">
              <iframe src="" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->


  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="info_contact">
            <h5>
              CONTACT INFO
            </h5>
            <div>
              <img src="images/call.png" alt="" />
              <p>
                +01 1234567890
              </p>
            </div>
            <div>
              <img src="images/mail.png" alt="" />
              <p>
                demo@gmail.com
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_time">
            <h5>
              Opening Hours Shop
            </h5>
            <div>
              <p>
                Monday to friday
              </p>
            </div>
            <div>
              <p>
                07:00 am to 04:00 pm
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="info_social">
            <h5>
              social media
            </h5>
            <div class="social_container">
              <div>
                <a href="">
                  <img src="images/fb.png" alt="" />
                </a>
              </div>
              <div>
                <a href="">
                  <img src="images/twitter.png" alt="" />
                </a>
              </div>
              <div>
                <a href="">
                  <img src="images/linkedin.png" alt="" />
                </a>
              </div>
              <div>
                <a href="">
                  <img src="images/instagram.png" alt="" />
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_form pl-lg-4">
            <h5>
              Newsletter
            </h5>
            <form action="">
              <input type="text" placeholder="Enter Your Email" />
              <button type="submit">
                Subscribe
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->


  <!-- footer section -->
  <section class="container-fluid footer_section ">
  </section>
  <!-- end  footer section -->


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width")
      document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
    }
  </script>

</body>

</html>