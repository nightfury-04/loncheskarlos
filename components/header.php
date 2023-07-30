<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Lonches Karlo's</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="Free HTML Templates" name="keywords" />
  <meta content="Free HTML Templates" name="description" />

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
  <?php
      if (!isset($marginBottom)) {
          $marginBottom = 90;
      }
  ?>
  <div class="jumbotron jumbotron-fluid <?php echo $headerPage; ?>" style="margin-bottom: <?php echo $marginBottom; ?>px;">
    <div class="container text-center py-5">
      <h1 class="text-white display-3 mt-lg-5"><?php echo $title; ?></h1>
      <div class="d-inline-flex align-items-center text-white">
        <p class="m-0"><a class="text-white" href="">Inicio</a></p>
        <i class="fa fa-circle px-3"></i>
        <p class="m-0"><?php echo $subtitle; ?></p>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>