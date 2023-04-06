<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="./Index.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIR ONLINE Paper wings</title>
</head>
<body>
    <header>
        <div class="container">
        <a href="./admin/adminlogin.php"><img class="aologo-noir" src="./Images/animation.gif" alt="Logo AirOnline"></a>
            
            <img class="insta" src="./Images/Avions&icones/Instagram.svg" alt="Logo Instagram">

            <img class="facebook" src="./Images/Avions&icones/Facebook.svg" alt="Logo Facebook">

            <div class="title">
                <img class="title1" src="./Images/Titre/Nom_de_levent.svg" alt="Titre de l'événement">
            </div>


            <div class="border-count">
                <h2 class="count-title">DÉCOLLAGE DANS</h2>
                <div id="demo">                    
                   
                </div>    
            </div>
        </div>
    </header>
    <section id="section-1">
        <div>
            <h3>DISCIPLINES</h3>
        </div>
        <div class="border-discipline">
            <div class="discipline">
                <h4>DISTANCE</h4>
                <P>Pas de carburant. Pas de moteur. Juste un avion en papier réalisé avec une feuille A4 et la capacité de le lancer plus loin que quiconque. Tu as droit à trois essais lors de l’une des qualifications et seul ton meilleur lancé sera retenu. Seul le pilote ayant parcouru la plus longue distance avec son avion lors de la finale participera à la finale nationale. 

                    Peux-tu faire mieux que la championne en titre Pascaline ?</P>
            </div>
            <div class="discipline">
                <h4>TEMPS DE VOL</h4>
                <P>Plie-le, calibre-le et vérifie l'aérodynamisme avant de lancer ton avion en papier pour réaliser le plus long temps de vol.Tu as droit à trois essais lors de l’une des qualifications et seul ton meilleur lancer sera retenu. Seul le ou la pilote qui aura effectué le vol le plus long lors de la finale pourra participer à la finale nationale. En 2022, Kévin a remporté le titre de champion de Temps de vol avec une performance de 13,33 secondes. Peux-tu le détrôner ?</P>
            </div>
            <div class="discipline">
                <h4>VOLTIGE</h4>
                <P>Si tu as un talent secret pour les acrobaties aériennes ça nous intéresse ! Pour cette compétition, tu as trois essais devant les juges qui t’accorderons une note artistique. Seule la plus haute des trois notes est retenue Fais preuve de créativité avec tes avions et figures. Les pilotes  qui recevront le plus de votes des juges accéderont à la finale nationale. Peux-tu faire mieux que la dernière championne, Caro ?</P>
            </div>
        </div>

        <div class="pop-up">
            <img class="red-plane" src="./Images/Avions&icones/avion2.svg" alt="Avion en papier">
            <button class="pop-up-btn">INSCRIPTION</button>
        </div>
        
        <div class="location">
            <img class="bus" src="./Images/Bus.png" alt="Horaires des Bus">

            <iframe class="carte" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2794.9895402698608!2d5.956575114920254!3d45.53041603704465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478baeadf7664831%3A0x777d29b04260c513!2s110%20Rue%20des%20Tenettes%2C%2073190%20Saint-Baldoph!5e0!3m2!1sfr!2sfr!4v1677862582112!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" alt="Carte GoogleMaps pour se rendre à l'événement"></iframe>

            <img class="horaire" src="./Images/Horaires.png" alt="Horaire d'inscription au Championnat">

        </div>

        <div class="partner-thumbnail">            
            <div class="thumbnails">
                <a href="https://ikonal.com/plans-avions-papier" target="_blank"><img class="plan" src="./Images/vignette1.jpg" alt="création d'avion en papier"></a>
                <a href="https://www.youtube.com/watch?v=OHwuee3q8fg&ab_channel=DiscoveryAustralia" target="_blank"><img class="record" src="./Images/vignette2.jpg" alt="vidéo du plus long vol en Avion en papier"></a>
                <a href="./Document/evasion_mode_d_emploi.pdf" target="_blank"><img class="art" src="./Images/vignette3.jpg" alt="L'Art du voayge Immobile"></a>
            </div>
            <div class="partners">
                <img class="chn-exp" src="./Images/Partenaires/chinaexpress.jpg" alt="Logo China Express">
                <img class="clrftn" src="./Images/Partenaires/clairefontaine.jpg" alt="Logo Calirefontaine">
                <img class="Obio" src="./Images/Partenaires/douceurbio.jpg" alt="Logo O'douceurBio">
                <img class="pizhut" src="./Images/Partenaires/pizzahut.jpg" alt="Logo Pizza Hut">
                <div class="last-logos">
                    <img class="AirF" src="./Images/Partenaires/airfrance.jpg" alt="Logo Air France">
                    <img class="airport" src="./Images/Partenaires/aéroport.jpg" alt="Logo Aéroport de Savoie">
                </div>
            </div>
        </div>

        <footer>
            <div class="foot-1">
                <a href="">Configuration des cookies</a><br>  
                <a href="">Politique de confidentialité</a><br>
                <a href="">Mentions légales</a><br>
            </div>
            <div class="foot-2">
                <a href="">Contactez-nous</a><br>
                <a href="">Conditions Générales</a><br>
                <a href="">Médias</a><br>
            </div>
            <img class="red-plane-2" src="./Images/Avions&icones/avion2.svg" alt="Avion en papier">
        </footer>
    </section>

    <section class="section-2">
        <div class="inscription">
            <div class="inscrip-content">
                <button class="supp-1">X</button>
                <form class="form" action="index.php" method="POST" name="form">
                    <div class="nom">
                        <input type="text" id="nom" name="nom" placeholder="NOM du PARTICIPANT.............................................................................................." required>                        
                    </div>
                    <div class="input-group">
                        <input type="text" id="prenom" name="prenom" placeholder="PRÉNOM............................................................." required>
                        <input type="number" id="age" name="age" placeholder="ÂGE...................................................................." required>
                    </div>
                    <div class="adress-mail">
                        <input type="text" id="email" name="email" placeholder="Adresse mail................................................@..............................................." required>
                    </div>
                    <div class="align">            
                        <div class="btn-checkbox">
                            <input type="checkbox" id="distance" name="distance" value="1">
                            <label for="distance">Catégorie “DISTANCE”</label><br>
                            <input type="checkbox" id="temps" name="temps" value="1">
                            <label for="temps">Catégorie “TEMPS DE VOL”</label><br>
                            <input type="checkbox" id="voltige" name="voltige" value="1">
                            <label for="voltige">Catégorie “VOLTIGE”</label><br>
                            <input type="checkbox" id="mail" name="mail" value="1">
                            <label for="mail">Rappel automatique par mail</label><br>
                            <input type="checkbox" id="conditions" name="conditions" value="1" required = "required">
                            <label for="conditions">J’accepte les conditions d'utilisation<a class="cgu" href="./CGU/CGU.html" target="_blank">(CGU)</a></label><br>
                        </div> 
                        <div id="white-plane">
                            <img src="./Images/Avions&icones/avion1.svg" alt="Avion Blanc en papier" class="white-plane">               
                        </div>
                    </div>
                    <div class="valid-return">
                        <button class="return">RETOUR</button>
                        <button class="valid" type="submit" name="submit">VALIDER</button>
                    </div>
                </form>
            </div>
        </div>

        <div id="retour">
            <div class="retour-content">
                <buton class="supp-2">X</buton>
                <p>Désolé de vous voir partir</p>
                <img class="white-plane-2" src="./Images/Avions&icones/avion3.svg" alt="avion en papier">
            </div>
        </div>
        <div id="validation">
            <div class="validation-content">
                <buton class="supp-3">X</buton>
                <p>Merci pour votre inscription,</p> 
                <p>Rendez-vous le 26 avril à l’aéroport</p>
                <img class="white-plane-3" src="./Images/Avions&icones/avion3.svg" alt="avion en papier">
            </div>
        </div>
    </section>
   <script src="Index.js"></script>   
</body>
</html>
<?php 
// Configuration de la connexion
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','root');
define('DB_NAME','aironline');

try
{
    // Connexion à la base
    $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS);
}
catch (PDOException $e)
{
	// Echec de la connexion
    exit("Error: " . $e->getMessage());
}


if(TRUE === isset($_POST["submit"])) {
error_log($_POST["submit"]);
    $Nom = $_POST["nom"];
    error_log($Nom);
    $Prenom = $_POST["prenom"];
    error_log(print_r($Prenom, 1));
    $Age = $_POST["age"];
    error_log($Age);
    $email = $_POST["email"];
    error_log($email);
    $CatDistance = isset($_POST["distance"]) ? $_POST["distance"] : 0;
    error_log($CatDistance);
    $CatTemps = isset($_POST["temps"]) ? $_POST["temps"] : 0;
    $CatVoltige = isset($_POST["voltige"]) ? $_POST["voltige"] : 0;
    $Rappel = isset($_POST["mail"]) ? $_POST["mail"] : 0;
    $Conditions = isset($_POST["conditions"]) ? $_POST["conditions"] : 0;

    $query = "INSERT INTO inscription(Nom, Prenom, Age, email, CatDistance, CatTemps, CatVoltige, Rappel, Conditions) VALUES(:Nom, :Prenom, :Age, :email, :CatDistance, :CatTemps, :CatVoltige, :Rappel, :Conditions)";
    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':Nom',$Nom,PDO::PARAM_STR);
    $stmt->bindParam(':Prenom',$Prenom,PDO::PARAM_STR);
    $stmt->bindParam(':Age',$Age,PDO::PARAM_STR);
    $stmt->bindParam(':email',$email,PDO::PARAM_STR);
    $stmt->bindParam(':CatDistance',$CatDistance,PDO::PARAM_STR);
    $stmt->bindParam(':CatTemps',$CatTemps,PDO::PARAM_STR);
    $stmt->bindParam(':CatVoltige',$CatVoltige,PDO::PARAM_STR);
    $stmt->bindParam(':Rappel',$Rappel,PDO::PARAM_STR);
    $stmt->bindParam(':Conditions',$Conditions,PDO::PARAM_STR);
    $stmt->execute();
    
    $last_Id = $dbh->lastInsertId();

    if($last_Id){
        echo "<script>
        popUpValidation.style.visibility = 'visible';
        popUpValidationContent.style.visibility = 'visible';
        inscription.style.visibility = 'hidden';
        inscripContent.style.visibility = 'hidden';
        </script>";
    }
};

?>