<html>
    <head>
        <meta charset="UTF-8" />
        <title>Création d'un compte &bull; Yoann Buchet</title>
        <link rel="icon" type="image/png" href="img/favicon.png" />
        <link href="./css/style.css" rel="stylesheet" type="text/css"/>
        <link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
		<?php
			if (isset($_POST['login']) && isset($_POST['password'])) {
				$mysql = 'mysql:host=localhost;dbname=yoann_buchet';
				$login = 'root';
				$password = '';
				$bdd = new PDO($mysql, $login, $password); 
				$login = $_POST['login'];
				$password = sha1($_POST['password']);
				$req = $bdd->prepare('INSERT INTO utilisateur (login_ut,password_ut) VALUES (?, ?);');
				if($req->execute(array($login, $password))) {
		?>
					<script type="text/javascript">
					    alert("L'utilisateur a bien été ajouté.");
					</script>
		<?php
				}
			}
		?>

		<div id="auth">
		    <div id="auth_title">
		        <img src="img/gear.png" alt="engrenage" id="gear">
		        <p class="centred">&bull; Espace d'administration &bull;</p>
		    </div>
		    <div id="auth_logo" class="centred">
		        <h1 class="title">Yoann Buchet</h1>
		        <h2 class="subtitle">Multiservices</h2>
		    </div>
		    <form id="auth_form" action='install.php' method='post'>
		        <input name='login' type='text' placeholder='Entrez un identifiant' required/>
		        <input id="last" name='password' type='password' placeholder='Entrez un mot de passe' required/>
		        <input id="button_submit" type='submit' value='Connexion'/>
		    </form>
		</div>
	</body>
</html>