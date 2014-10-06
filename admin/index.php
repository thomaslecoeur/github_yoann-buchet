<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Espace d'administration &bull; Yoann Buchet</title>
        <link rel="icon" type="image/png" href="img/favicon.png" />
        <link href="./css/style.css" rel="stylesheet" type="text/css"/>
        <link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
        <script src="../js/jquery-1.10.1.min.js"></script>
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
		<?php
			session_start();
			$mysql = 'mysql:host=localhost;dbname=yoann_buchet';
			$login = 'root';
			$password = '';
		    $bdd = new PDO($mysql, $login, $password); 
			$data = 0;

			if (isset($_GET['logout'])) {
				$_SESSION['connect']=0;
			}

			if (!isset($_SESSION['connect'])) {
				$_SESSION['connect']=0;
			}
			 
			if (isset($_POST['password']) AND isset($_POST['login'])) {
			        $password=$_POST['password'];
			        $login=$_POST['login'];

			        $req = $bdd->prepare('SELECT count(*) FROM utilisateur WHERE login_ut=? AND password_ut=?;');
					$req->execute(array($login, sha1($password)));
					$data = $req->fetch();

					if ($data[0] == 1){
						$_SESSION['connect']=1;
					}

					else {
						echo "<div id='error_log'><p>Oups ! Il semblerait que l'<strong>identifiant</strong> ou le <strong>mot de passe</strong> soit incorrect...<p></div>";
					}
			}

			if ($_SESSION['connect']==1) {
				include('content.inc');
			}

			else {
				include('auth.inc');
			}
		?>
	</body>
	<?php
    	$bdd=null;
	?>
</html>