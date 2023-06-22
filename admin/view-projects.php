<?php
include '../config.php';

$a = 62;

// Fetch data from the database
$sql = "SELECT id,  name, description, image FROM projects ORDER BY id DESC";
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

    // Concatenate the feature box with the fetched data
    $card = '
    <div class="col-sm-6 col-lg-4">
    <div class="delete">
    <a href="./delete.php?table=projects&id='.$id.'"><i class="fa fa-trash-o" style="font-size:28px;color:red"></i> </a>
    </div>
      <div class="feature-box-1">

      <div class="icon">
      <img src="./img/'.$image.'" alt="failed" >
  </div>
        <div class="feature-content">
          <h5>' . $name . '</h5>
          <p>' . $description . '</p>
        </div>
      </div>
    </div>';

    $cards .= $card; // Append the current card to the cards variable
  }
} else {
  $cards = 'No services found.'; // Display message if no services found
}

// Close the database connection
mysqli_close($conn);
?>




<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
}
.feature-box-1 * {
  -moz-transition: ease all 0.35s;
  -o-transition: ease all 0.35s;
  -webkit-transition: ease all 0.35s;
  transition: ease all 0.35s;
}
.feature-box-1 .icon {
  width: 70px;
  height: 70px;
  line-height: 70px;
  /* background: #fc5356; */
  color: #ffffff;
  text-align: center;
  border-radius: 50%;
  margin-bottom: 22px;
  font-size: 27px;
}
.feature-box-1 .icon img{
  height: 70px;
}
.feature-box-1 h5 {
  color: #20247b;
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
  background: #20247b;
  z-index: -1;
  -moz-transition: ease all 0.35s;
  -o-transition: ease all 0.35s;
  -webkit-transition: ease all 0.35s;
  transition: ease all 0.35s;
}
ture-box-1:hover:after {
  width: 100%;
  height: 100%;
  border-radius: 10px;
  left: 0;
  right: auto;
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
    color: #20247b;
    font-size: 45px;
    margin: 0 0 15px;
    border-left: 5px solid #fc5356;
    padding-left: 15px;
}
</style> 
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <?php include"topbar.php"; ?>
  <?php include"sidebar.php"; ?>


  <div class="content-wrapper">
    <section class="section services-section" id="services">
      <div class="container">
        <div class="row">
          <?php echo $cards; ?>
        </div>
      </div>
    </section>
  </div>

</div>
</body>
</html>
