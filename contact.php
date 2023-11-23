
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
                    <a class="nav-link" href="contact.php" tabindex="-1" aria-disabled="true">Contact Us</a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
              </div>
            </nav>
            </div>
        </nav>
      </div>
    </header>

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
        <!-- <div class="col-md-6 col-lg-3">
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
        </div> -->

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