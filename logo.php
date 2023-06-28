<!DOCTYPE html>
<html>
<head>
  <style>
    .card-container {
      display: flex;
      overflow-x: auto;
      scroll-behavior: smooth;
      animation: scrollCards 20s linear infinite;
    }

    .card {
      flex: 0 0 300px;
      margin: 10px;
      padding: 10px;
      background-color: #f0f0f0;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    }

    .card-title {
      font-weight: bold;
      margin-bottom: 10px;
    }

    .card-image {
      max-width: 100%;
      height: auto;
    }

    @keyframes scrollCards {
      0% {
        transform: translateX(0);
      }
      100% {
        transform: translateX(-100%);
      }
    }
  </style>
</head>
<body>
  <div class="card-container">
    <div class="card">
      <h2 class="card-title">Card 1</h2>
      <img class="card-image" src="image1.jpg" alt="Image 1">
    </div>
    <div class="card">
      <h2 class="card-title">Card 2</h2>
      <img class="card-image" src="image2.jpg" alt="Image 2">
    </div>
    <div class="card">
      <h2 class="card-title">Card 3</h2>
      <img class="card-image" src="image3.jpg" alt="Image 3">
    </div>
    <div class="card">
      <h2 class="card-title">Card 4</h2>
      <img class="card-image" src="image4.jpg" alt="Image 4">
    </div>
  </div>
</body>
</html>
