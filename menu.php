<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lonches Karlo's</title>
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
</head>

<body>
    <!-- Top and navbar -->
    <?php
    $active = "menu";
    include './components/navbar.php'
    ?>

    <!-- Header Start -->
    <?php
    $headerPage = "header-menu";
    $title = "Menú";
    $subtitle = "Menú";
    $marginBottom = 0;
    include './components/header.php'
    ?>

    <div class="extra container text-center col-12 py-5">
        <div class="row">
            <div class="col-12">
                <h2 style="color: white;">¡NUESTRA SALSA KARLO'S ES ILIMITADA CON CADA PLATILLO QUE SE CONSUMA EN EL COMEDOR!</h2>
            </div>
        </div>
    </div>

    <!-- Portfolio Start -->
    <div class="container-fluid py-5 px-0">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <h1 class="section-title position-relative text-center mb-5">Los lonches con más tradición tapatía</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-4 pb-2" id="portfolio-flters">
                        <li class="btn btn-sm btn-outline-primary m-1 active" data-filter="*">Todo</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".lunch">Lonches</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".other">Otros</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".drink">Bebidas</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".dessert">Postres</li>
                    </ul>
                </div>
            </div>

            <?php
            include './components/menuSections.php'
            ?>
        </div>
    </div>
    <!-- Portfolio End -->

    <div class="circle-extra">
        <h2 style="color: white;">$25</h2>
    </div>
    <div class="extra container text-center col-12 py-2">
        <div class="row">
            <div class="col-12">
                <h2 style="color: white;">Extras</h2>
            </div>
        </div>
        <div class="row">
            <div class="col" style="border-right: 2px solid #fff;">
                <h3 style="color: white;">Aguacate</h3>
            </div>
            <div class="col" style="border-right: 2px solid #fff;">
                <h3 style="color: white;">Panela</h3>
            </div>
            <div class="col" style="border-right: 2px solid #fff;">
                <h3 style="color: white;">Tocino</h3>
            </div>
            <div class="col">
                <h3 style="color: white;">Queso</h3>
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