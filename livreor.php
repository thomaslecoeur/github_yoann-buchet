<html>
    <head>
        <meta charset="UTF-8" />
        <title>Livre d'or &bull; Yoann Buchet</title>
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
                    <li><a href="livreor.php" class="active">Livre d'or</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </header> 
        <section id="ajout_avis">
            <article>
                <?php 
                    if(isset($_POST['nom']) 
                    and isset($_POST['mail']) 
                    and isset($_POST['message'])){
                        require_once("envoi_livreor.php");
                    } 
                ?>
                <h1 class="titre centred">Ajoutez dès maintenant votre témoignage !</h1>
                <div class="centred">
                    <form action="livreor.php" method="post" id="form_livreor">
                        <input id="nom" name="nom" type="text" placeholder="Nom*" required/>
                        <input id="mail" name="mail" type="email" placeholder="Mail*" required/>
                        <textarea id="message" name="message" rows="5" cols="50" placeholder="Message*" required></textarea>
                        <input id="button_submit" type="submit" value="Envoyer">
                        <input id="button_reset" type="reset" value="Effacer">
                    </form>
                </div>
            </article>
        </section>     
        <section class="temoignages">
            <?php
                setlocale(LC_TIME, 'fra_fra');
                $mysql = 'mysql:host=localhost;dbname=yoann_buchet';
                $login = 'root';
                $password = '';
                $bdd = new PDO($mysql, $login, $password); 
                $res=$bdd->query('SELECT * FROM livreor WHERE valid="1" ORDER BY date DESC;');
                while($data=$res->fetch(PDO::FETCH_OBJ)){
                    echo "<h1 class='titre'>Témoignage de ".$data->nom."</h1>";
                    echo "<article class='message'>";
                        echo "<p>".$data->message."</p>";
                        echo "<p class='date'>Envoyé le ".strftime('%d %B %Y', strtotime($data->date))."</p>";
                    echo "</article>";
                };
            ?>
        </section>                 
        <footer>
            <p>Yoann-Buchet.fr © 2013 - 2014 | Tous droits réservés</p>
            <p>Entreprise</p>
        </footer>
    </body>
</html>