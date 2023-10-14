
<?php
//include_once '../connexion.php';

session_start();

// Check if the session variables are set
if (isset($_SESSION['firstName']) && isset($_SESSION['lastName'])&& isset($_SESSION['cin'])) {
    $firstName = $_SESSION['firstName'];
    $lastName = $_SESSION['lastName'];
   $cin = $_SESSION['cin'];

    echo "Bienvenue, $firstName                      $lastName          cin:$cin!";
} else {
    echo "Bienvenue, utilisateur inconnu !";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Page d'acceuil</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body pr-3" href=""><i class="fa fa-phone-alt mr-2"></i> +216.72.235.006</a>
                    <span class="text-body">|</span>
                    <a class="text-body px-3" href=""><i class="fa fa-envelope mr-2"></i> contact@labomedis.com</a>
                    
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body px-3" href="https://www.facebook.com/medis.com.tn/">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-body px-3" href="https://www.linkedin.com/company/medis-tunisie/">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-body px-3" href="https://www.instagram.com/labomedis/">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-body pl-3" href="https://www.youtube.com/@medispharmaceuticals1028">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>

            
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <img  src="medis_logo.png" alt="">
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="acceuil.html" class="nav-link active ">Acceuil</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle " data-toggle="dropdown">
                                Filiales</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="acceuil.html" class="dropdown-item info"> Neapolis</a>
                                <a href="acceuil.html" class="dropdown-item info">Medis sénégal</a>
                                <a href="acceuil.html" class="dropdown-item info"> MédiS international</a>
                                <a href="acceuil.html" class="dropdown-item info">  Inphamédis</a>
                            </div>
                        </div>
                        <a href="../Enregistrement des demandes/connexion.php" class="nav-link">Enregister</a>
                        <a href="../Rechercher les demandes/connexion.html" class="nav-item nav-link">Rechercher</a>
                        <a href="../consultation des demandes/Consultation des demandes.php" class="nav-item nav-link">Consulter</a>
                       





                       
                        <a href="../page d'acceuil/acceuil.html" class="nav-link">Déconnexion</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


   


    <!-- Page Header Start -->
    <div class="container-fluid p-0" style="margin-bottom: 90px;">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpeg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Science & innovation</h4>
                            <h1 class="display-1 text-white mb-md-4">Efficacité numérique pour une gestion sans effort</h1>
                            <a href="" class="btn btn-info py-md-3 px-md-5 mt-2">acceuil</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Science & innovation</h4>
                            <h1 class="display-1 text-white mb-md-4"> découvrez la transformation numérique</h1>
                            <a href="" class="btn btn-info py-md-3 px-md-5 mt-2">acceuil</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    
    <!-- Page Header Start -->

 <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
           <!-- <h1 class="display-1 text-primary text-center">01</h1>  -->
            <h1 class="display-4 text-uppercase text-center mb-5">Laboratoire MédiS </h1>
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <img class="w-75 mb-4 taille-moyenne" src="medis_logo.png" alt="">
                    <p>Bienvenue sur la page d'accueil de Bureau d'Ordre Informatisé ! Nous sommes ravis de vous accueillir dans l'univers de la gestion moderne et efficace de vos flux de documents. Notre plateforme innovante vous offre une solution numérique complète pour la réception et le suivi de vos courriers. Simplifiez vos processus administratifs, gagnez du temps précieux et contribuez à un environnement de travail plus durable en adoptant notre système convivial et sécurisé. Explorez nos fonctionnalités, découvrez les avantages du numérique et joignez-vous à nous dans cette transformation vers un bureau sans papier, plus intelligent et plus connecté. Votre efficacité commence ici, sur notre page d'accueil.</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-secondary    ml-n4 mr-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-2x fa-globe text-light"></i>
                        </div>
                        <h4 class="text-uppercase m-0">Site web : www.medis.com.tn</h4>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-secondary p-4 mb-4" style="height: 150px;">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-light ml-n4 mr-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-2x fa-envelope text-secondary"></i>
                        </div>
                        <h4 class="text-light text-uppercase m-0">contact@labomedis </br>.com </h4>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-secondary ml-n4 mr-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-2x fa-map-marker-alt text-light"></i>
                        </div>
                        <h4 class="text-uppercase m-0"> Route de Tunis Km 7 - BP 206 Nabeul 8000 - Tunisie.</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
