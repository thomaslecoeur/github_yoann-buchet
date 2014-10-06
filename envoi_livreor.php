<?php
	$mysql = 'mysql:host=localhost;dbname=yoann_buchet';
	$login = 'root';
	$password = '';
    $bdd = new PDO($mysql, $login, $password); 
    
    $req = $bdd->prepare('INSERT INTO livreor (nom,mail,message) VALUES (?, ?, ?);');
    if($req->execute(array($_POST['nom'], $_POST['mail'], $_POST['message']))){
?>
<script type="text/javascript">
    alert("Votre témoignage a bien été envoyé.\nIl sera en ligne dès sa validation.");
</script>
<?php
}
?>