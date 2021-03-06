<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car Tech - About US</title>
    <!-- my css files -->    
    <link rel="icon" href="../imgs/icon.png" type="image/icon type">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/about.css" />
</head>
<body>
    <?php include('../header.php'); ?>
    <?php include('../Config.php'); ?>

    <div class="about-us row">
        <div class="container">
            <div class="left-side">
                <h2 class="aboutH2">About us</h2>
            </div>
            <div class="right-side col-12">
                <p>
                    Our expertise with various vehicles, automotive technologies is as diverse as the people .
                    We believe in the power of ordinary people to do extra ordinary things.
                    We employ our collective potential to vastly improve your automotive service experience.
                    We all have one thing in common .. Passion for the automobile.
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 class="h2_team">
            - Our Team
        </h2>
    </div>
    <div class="container">
    <div class="row">
        
        <div class="our-team">
            <div class="picture">
            <img class="img-fluid" src="../imgs/ali_K.jpg">
            </div>
            <div class="team-content">
            <h4 class="name">Ali khaled</h4>
            <h5 class="title">Web Developer</h5>
            </div>
            <ul class="social">
            <li><a target="_blank" href="https://github.com/alikhaled17" class="fa fa-github" aria-hidden="true"></a></li>
            <li><a target="_blank" href="https://www.linkedin.com/in/ali-khaled-7a4a981b4/" class="fa fa-linkedin" aria-hidden="true"></a></li>
            </ul>
        </div>
        <div class="our-team">
            <div class="picture">
            <img class="img-fluid" src="../imgs/mayar_a.jpg">
            </div>
            <div class="team-content">
            <h4 class="name">Mayar Araby</h4>
            <h5 class="title">Web Developer</h5>
            </div>
            <ul class="social">
            <li><a target="_blank" href="https://github.com/mayararaby" class="fa fa-github" aria-hidden="true"></a></li>
            <li><a target="_blank" href="https://www.linkedin.com/in/mayar-araby-20b671127/" class="fa fa-linkedin" aria-hidden="true"></a></li>
            </ul>
        </div>
        <div class="our-team">
            <div class="picture">
            <img class="img-fluid" src="../imgs/mahmoud_Y.jpg">
            </div>
            <div class="team-content">
            <h4 class="name">Mahmoud Elsharawy</h4>
            <h5 class="title">Web Developer</h5>
            </div>
            <ul class="social">
            <li><a target="_blank" href="https://github.com/MahmoudElsh3rawy" class="fa fa-github" aria-hidden="true"></a></li>
            <li><a target="_blank" href="https://www.linkedin.com/in/mahmoud-elsharawy-266aa4136/" class="fa fa-linkedin" aria-hidden="true"></a></li>
            </ul>
        </div>
        <div class="our-team">
            <div class="picture">
            <img class="img-fluid" src="../imgs/ahmed_T.jpg">
            </div>
            <div class="team-content">
            <h4 class="name">Ahmd Turky</h4>
            <h5 class="title">Web Developer</h5>
            </div>
            <ul class="social">
            <li><a target="_blank" href="https://github.com/AhmedTurkiii" class="fa fa-github" aria-hidden="true"></a></li>
            <li><a target="_blank" href="https://www.linkedin.com/in/ahmed-turki-6a8062120/" class="fa fa-linkedin" aria-hidden="true"></a></li>
            </ul>
        </div>
        <div class="our-team">
            <div class="picture">
            <img class="img-fluid" src="../imgs/sally_E.jpg">
            </div>
            <div class="team-content">
            <h4 class="name">Sally Eissawy</h4>
            <h5 class="title">Web Developer</h5>
            </div>
            <ul class="social">
            <li><a target="_blank" href="https://github.com/sallyElsayedShehataa" class="fa fa-github" aria-hidden="true"></a></li>
            <!-- <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li> -->
            <li><a target="_blank" href="https://www.linkedin.com/in/sally-eissawy-5677b3201/" class="fa fa-linkedin" aria-hidden="true"></a></li>
            </ul>
        </div>
       
    </div>
    </div>
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-7a51d1c1-99a2-4f97-8985-675fe7f9c7e4"></div>
    <?php include('../footer.php'); ?>

    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script>new WOW().init();</script>  
    <script src="../js/script.js"></script>
</body>

</html>