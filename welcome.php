<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOURAN</title>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>

<body>
<?php 

session_start();


?>

    <nav>
        <a href="index.html"><label class="logo">NOURAN</label></a>
        <ul>
            <li><a class="active" href="index.html">Acceuil</a></li>
            <li><a href="vente.html">Vente</a></li>
            <li><a href="location.html">Location</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="index.php">Connexion</a></li>
           <li><a href="annonce.html">deposer une annonce</a></li>


        </ul>
    </nav>
     <?php echo "<h1> Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>
    <div class="cover">
    
        <div class="home">
        
            <h1>Emménagez en 1, 2, 3 !</h1>
            <p>Tout l'immobilier en Tunisie en vente ou location!</p>
            <button class="button btn btn-primary"> <a onclick="  x=prompt('donner votre nom') ; alert('Nous sommes à votre entière disposition pour tout renseignement complémentaire.'+x)"
                href="contact.html" href="contact.html"> <span style="color: white;"> Savoir
                        +</span></a></button>

        </div>
    </div>
    <div class="width">

    </div>
    <center class="d">
        <h4>42 885 biens immobiliers: trouvez l'appartement ou la maison de vos rêves, à vendre ou à louer!</h4>
    </center>

    <div class="carte ">
        <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 18rem">
            <img src="img/pexels-the-lazy-artist-gallery-1642125.jpg" class="card-img-top" width="426px" height="190px">
            <div class="card-body ">
                <center>
                <h5 class="card-title ">immobilier neuf </h5>
                <p class="card-text">immobilier neuf</p>
                <a href="index.html" class="btn btn-dark">En savoir +</a>
                </center>
            </div>
        </div>
        <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 18rem;">
            <img src="img/pexels-photomix-company-101808.jpg" class="card-img-top">
            <div class="card-body">
                <center>
                <h5 class="card-title">Location</h5>
                <p class="card-text">Immobilier à louer en Tunisie</p>
                <a href="location.html" class="btn btn-dark">En savoir +</a>
                </center>
            </div>
        </div>
        <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 18rem; ">
            <img src="img/pexels-alena-darmel-7642000.jpg" class="card-img-top">
            <div class="card-body">
                <center>
                <h5 class="card-title">Vente</h5>
                <p class="card-text">Appartement à vendre en Tunisie</p>
                <a href="vente.html" class="btn btn-dark">En savoir +</a>
                <center>
            </div>
        </div>
    </div>
    <div class="width2">

    </div>
    <div class="boss">
        <div class="ok">

            <img src="img/ok1.jpg" alt="" width="200px" height="170px">
            <img src="img/ok2.jpg" alt="" width="200px" height="170px">
        </div>
        <img src="img/ok3.jpg" alt="" width="200px" height="170px">
        <img src="img/ok4.jpg" alt="" width="200px" height="170px">
    </div>

    <div class="box">
        <h1 class="modif">NOURAN, agences immobilières à Tunis, Tunisie</h1>
        <div class="NOURAN">
            <article>NOURAN est une agence immobilière nationale agréée par l’Etat Tunisien. Elle est également le
                Premier Réseau de négociateurs en immobilier dont l’activité couvre toute la TUNISIE.

                Des agences immobilières nouvelle génération, avec une équipe d'agents immobiliers sur qui il faut
                compter
                pour votre projet d'achat ou de location en Tunisie !

                Nous vous proposons tous les métiers de l’immobilier : la transaction, la gestion et la location de
                maisons,
                appartements, immeubles, terrains, fonds de commerce, les montages de défiscalisation……</article>
        </div>
    </div>
    <div class="width3">

    </div>
    <center>
        <h2 id="tunis">Annonces Immobilières en Tunisie : Trouvez le bien immobilier de vos rêves</h2>
        <div class="video">
            <video controls width="500" height="300px">
                <source src="img/karim.mp4" type="video/webm">
            </video>
        </div>
    </center>
    <div class="width3">

    </div>

    <div class="width4">

    </div>

    <div class="comment">
        <h1><center>Comment ça marche ?</center></h1>
        <h3><center>NOURAN, l'agence immobilière à frais fixes</center></h3>
    </div>
    <div class="make">
        <div class="gratuite">
            <center>
                <img src="img/dollar.png" width="50px" height="50px">
            </center>
            <h2 class="b1">1-Estimation gratuite</h2>
            <span>
                + Un agent NOURAN spécialiste de votre secteur <br>
                + Des photos réalisées par nos professionnels<br>
                + Vous ne payez qu’en cas de vente</span>
        </div>
        <div class="gratuite">
            <center>
                <img src="img/location.png" width="50px" height="50px">
            </center>
            <h2 class="b1">2-Gestion des visites</h2>
            <span>
                + Nous prenons en charge les visites <br>
                + Des visites 7J/7 avec votre agent<br>
                + VUn suivi et compte rendu en temps réel</span>

        </div>
        <div class="gratuite">
            <center>
                <img src="img/payment-method.png" width="50px" height="50px">
            </center>
            <h2 class="b1">3-C'est vendu !</h2>
            <span>
                + Des acquéreurs triés sur le vole<br>
                + Un délai de vente plus court<br>
                + Accompagnement jusqu'à la signature</span>

        </div>
    </div>
    <div class="width4">

    </div>

    <script src="script.js"></script>
    <div class="partenaire">
        <h2 class="only">Nos partenaires</h2>
        <img src="img/ataim.jpg" alt="">
        <img src="img/golden-tulip.jpg" alt="">
        <img src="img/groupement.jpg" alt="">
        <img src="img/comar.jpg" alt="">
    </div>

    <div class="width4">

    </div>


   
   
</div>

</body>

</html>



