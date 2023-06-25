<?php
include './config.php';

$a = 4;

// Fetch data from the database
$sql = "SELECT  id, name, description, image FROM projects ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

// Check if any rows are returned
if (mysqli_num_rows($result) > 0) {
  $cards = ''; // Initialize the cards variable

  // Iterate through each row
  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $name = $row['name'];
    $description = $row['description'];
    $image = $row['image'];


    $card = '        <div class="box">
    <img src="admin/img/' . $image . '" alt="">
    <h6 class="visible_heading">
 '  . $name . '
    </h6>
    <div class="link_box">
    <a href="./oneProject.php?id=' . $id . '">

    <h6>
    '  . $name . '

    </h6>
  </a>

    </div>
  </div>';

    $cards .= $card;
  }
} else {
  $cards = 'No services found.';
}
mysqli_close($conn);
?>



<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

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
    .box {
      max-width: 350px;
      background: grey;

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


  </style>
</head>

<body class="sub_page">
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
    <section class="slider_section position-relative">
      <div class="container">
        <div class="custom_nav2">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex  flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav  ">
                  <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php">About </a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="service.php">Services </a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link " href="./projects.php">Projects </a>
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
    </section>
    <!-- end slider section -->
  </div>

  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Projects
        </h2>
      </div>
      <div class="service_container">
        <!-- <div class="box">
          <img src="images/s-1.jpg" alt="">
          <h6 class="visible_heading">
            CROSSFIT TRAINING
          </h6>
          <div class="link_box">
            <a >
              <img src="images/link.png" alt="">
            </a>
            <h6>
              CROSSFIT TRAINING

            </h6>
            <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem labore officia velit nostrum laudantium aperiam, aut ad numquam repudiandae nihil similique temporibus adipisci, sint nisi quaerat fugiat atque asperiores.</p>

          </div>
        </div> -->
        <?php echo $cards ?>


      </div>
    </div>
  </section>

  <!-- end service section -->


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
</body>

</html>