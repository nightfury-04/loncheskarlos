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
    $active = "contact";
    include './components/navbar.php'
    ?>


    <!-- Header Start -->
    <?php
    $headerPage = "header-contact";
    $title = "Contacto";
    $subtitle = "Contacto";
    $marginBottom = 0;
    include './components/header.php'
    ?>


    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Visita nuestras redes sociales</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="contact-form bg-light rounded p-5">
                        <div class="row">
                            <div class="col-12 col-lg-6 text-center mb-3">
                                <i class="fab fa-facebook fa-5x mb-2 text-primary"></i>
                                <a href="https://www.facebook.com/loncheskarlosgdl" target="_blank" class="d-block font-weight-bold m-0">Lonches Karlo's</a>
                            </div>
                            <div class="col-12 col-lg-6 text-center">
                                <i class="fab fa-instagram fa-5x mb-2 text-primary"></i>
                                <a href="https://www.instagram.com/loncheskarlos" target="_blank" class="d-block font-weight-bold m-0">@loncheskarlos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">También nos puedes encontrar en:</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="contact-form bg-light rounded p-5">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-6 mb-3">
                                <img src="./img/contact/uberEats.png" alt="logoUberEats" style="width: 55%;" />
                            </div>
                            <div class="col-12 col-lg-6">
                                <img src="./img/contact/rappi.png" alt="logoRappi" style="height: 60%;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Sucursal Matriz</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-auto">
                    <div class="contact-form bg-light rounded p-5">
                        <div class="col-12 py-5 text-center">
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
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <?php
    include './components/footer.php'
    ?>

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