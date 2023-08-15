<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Lonches Karlo's | Página Web Oficial</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Free HTML Templates" name="keywords">
  <meta content="Free HTML Templates" name="description">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Favicon -->
  <link rel="icon" href="./img/logoLK.png" />
</head>

<body>
  <!-- Top and navbar -->
  <?php
  $active = "branches";
  include './components/navbar.php'
  ?>

  <!-- Header Start -->
  <?php
  $headerPage = "header-branches";
  $title = "Sucursales";
  $subtitle = "Sucursales";
  $marginBottom = 0;
  include './components/header.php'
  ?>


  <div class="container-fluid py-5">
    <div class="container-fluid py-5">
      <div class="container py-5">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <h1 class="section-title position-relative text-center mb-5">
              Sucursales
            </h1>
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-12 col-lg-6 py-5">
            <h4 class="font-weight-bold mb-3 text-large">Chapalita</h4>
            <h5 class="text-muted mb-3 text-large">
              Av. Niño Obrero 1690-3, Chapalita Oriente, 45040 Zapopan, Jal.
            </h5>
            <p class="text-large">
              📱 33 36 47 24 50
              <br />
              ⏰ 1:00 pm a 11:00 pm
            </p>
            <a href="https://goo.gl/maps/4C95fHbzg9j76kLN6" target="_blank" class="btn btnLocation">
              ¿Cómo llegar?
            </a>
          </div>
          <div class="col-12 col-lg-6" style="min-height: 400px">
            <div class="position-relative h-100 rounded overflow-hidden">
              <img class="position-absolute w-100 h-100" src="img/branches/branchChapalita.jpg" style="object-fit: cover" />
            </div>
          </div>
        </div>

        <div class="section-title position-relative text-center pb-5"></div>

        <div class="row mb-5">
          <div class="col-12 col-lg-6 py-5">
            <h4 class="font-weight-bold mb-3 text-large">Valle Real</h4>
            <h5 class="text-muted mb-3 text-large">
              Av. Sta. Margarita 4140-Local 9, Jardín Real, 45136 Zapopan, Jal.
            </h5>
            <p class="text-large">
              📱 33 33 64 46 00
              <br />
              ⏰ 2:00 pm a 10:00 pm
            </p>
            <a href="https://goo.gl/maps/TJsEYhFQRbj3QRdR9" target="_blank" class="btn btnLocation">
              ¿Cómo llegar?
            </a>
          </div>
          <div class="col-12 col-lg-6" style="min-height: 400px">
            <div class="position-relative h-100 rounded overflow-hidden">
              <img class="position-absolute w-100 h-100" src="img/branches/branchValleReal.jpg" style="object-fit: cover" />
            </div>
          </div>
        </div>

        <div class="section-title position-relative text-center pb-5"></div>

        <div class="row mb-5">
          <div class="col-12 col-lg-6 py-5">
            <h4 class="font-weight-bold mb-3 text-large">Providencia</h4>
            <h5 class="text-muted mb-3 text-large">
              Av. Rubén Darío 1549, Providencia, 44630 Guadalajara, Jal.
            </h5>
            <p class="text-large">
              📱 33 38 17 23 40
              <br />
              ⏰ 9:00 am a 11:00 pm
            </p>
            <a href="https://goo.gl/maps/yXWhNCBkQaNRJkho9" target="_blank" class="btn btnLocation">
              ¿Cómo llegar?
            </a>
          </div>
          <div class="col-12 col-lg-6" style="min-height: 400px">
            <div class="position-relative h-100 rounded overflow-hidden">
              <img class="position-absolute w-100 h-100" src="img/branches/branchProvidencia.jpg" style="object-fit: cover" />
            </div>
          </div>
        </div>

        <div class="section-title position-relative text-center pb-5"></div>

        <div class="row mb-5">
          <div class="col-12 col-lg-6 py-5">
            <h4 class="font-weight-bold mb-3 text-large">Bugambilias</h4>
            <h5 class="text-muted mb-3 text-large">
              Blvd. Bugambilias 2299, Bugambilias, 45237 Zapopan, Jal.
            </h5>
            <p class="text-large">
              📱 33 12 57 05 90
              <br />
              ⏰ 10:00 am a 11:00 pm
            </p>
            <a href="https://goo.gl/maps/b7mkYAP1mvuVitps9" target="_blank" class="btn btnLocation">
              ¿Cómo llegar?
            </a>
          </div>
          <div class="col-12 col-lg-6" style="min-height: 400px">
            <div class="position-relative h-100 rounded overflow-hidden">
              <img class="position-absolute w-100 h-100" src="img/branches/branchBugambilias.jpg" style="object-fit: cover" />
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


  <!-- Footer Start -->
  <?php
  include './components/footer.php'
  ?>
  <!-- Footer End -->


  <!-- Back to Top -->
  <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>


  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>

  <!-- Contact Javascript File -->
  <script src="mail/jqBootstrapValidation.min.js"></script>
  <script src="mail/contact.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>