<?php
    require("config.php");
    if (isset($_POST['message'])){
        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['tel']) && !empty($_POST['message'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $tel = $_POST['tel'];
            $message = $_POST['message'];
            $sql = $db->prepare("INSERT INTO contact_form(name, email, tel, message) VALUES(:name, :email, :tel, :message)");
            $sql->execute([":name" => $name ,":email" => $email, ":tel" => $tel, ":message" => $message]);
            echo "<script> alert('Votre message a été envoyé merci.') </script>";
            if(!$sql){
                echo "<script> alert('Erreur lors de l'envoi du message.') </script>";
            }
        }else{
            echo "<script> alert('Veuillez remplir tous les champs.') </script>";
        }
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Clinique Vétérinaire de Brive-la-Gaillarde</title>
    <meta name="description" content="Voici le site Internet de la Clinique Vétérinaire de Brive-la-Gaillarde.">
    <link rel="icon" type="image/png" sizes="128x128" href="assets/img/Docteur%20Michelline%20DUBOIS.png?h=1984bf406f1c5a61acab18e44351c9a5">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=fd9a0e90061715edf244bacb378754db">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css?h=ab2d1eb0d8e707ab1d9c2a8d94851c0a">
</head>

<body id="page-top">
    <header class="text-center masthead" style="height: 638px;background: url(&quot;assets/img/veto_home.jpeg?h=b0eaf52b8b2b7609ececd188cc46b788&quot;) center / cover no-repeat;margin: center;border-width: 0px;text-align: center;width: center;padding: 9px;">
        <div class="container" style="text-align: center;padding: 24px;">
            <div class="intro-text" style="width: 1109px;height: 782px;">
                <div class="intro-lead-in" style="height: 57px;margin: 16px;"><span style="height: NaNpx;">Bienvenue sur le site&nbsp;</span></div><span style="font-size: 35px;height: NaNpx;"><em>des</em></span><span style="font-size: 48px;height: NaNpx;"><br>Vétérinaires de Brive-la-Gaillarde !<br><br></span></div>
        </div>
        <nav class="navbar navbar-dark navbar-expand-xl fixed-top" id="mainNav" style="background: #568259;height: 77px;">
            <div class="container"><img style="border-radius: 58px;height: 50px;width: 50px;background: url(&quot;assets/img/logo.png?h=3d38e577b53e6c4b396ee92d12eeb8ba&quot;);margin: -340px;"><a class="navbar-brand" href="index.php#page-top" style="height: 50px;width: 408px;margin: 363px;font-family: Montserrat, sans-serif;color: #fec503;">Les Vétérinaires de Brive-la-Gaillarde</a>
                <button
                    data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="nav navbar-nav ml-auto text-uppercase" style="margin: -389px;width: 720px;background: rgba(255,0,0,0);height: 50px;padding: -13px;">
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php#about">A PROPOS</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="horaires.html">HORAIRES et tarifs</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php#plan">PLAN</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php#contact">CONTACT</a></li>
                            <li class="nav-item"><a class="nav-link" href="AccesPerso.php#form">ACCÈS PERSONNEL<br></a></li>
                        </ul>
                    </div>
            </div>
        </nav>
    </header>
    <!-- Start: #about -->
    <section id="about" style="margin: -55px;width: auto;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading" style="width: auto;height: 45px;margin: -79px;">A PROPOS DE NOUS</h2>
                    <h3 class="text-muted section-subheading" style="margin: 154px;">Nous sommes un cabinet de trois vétérinaires diplomés.</h3>
                </div>
            </div>
            <div class="row text-center" style="margin: -18px;height: 387px;padding: -10px;margin-top: -93px;">
                <div class="col-md-4"><span class="fa-stack fa-4x"><img src="assets/img/Docteur%20Michelline%20DUBOIS.png?h=1984bf406f1c5a61acab18e44351c9a5" style="background: rgb(254,209,54);border-radius: 151px;padding: 0px;margin-bottom: 35px;margin-top: -13px;"></span>
                    <h4 class="section-heading">Docteur Michelline DUBOIS</h4>
                    <p class="text-muted">Diplômée de l'école vétérinaire de Toulouse . Est spécialisée dans la prise en charge de la cancérologie et à ce titre, elle est titulaire des DU : d'imagerie en oncologie, de radiobiologie en Radiothérapie, de carcinologie clinique
                        et de microchirurgie.<br></p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><img src="assets/img/Gab.png?h=8e7be18adc322bbafa4a70a977e5e778" style="background: rgb(254,209,54);border-radius: 151px;padding: 0px;margin-bottom: 35px;margin-top: -13px;"></span>
                    <h4 class="section-heading"><strong>Docteur Gabrielle CHENARD</strong><br></h4>
                    <p class="text-muted">Diplômée de l'Ecole Vétérinaire de Liège. Titulaire d'un DE d'ophtalmologie et d'un DU de microchirurgie.<br></p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><img src="assets/img/Carole.png?h=1404f23866f9aa2520f0ae24f3b0960b" style="background: rgb(254,209,54);border-radius: 151px;padding: 0px;margin-bottom: 35px;margin-top: -13px;"></span>
                    <h4 class="section-heading">Christabelle LARIVIÈRE</h4>
                    <p class="text-muted">Auxiliaire Spécialisée Vétérinaire<br></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End: #about -->
    <!-- Start: #plan -->
    <section id="plan" style="height: 633px;width: center;padding: 5px;margin: -141px;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-center" style="width: center;height: 63px;margin: 17px;">NOUS TROUVER</h1><iframe allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0U4TOAWYkWF0nn6MsOJMzyF1wtkQb8bw&amp;q=Clinique+V%C3%A9t%C3%A9rinaire+Voltaire&amp;zoom=11" width="100%" height="400"
                        style="text-align: center;"></iframe></div>
            </div>
        </div>
    </section>
    <!-- End: #plan -->
    <section id="contact" style="background-image: url('assets/img/map-image.png?h=dde716a63e31eca254a82a274d4f56c0');width: center;margin: -32px;margin-top: 42px;">
        <div class="container" style="width: center;height: center;margin: center;padding: center;">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Nous contacter</h2>
                    <h3 class="section-subheading text-muted">Remplissez ce formulaire, nous vous recontacterons.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="#" method="post" id="contactForm" name="contactForm" novalidate="novalidate">
                        <div class="form-row">
                            <div class="col col-md-6">
                                <div class="form-group"><input name="name" class="form-control" type="text" id="name" placeholder="Nom" required=""><small class="form-text text-danger flex-grow-1 help-block lead"></small></div>
                                <div class="form-group"><input name="email" class="form-control" type="email" id="email" placeholder="Adresse e-mail" required=""><small class="form-text text-danger help-block lead"></small></div>
                                <div class="form-group"><input name="tel" class="form-control" type="tel" placeholder="Numéro de téléphone" required=""><small class="form-text text-danger help-block lead"></small></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><textarea name="message" class="form-control" id="message" placeholder="Votre message" required=""></textarea><small class="form-text text-danger help-block lead"></small></div>
                            </div>
                            <div class="col">
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div><button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Envoi</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer style="margin-top: 42px;">
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