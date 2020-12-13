<?php
    require('config.php');

    if (isset($_POST['nom'])){
        if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['tel']) && !empty($_POST['adresse']) && !empty($_POST['complement']) && !empty($_POST['cp']) && !empty($_POST['ville']) && !empty($_POST['email']) && !empty($_POST['animaux'])){
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $tel = $_POST['tel'];
            $adresse = $_POST['adresse'];
            $complement = $_POST['complement'];
            $cp = $_POST['cp'];
            $ville = $_POST['ville'];
            $email = $_POST['email'];
            $animaux = $_POST['animaux'];

            //Insertion
            $sql = $db->prepare("INSERT INTO client(nom, prenom, tel, adresse, complement, cp, ville, email, animaux) VALUES(:nom, :prenom, :tel, :adresse, :complement, :cp, :ville, :email, :animaux)");
            $sql->execute([":nom" => $nom, ":prenom" => $prenom, ":tel" => $tel, ":adresse" => $adresse, ":complement" => $complement, ":cp" => $cp, ":ville" => $ville, ":email" => $email, ":animaux" => $animaux]);
            if($sql){
                echo "<script> alert('Inscription réussie'); </script>";
            }

            if(!$sql){
                echo "<script> alert('Erreur lors de l'inscription'); </script>";
            }
        }else{
            echo "<script> alert('Veuillez remplir tous les champs'); </script>";
        }
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Site Cabinet Veterinaire</title>
    <link rel="icon" type="image/png" sizes="128x128" href="assets/img/Docteur%20Michelline%20DUBOIS.png?h=1984bf406f1c5a61acab18e44351c9a5">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=dae1c8a3af6f73b03103550b2899dbd9">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css?h=e4728855996b3b316e54ffc9bce9fb0f">
</head>

<body class="mt-4">
    <header style="width: center;height: center;margin: center;margin-top: center;margin-right: center;margin-bottom: center;margin-left: center;padding: center;padding-top: center;padding-right: center;padding-bottom: center;padding-left: center;min-width: center;max-width: center;min-height: center;">
        <nav class="navbar navbar-dark navbar-expand-xl fixed-top" id="mainNav" style="background: #568259;height: 77px;">
            <div class="container"><img style="border-radius: 58px;height: 50px;width: 50px;background: url(&quot;assets/img/logo.png?h=3d38e577b53e6c4b396ee92d12eeb8ba&quot;);margin: -340px;"><a class="navbar-brand" href="index.html#page-top" style="height: 50px;width: 408px;margin: 363px;font-family: Montserrat, sans-serif;color: #fec503;">Les Vétérinaires de Brive-la-Gaillarde</a>
                <button
                    data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="nav navbar-nav ml-auto text-uppercase" style="margin: -389px;width: 720px;background: rgba(255,0,0,0);height: 50px;padding: -13px;">
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.html#about">A PROPOS</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="horaires.html">HORAIRES et tarifs</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.html#plan">PLAN</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.html#contact">CONTACT</a></li>
                            <li class="nav-item"><a class="nav-link" href="AccesPerso.html#form">ACCÈS PERSONNEL<br></a></li>
                        </ul>
                    </div>
            </div>
        </nav>
    </header>
    <!-- Start: Registration Form with Photo -->
    <div id="form" class="register-photo">
        <!-- Start: Form Container -->
        <div class="text-capitalize form-container" style="padding-top: 9px;padding-right: 0px;">
            <!-- Start: Image -->
            <div class="image-holder" style="background: url(&quot;assets/img/OIP.jpeg?h=7788efb1f15dd3d43812987dacdc5df7&quot;) center / contain no-repeat, rgba(21,9,9,0);border-style: none;"></div>
            <!-- End: Image -->
            <form method="post" action="">
                <h2 class="text-center">Formulaire d'enregistrement des clients</h2>
                <div class="form-group"><input class="form-control" type="text" id="nom" name="nom" placeholder="Nom"></div>
                <div class="form-group"><input class="form-control" type="text" id="prenom" name="prenom" placeholder="Prénom"></div>
                <div class="form-group"><input class="form-control" type="tel" id="tel" name="tel" placeholder="Numéro de téléphone" required=""></div>
                <div class="form-group"><input class="form-control" type="text" id="adresse" name="adresse" placeholder="Adresse"><input class="form-control" type="text" id="complement" name="complement" placeholder="Complément d'adresse"><input class="form-control" type="text" id="cp" name="cp" placeholder="Code postal">
                    <input class="form-control" type="text" id="ville" name="ville" placeholder="Ville"></div>
                <div class="form-group"><input class="form-control" type="email" id="email" name="email" placeholder="Email"></div>
                <div class="form-group"><input class="form-control" type="text" id="animaux" name="animaux" placeholder="Animaux pris en charge"></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Enregistrer</button></div>
            </form>
        </div>
        <!-- End: Form Container -->
    </div>
    <!-- End: Registration Form with Photo -->
    <footer style="margin-top: 42px;width: 1908px;padding-top: -12px;padding-bottom: 17px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4"><span class="copyright">Copyright&nbsp;© Marius Info 2020</span></div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/script.min.js?h=99e4877f501cd30e2301247e12adfe46"></script>
</body>

</html>