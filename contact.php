<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Contact &bull; Yoann Buchet</title>
        <link rel="icon" type="image/png" href="img/favicon.png" />
        <link href="./css/style.css" rel="stylesheet" type="text/css"/>
        <link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <header class="menu">
            <div id="logo">
                <h1 class="title">Yoann Buchet</h1>
                <h2 class="subtitle">Multiservices</h2>
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="galerie.html">Galerie</a></li>
                    <li><a href="tarifs.html">Tarifs</a></li>
                    <li><a href="livreor.php">Livre d'or</a></li>
                    <li><a href="contact.php" class="active">Contact</a></li>
                </ul>
            </nav>
        </header>
        <section id="contact">
            <article id="formulaire">
                <?php 
                    if(isset($_POST['nom']) 
                    and isset($_POST['prenom']) 
                    and isset($_POST['mail']) 
                    and isset($_POST['sujet']) 
                    and isset($_POST['message'])){
                        require_once("envoi_contact.php");
                    } 
                ?>
                <h2 class="titre">Laissez un message</h2>
                <form action="envoi_contact.php" method="post" class="centred">
                    <div id="groupe1">
                        <input id="nom" name="nom" type="text" placeholder="Nom*" required/>
                        <input id="prenom" name="prenom" type="text" placeholder="Prénom" />
                        <input id="mail" name="mail" type="email" placeholder="Mail*" required/>
                    </div>
                    <div id="groupe2">
                        <input id="sujet" name="sujet" type="text" placeholder="Sujet"/>
                        <textarea id="message" name="message" rows="5" cols="50" placeholder="Message*" required></textarea>
                    </div>
                        <input id="button_submit" type="submit" value="Envoyer">
                </form>
            </article>
            <article id="coordonnees">
                <h2 class="titre">Mes coordonées</h2>
                <img id="coordonnees_svg" src="img/Contact/coordonnees.svg" alt="coordonnées">
                <img id="photo_yoann" src="img/Contact/photoyo.jpg" alt="photo yoann">
            </article>
        </section>
        <footer>
            <p>Yoann-Buchet.fr © 2013 - 2014 | Tous droits réservés</p>
            <p>Entreprise</p>
        </footer>
    </body>
</html>