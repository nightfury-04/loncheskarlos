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
    $active = "about";
    include './components/navbar.php'
    ?>

    <!-- Header Start -->
    <?php
    $headerPage = "header-about";
    $title = "Nosotros";
    $subtitle = "Nosotros";
    $marginBottom = 0;
    include './components/header.php'
    ?>


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="section-title position-relative text-center mb-5">Los tradicionales lonches bañados desde 1980</h1>
                </div>
            </div>
            <div class="row" style="text-align: justify;">
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">Breve Historia</h4>
                    <h5 class="text-muted mb-3">
                        Lonches Karlo's inicio la gran aventura de ser una empresa líder en 1980.
                    </h5>
                    <p>
                        Desde esas fechas es que se funda nuestra tradición en ofrecer los más deliciosos y prestigiosos Lonches Bañados de todo el Occidente, Contando como estandarte nuestros Lonches Tradicionales.
                    </p>
                </div>
                <div class="col-lg-4" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/about/about(1).JPG" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-5">
                    <p>
                        Nuestro fundador proviene de una familia de restauranteros en la cual <span style="color: #473729; font-weight: bolder;">Karlo's</span> era el responsable de hacer la preparación y el ensamblado de los lonches. <br>
                        Un día <span style="color: #473729; font-weight: bolder;">Karlo's</span> toma la decisión de comenzar su propio negocio. <br>
                        Se establece con un carrito a fuera de su casa, el cual por motivos de ser un puesto ambulante se le es retirado el permiso, viéndose en esa situación toma la decisión de meter el carrito a su casa, haciendo con esto una forma de vida y de servicio.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid my-5 py-5 px-0">
        <div class="row bg-primary m-0">
            <div class="col-md-6 px-0" style="min-height: 500px">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="img/about/about(2).JPG" style="object-fit: cover" />
                </div>
            </div>
            <div class="col-md-6 py-5 py-md-0 px-0">
                <div class="h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <p style="color: white;">
                        Se establece con un carrito a fuera de su casa, el cual por motivos de ser un puesto ambulante se le es retirado el permiso,
                        viéndose en esa situación toma la decisión de meter el carrito a su casa, haciendo con esto <span style="color: #473729; font-weight: bold;"> forma de vida y de servicio. </span>
                    </p>

                    <h5 class=" mb-3" style="color: white;">
                        Es de esta forma que hacemos de nuestros clientes:
                    </h5>
                    <h4 class="font-weight-bold mb-3 text-center" style="color: #473729;">
                        <em>“Nuestros Invitados de honor”.</em>
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Mission and Vission Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">
                        Nuestra Misión y Visión
                    </h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6 pb-4">
                    <div class="team-item">
                        <div class="team-img mx-auto">
                            <img class="rounded-circle w-100 h-100" src="img/about/about(3).jpg" style="object-fit: cover;">
                        </div>
                        <div class="position-relative text-center rounded px-4 py-5" style="background-color: #473729; margin-top: -100px;">
                            <h3 class="font-weight-bold mt-5 mb-3 pt-5" style="color: white;">Misión</h3>
                            <div class="d-flex justify-content-center pt-1">
                                <p style="color: white;">
                                    Brindar una experiencia de sabor y tradición, en un excelente ambiente y servicio,
                                    con un resultado de calidad para inspirar gusto y alegría a nuestros invitados y colaboradores.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="team-item">
                        <div class="team-img mx-auto">
                            <img class="rounded-circle w-100 h-100" src="img/about/about(4).jpg" style="object-fit: cover;">
                        </div>
                        <div class="position-relative text-center rounded px-4 py-5" style="background-color: #473729; margin-top: -100px;">
                            <h3 class="font-weight-bold mt-5 mb-3 pt-5" style="color: white;">Visión</h3>
                            <div class="d-flex justify-content-center pt-1">
                                <p style="color: white;">
                                    Ser un equipo innovador con rumbo a la expansión, distinguiendo a la empresa por ser auto sustentable
                                    generadora de rentabilidad, motivación, crecimiento y trato humano.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mission and Vission End -->


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