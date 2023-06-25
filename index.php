<!DOCTYPE html>
<html>
<?php
// $file = 'css/style.css';
// $permissions = 0644; // Set the desired permissions

// if (chmod($file, $permissions)) {
//   echo "Permissions updated successfully!";
// } else {
//   echo "Failed to update permissions.";
// }
?>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


  <title>Taut Secure</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <style>
    .address {
      font-weight: normal;
      font-size: 15px;
    }

    .service_section .service_container .box img {
      height: 300px;
      object-fit: cover;
      border-radius: 10px;
      box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
      border: 1px solid red;


    }

    .service_section .service_container .box h6 {
      color: red;
      background: white;
      padding: 0px 5px;
      border-radius: 3px;
    }

    .readmore-btn a {
      background: red;
      padding: 10px 20px;
      color: white;
      border-radius: 3px;
    }
  </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
            <img src="images/taut_logo.png" alt="" />

          </a>
          <div class="contact_nav" id="">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link" href="service.php">
                  <i class="fa fa-map-marker"></i>
                  <span> Mangalore </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.php">
                  <i class="fa fa-phone"></i>
                  <span>Call : + 91 7337836586</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.php">
                  <i class="fa fa-envelope"></i>
                  <span>info@tautsecure.com</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>

    </header>
    <!-- end header section -->

    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="container">
        <div class="custom_nav2">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex  flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav  ">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php">About </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./service.php">Services </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./projects.php">Projects </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>

                </ul>

              </div>
            </div>
          </nav>
        </div>
      </div>
      <div class="slider_container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-7 offset-md-6 offset-md-5">
                    <div class="detail-box">

                      <h1>
                        TAUT SECURE
                      </h1>
                      <h2>
                        Protecting what matters the most
                      </h2>
                      <p>
                        Taut Secure is a security system company that specializes in providing a range of security
                        products and services to protect individuals and organizations from various security threats.
                      </p>
                      <div class="btn-box">
                        <a href="" class="btn-1">
                          Read More
                        </a>
                        <a href="" class="btn-2">
                          Get A Quote
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-7 offset-md-6 offset-md-5">
                    <div class="detail-box">
                      <h1>
                        TAUT SECURE
                      </h1>
                      <h2>
                        Protecting what matters the most
                      </h2>
                      <p>
                        We offer advanced security solutions, including surveillance cameras, access control systems,
                        Conference system burglar alarms, fire alarms, and monitoring services, among others
                      </p>
                      <div class="btn-box">
                        <a href="" class="btn-1">
                          Read More
                        </a>
                        <a href="" class="btn-2">
                          Get A Quote
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-7 offset-md-6 offset-md-5">
                    <div class="detail-box">
                      <h1>
                        TAUT SECURE
                      </h1>
                      <h2>
                        Protecting what matters the most
                      </h2>
                      <p>
                        We work closely with our clients to assess their security needs and design customized security
                        systems that fit their requirements and budget. With the increasing demand for advanced security
                        solutions, security system companies have become essential in safeguarding properties, assets,
                        and people from potential threats
                      </p>
                      <div class="btn-box">
                        <a href="" class="btn-1">
                          Read More
                        </a>
                        <a href="" class="btn-2">
                          Get A Quote
                        </a>
                      </div>
                    </div>
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
      <div class="heading_container">
        <h2>
          About Taut Secure
        </h2>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="images/taut_logo.png" alt="">
        </div>
        <div class="detail-box">
          <p>
            Taut Secure is a security system company that
            specializes in providing a range of security
            products and services to protect individuals and
            organizations from various security threats.

          </p>

          <a href="./about.php">
            Read More
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end about section -->

  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Services
        </h2>
      </div>
      <div class="service_container">
        <div class="box">
          <img src="./images/smart-class.jpeg" alt="">
          <h6 class="visible_heading">
            Smart Class System </h6>
          <div class="link_box">
            <h6>
              Smart Class System
            </h6>
          </div>
        </div>
        <div class="box">
          <img src="images/gps-tracking.jpeg" alt="">
          <h6 class="visible_heading">
            GPS Tracking System
          </h6>
          <div class="link_box">
            <h6>
              GPS Tracking System
            </h6>
          </div>
        </div>
        <div class="box">
          <img src="images/cctv.png" alt="">
          <h6 class="visible_heading">
            CCTV Services
          </h6>
          <div class="link_box">
            <h6>
              CCTV Services
            </h6>
          </div>
        </div>
        <div class="box">
          <img src="images/intrusion-alarm.jpeg" alt="">
          <h6 class="visible_heading">
            Intrusion Alarm System </h6>
          <div class="link_box">

            <h6>
              Intrusion Alarm System </h6>
          </div>
        </div>
        <div class="readmore-btn">
          <div style="height:20px"></div>

          <a href="./service.php">
            Load More
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- end service section -->


  <!-- Us section -->

  <section class="us_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          <!-- Why Choose Us -->
        </h2>
      </div>
      <div class="us_container">
        <div class="box">
          <div class="img-box">
            <img style="margin-top:-50px;" src="./images/vision.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Our Vision
            </h5>
            <p>
              To create a safer world by providing innovative and reliable security solutions that empower individuals
              and organizations to protect what matters most." </p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end us section -->


  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          What Says Our Customers
        </h2>
      </div>
      <div id="carouselExample2Indicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExample2Indicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="1"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="img-box">
                <img src="images/client.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Fahad muhammed, <br>
                  <div class=" address">
                    <p>
                      Kasaragod ( On Smart home automation for Residential projects)
                    </p>
                  </div>
                </h5>
                <p>
                  The service was outstanding, the products appeared to be well-made, and the installation was handled
                  by a competent and skilled expert. The installation itself was simple and did not obtrude on the
                  aesthetics. For your home, I whole heartedly suggest Taut Secure.
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="images/client.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Fairoz,
                  <div class="address">
                    <p>Bangalore (Aspirants Hub) </p>
                  </div>
                </h5>
                <p>
                  Taut secure exceeded my expectations with their services. Highly satisfied !

                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="images/client.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Bilal Ahmed,
                  <div class="address">
                    <p>
                      Bangalore (Study nest)
                    </p>
                  </div>
                </h5>
                <p>
                  Great feeling to have made the right choice selecting Taut Secure Security Professionals for security
                  system activated. I highly recommend.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- end client section -->

  <!-- result section -->

  <!-- <section class="result_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="images/result-img.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-4 col-md-5">
          <div class="detail-box">
            <h2>
              BUILT TO BRING <br>
              BEST RESULTS
            </h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
            </p>
            <a href="">
              Get A Quote
            </a>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- end result section -->


  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          <span>
            Get In Touch
          </span>
        </h2>
      </div>
      <div class="layout_padding2-top">
        <div class="row">
          <div class="col-md-6 ">
            <form action="">
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" placeholder="Name" />
                  </div>
                  <div>
                    <input type="email" placeholder="Email" />
                  </div>
                  <div>
                    <input type="text" placeholder="Phone Number" />
                  </div>
                  <div class="mt-5">
                    <input type="text" placeholder="Message" />
                  </div>
                  <div class="mt-5">
                    <button type="submit">
                      Send
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6">
            <div class="map_container">
              <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124103.17331323466!2d74.8531526!3d12.9107676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba35a4c37bf488f%3A0x827bbc7a74fcfe64!2sMangaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1623168891846!5m2!1sen!2sin" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->
  <?php include 'footer.php'; ?>




  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document
        .querySelector(".custom_menu-btn")
        .classList.toggle("menu_btn-style");
    }
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var carousel = document.querySelector("#carouselExampleIndicators");

      var carouselOptions = {
        interval: 3000,
        pause: "hover"
      };

      var carouselInstance = new bootstrap.Carousel(carousel, carouselOptions);
    });
  </script>

</body>

</html>