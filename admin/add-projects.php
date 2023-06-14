<?php
$a=61;
error_reporting(E_ALL);
ini_set('display_errors', 1);
require '../config.php';

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $description = $_POST['description'];

    if ($_FILES["img"]["error"] == 4) {
        echo "<script> alert('Image Does Not Exist'); </script>";
    } else {
        $fileName = $_FILES["img"]["name"];
        $fileSize = $_FILES["img"]["size"];
        $tmpName = $_FILES["img"]["tmp_name"];

        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));

        if (!in_array($imageExtension, $validImageExtension)) {
            echo "<script>alert('Invalid Image Extension');</script>";
        } else if ($fileSize > 1000000) {
            echo "<script>alert('Image Size Is Too Large');</script>";
        } else {
            $newImageName = uniqid();
            $newImageName .= '.' . $imageExtension;

            if (move_uploaded_file($tmpName, 'img/' . $newImageName)) {
                $stmt = mysqli_prepare($conn, "INSERT INTO projects (name, description, image) VALUES (?, ?, ?)");
                mysqli_stmt_bind_param($stmt, "sss", $name, $description, $newImageName);

                if (mysqli_stmt_execute($stmt)) {
                    echo "<script>
                        alert('Successfully Added');
                        window.location.href = 'view-projects.php';
                    </script>";
                } else {
                    echo "<script>alert('Failed to insert data into the database');</script>";
                }

                mysqli_stmt_close($stmt);
            } else {
                echo "<script>alert('Failed to move the uploaded file. Please check your file path and permissions.');</script>";
            }
        }
    }
  }

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
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <?php include"topbar.php"; ?>
  <?php include"sidebar.php"; ?>

  <div class="content-wrapper">
    <div class="container">
      <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Description</label>
          <textarea name="description" class="form-control" id="exampleInputPassword1" rows="10"></textarea>
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Image</label>
          <input name="img"  accept=".jpg, .jpeg, .png" value="" type="file" class="form-control" id="image" aria-describedby="emailHelp">
        </div>
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>


</div>
</body>
</html>
