<?php
include './config.php';

$a = 4;
$id = $_GET['id'];

// Fetch data from the database
$sql = "SELECT name, description, image FROM projects WHERE id = '$id'";
$result = mysqli_query($conn, $sql);

// Check if any rows are returned
if (mysqli_num_rows($result) > 0) {
  $cards = ''; // Initialize the cards variable

  // Iterate through each row
  while ($row = mysqli_fetch_assoc($result)) {
    $name = $row['name'];
    $description = $row['description'];
    $image = $row['image'];

    // Concatenate the feature box with the fetched data
    $card = '
    <div class="col-sm-6 col-lg-4">
      <div class="feature-box-1">
      <div class="icon">
      <img src="./admin/img/' . $image . '" alt="failed" >
  </div>
        <div class="feature-content">
          <h5>'  . $name . '</h5>
          <p> ' . $description . '</p>
        </div>
      </div>
    </div>';

    $cards .= $card; // Append the current card to the cards variable
  }
} else {
  $cards = 'No Projects found.'; // Display message if no services found
}

// Close the database connection
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
    /* Feature Box
---------------------*/
    .feature-box-1 {
      padding: 32px;
      box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
      margin: 15px 0;
      position: relative;
      z-index: 1;
      border-radius: 10px;
      overflow: hidden;
      -moz-transition: ease all 0.35s;
      -o-transition: ease all 0.35s;
      -webkit-transition: ease all 0.35s;
      transition: ease all 0.35s;
      top: 0;
      width: 70vw;
      text-align: center;
      margin-left: 50px;


    }

    .feature-box-1 * {
      -moz-transition: ease all 0.35s;
      -o-transition: ease all 0.35s;
      -webkit-transition: ease all 0.35s;
      transition: ease all 0.35s;
    }

    .feature-box-1 .icon {
      line-height: 70px;
      /* background: #fc5356; */
      color: #ffffff;
      text-align: center;
      border-radius: 50%;
      margin-bottom: 22px;
      font-size: 27px;
    }

    .feature-box-1 .icon img {
      height: 350px;
    }

    .feature-box-1 h5 {
      color: red;
      font-weight: 600;
    }

    .feature-box-1 p {
      margin: 0;
    }

    .feature-box-1:after {
      content: "";
      position: absolute;
      top: 0;
      bottom: 0;
      left: auto;
      right: 0;
      border-radius: 10px;
      width: 0;
      background: red;
      z-index: -1;
      -moz-transition: ease all 0.35s;
      -o-transition: ease all 0.35s;
      -webkit-transition: ease all 0.35s;
      transition: ease all 0.35s;
    }

    .section {
      padding: 100px 0;
      position: relative;
    }

    .section-title {
      padding-bottom: 45px;
    }

    .section-title h2 {
      font-weight: 700;
      color: red;
      font-size: 45px;
      margin: 0 0 15px;
      border-left: 5px solid #fc5356;
      padding-left: 15px;
    }
  </style>
  <link rel="icon" type="image/png" href="./images/iconico.ico">

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
                  <span>demo@gmail.com</span>
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
                    <a class="nav-link" href="./service.php">Services </a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link " href="">Projects </a>
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
      <?php echo $cards ?>
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