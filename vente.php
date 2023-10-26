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

 <nav>
        <a href="index.html"><label class="logo">NOURAN</label></a>
        <ul>
            <li><a class="active" href="index.html">Acceuil</a></li>
            <li><a href="vente.html">Vente</a></li>
            <li><a href="location.html">Location</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="annonce.html">Deposer</a></li>
            <li><a href="index.php">Connexion</a></li>


        </ul>
    </nav>
    <div class="big">

        <div class="flex">
            <div class="s1">
                <h2>A vendre à Gammarth un spacieux appartement</h2>
                <div class="paragraphe">
                    <img src="img/7.jpg" alt="" width="200px" height="200px">
                    <p>Je vous propose à la vente à gammarth village, dans un quartier calme et sécurisé, dans l’une des
                        plus belles résidences de la banlieue nord, </p>
                    <p id="hiddenMessage" style="display: none;">
                        au premier étage, un très bel et spacieux
                        appartement unique dans son genre, bénéficiant d’une entrée complètement indépendante, sans
                        vis-à-vis, se composant comme suit :
                        Un très spacieux et lumineux salon salle à manger avec cheminée et une hauteur sous plafond à
                        l’ancienne de 4m20, 
                    </p>
                </div>
                <button onclick="revealMessage()" type="button" class="btn btn-dark">Voir Plus</button>
                <button onclick="Message()" type="button" class="btn btn-dark">Voir Moins</button>
                <a href="contact.html"> <button type="button" class="btn btn-primary">Contactez-nous</button></a>
            </div>


            <div class="s2">
                <h2>S2 Neuf à vendre aux jardins de Carthage </h2>
                <div class="paragraphe">
                    <img src="img/88.jpg" alt="" width="200px" height="200px">
                    <p>Newkey jardins de Carthage vous propose à la vente un bel appartement neuf situé dans une
                        résidence calme et sécurisée </p>
                    <p id="hiddenMessage2" style="display: none;">
                        il y a deux appartements par palier et doté d'un double
                        ascenseur.
                        Ce dernier se compose d'un salon spacieux et lumineux grâce à l'ouverture de sa terrasse, une
                        cuisine avec séchoir qui est équipée d'un four, une plaque de cuisson et une hotte aspirante et
                        une salle d'eau invité qui complète la partie jour.</p>
                </div>
                <button onclick="revealMessage2()" type="button" class="btn btn-dark">Voir Plus</button>
                <button onclick="Message2()" type="button" class="btn btn-dark">Voir Moins</button>
                <a href="contact.html"> <button type="button" class="btn btn-primary">Contactez-nous</button></a>
            </div>




            <div class="s1">
                <h2>Appartement S3, front de mer, Chott Meriem</h2>
                <div class="paragraphe">
                    <img src="img/image-1 (3).jpg" alt="" width="200px" height="200px">
                    <p>Des appartements Front de Mer A VENDRE
                        Avec une première position en front de mer </p>
                    <p  id="hiddenMessage3" style="display: none;">
                    , Résidence Costa, une perle d’un travail conceptuel
                    architectural et esthétique et que déploie un style contemporain et épuré met à votre
                    disposition des appartements S0, S1, S2 et S3.
                    Les appartements sont dans le cadre d’une résidence clôturée, gardée et télé surveillée.
                    Résidence Costa, Symbole de luxe, de confort et de sécurité</p>
                </div>
                <button onclick="revealMessage3()" type="button" class="btn btn-dark">Voir Plus</button>
                <button onclick="Message3()" type="button" class="btn btn-dark">Voir Moins</button>
                <a href="contact.html"> <button type="button" class="btn btn-primary">Contactez-nous</button></a>
            </div>


            <div class="s2">
                <h2>Villa de maitre à la Marsa </h2>
                <div class="paragraphe">
                    <img src="img/2y51tz1227.jpg" alt="" width="200px" height="200px">
                    <p>Newkey la Marsa propose à la vente cette somptueuse villa de maitre bâtie sur 675m² </p>
                    <p id="hiddenMessage4" style="display: none;">
                        , sur trois
                        niveaux. Coup de cœur pour cette villa moderne entièrement neuve, son vaste jardin et sa belle
                        piscine. Un cadre de vie exceptionnel au cœur d'un quartier calme et proche de toutes
                        commodités. Au sous-sol l'espace est composé d'un garage pouvant accueillir deux voitures, un
                        local technique, une chambre de services avec son sanitaire, une cuisine bien équipée et une
                        salle d'eau. </p>
                </div>
                <button onclick="revealMessage4()" type="button" class="btn btn-dark">Voir Plus</button>
                <button onclick="Message4()" type="button" class="btn btn-dark">Voir Moins</button>
                <a href="contact.html"> <button type="button" class="btn btn-primary">Contactez-nous</button></a>
            </div>

        </div>
    </div>
    <div class="flex">
        <div class="s1">
            <h2>Appartement S2 Hammamet à quelques pas de la plage</h2>
            <div class="paragraphe">
                <img src="img/images.jpg" alt="" width="200px" height="200px">
                <p>SKI vous propose un joli appartement s2 dans une résidence de rêve " Bousten" dans sa deuxième phase.
                </p>
                <p id="hiddenMessage5" style="display: none;">
                La superficie totale de l'appartement 72 m² et il est composé d'un salon, deux chambres à coucher,
                une salle de bain et une cuisine.
                Tous les appartements disposent d'un design exquis avec des espaces de vie spacieux, de grandes
                vérandas, des jardins et des piscines. La résidence BOUSTEN2 est dans un quartier hôtelier très
                calme et à quelques pas de la plus belle plage de Hammamet.</p>
            </div>
            <button onclick="revealMessage5()" type="button" class="btn btn-dark">Voir Plus</button>
            <button onclick="Message5()" type="button" class="btn btn-dark">Voir Moins</button>
            <a href="contact.html"> <button type="button" class="btn btn-primary">Contactez-nous</button></a>
        </div>


        <div class="s2">
            <h2>Appartement dans une résidence de 4 niveaux </h2>
            <div class="paragraphe">
                <img src="img/images (1).jpg" alt="" width="200px" height="200px">
                <p>Salon salle à manger avec balcon <br>
                    Salle d'eau invités <br>
                </p>
                <p id="hiddenMessage6" style="display: none;">
                    Cuisine équipée et aménagée avec séchoir <br>
                    3 chambres dont deux avec Dressing <br>
                    Salle de bain <br>
                    Garage privatif au sous-sol <br>
                    Titre de propriété individuel</p>
            </div>
            <button onclick="revealMessage6()" type="button" class="btn btn-dark">Voir Plus</button>
            <button onclick="Message6()" type="button" class="btn btn-dark">Voir Moins</button>
            <a href="contact.html"> <button type="button" class="btn btn-primary">Contactez-nous</button></a>
        </div>



        <div class="s1">
            <h2>Appartement S1 Enassr 2</h2>
            <div class="paragraphe">
                <img src="img/224.jpg" alt="" width="200px" height="200px">
                <p>Agence next_immo vous propose à la vente un appartement </p>
                <p id="hiddenMessage7" style="display: none;">
                    en s1 de très haut standing dans une résidence avec piscine à proximité de la plage avec une
                    superficie habitable de 77 m²</p>
            </div>
            <button onclick="revealMessage7()" type="button" class="btn btn-dark">Voir Plus</button>
            <button onclick="Message7()" type="button" class="btn btn-dark">Voir Moins</button>
            <a href="contact.html"> <button type="button" class="btn btn-primary">Contactez-nous</button></a>
        </div>


        <div class="s2">
            <h2>Un appartement S1 de 64m² à AFH Hammamet Nord</h2>
            <div class="paragraphe">
                <img src="img/cbe58b89-830b-4606-a00b-4f5ba02835fe-720x785.jpg" alt="" width="200px" height="200px">
                <p>L’agence immobilière ADAM vous propose :
                    A vendre
                    Un appartement S1 de 64m² à AFH Hammamet Nord, </p>
                <p id="hiddenMessage8" style="display: none;">

                dans une résidence gardée jours et nuits avec piscine collective et 2 ascenseurs.
                Il se compose d’un salon balconnet, une kitchenette équipée (plaque et hotte) et aménagée, une chambre à
                coucher avec dressing et une salle d’eau avec douche à l’italienne.
                </p>
            </div>
            <button onclick="revealMessage8()" type="button" class="btn btn-dark">Voir Plus</button>
            <button onclick="Message8()" type="button" class="btn btn-dark">Voir Moins</button>
            <a href="contact.html"> <button type="button" class="btn btn-primary">Contactez-nous</button></a>
        </div>

    </div>
    </div>











    <script src="vente.js"></script>
</body>

</html>