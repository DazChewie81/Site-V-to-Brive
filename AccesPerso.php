<?php
    require('config.php');
    session_start();

    if(!isset($_COOKIE['token'])){
        $str = rand(); 
        $token = hash("sha256", $str);

        if (isset($_POST['email'])){
            $results["error"] = false;
            if(!empty($_POST['email']) && !empty($_POST['password'])){
                $email = $_POST['email'];
                $password = $_POST['password'];
                $token = $_POST['token'];
            
                $sql = $db->prepare("SELECT * FROM personnel WHERE email = :email"); 
                $sql->execute([":email" => $email]);
                $row = $sql->fetch(PDO::FETCH_OBJ);
                if($row){
                    if(password_verify($password, $row->password)){
                        $sql = $db->prepare("UPDATE `personnel` SET `token` = '$token' WHERE `personnel`.`email` = '$email'");
                        $sql->execute();
                        setcookie('token',$token, 0);
                        header('Location: /personnel/panel.php');
                        exit();
                    if(!$sql){
                        $results['error'] = true;
                        $message = "Erreur lors de la connexion";
                    }
                    }else{
                        $results['error'] = true;
                        $message = "Pseudo ou mot de passe incorrect";
                    }
                    }else{
                        $results['error'] = true;
                        $message = "Pseudo ou mot de passe incorrect";
                    }
            }else{
                $results['error'] = true;
                $message = "Veuillez remplir tous les champs";
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
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=fd9a0e90061715edf244bacb378754db">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css?h=ab2d1eb0d8e707ab1d9c2a8d94851c0a">
</head>

<body>
    <header style="width: center;height: center;margin: center;margin-top: center;margin-right: center;margin-bottom: center;margin-left: center;padding: center;padding-top: center;padding-right: center;padding-bottom: center;padding-left: center;min-width: center;max-width: center;min-height: center;">
        <nav class="navbar navbar-dark navbar-expand-xl fixed-top" id="mainNav" style="background: #568259;height: 77px;">
            <div class="container" style="height: 100px"><img style="border-radius: 58px;height: 50px;width: 50px;background: url(&quot;assets/img/logo.png?h=3d38e577b53e6c4b396ee92d12eeb8ba&quot;);margin: -340px;"><a class="navbar-brand" href="index.php#page-top" style="height: 50px;width: 408px;margin: 363px;font-family: Montserrat, sans-serif;color: #fec503;">Les Vétérinaires de Brive-la-Gaillarde</a>
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
    <!-- Start: Login Form Clean -->
    <div class="login-clean" style="margin-top: 17px;">
        <form method="post" action="#">
            <h2 class="sr-only">Login Form<textarea class="form-control"></textarea></h2>
            <div class="illustration"><img src="assets/img/dog_1f415.png?h=d815286833dd1c8086e689e961114ce8"><img src="assets/img/cat_1f408.png?h=b8f55d829e342e0e62c047db287785d9"></div>
            <div class="form-group"><input name="email" class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><input name="password" class="form-control" type="password" name="password" placeholder="Mot de passe"></div>
            <input type="hidden" name="token" value="<?php echo $token ?>"/>
            <?php if (! empty($message)) { ?>
              <p class="errorMessage"><?php echo $message; ?></p>
            <?php } ?>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Connexion</button></div>
            <div class="form-group"><button class="btn btn-primary" type="button" style="background: rgb(244,206,71);margin-left: 21%;">S'enregistrer</button></div>
        </form>
    </div>
    <!-- End: Login Form Clean -->
    <footer style="margin-left: center;height: 180px;width: center;margin-top: 17px;">
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
<?php
}else{
    $token = $_COOKIE["token"];
    $requete = $db->prepare("SELECT id FROM personnel WHERE token = :token");
    $requete->execute([':token' => $token]);
    $row = $requete->fetch();
    
    // Est-ce qu'on a le bon token ?
    if($row){
        // Quand on est log
        header('Location: /personnel/panel.php');
        ?>
        
    <?php
    }else{
        // Si on a un token invalide
        setcookie('token',$token,time()+(-3600 * 30));
        header('Location: AccesPerso.php');
    }
}
?>