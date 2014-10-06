<?php
if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['mail']) and isset($_POST['sujet']) and isset($_POST['message'])){
    $nom1=$_POST['nom'];
    $prenom1=$_POST['prenom'];
    $mail1=$_POST['mail'];
    $message1=htmlspecialchars($_POST['message']);
    if($nom1!="" and $prenom1!="" and $mail1!="" and $message1!=""){
        $yoann = 'contact@yoann-buchet.fr'; // Déclaration de l'adresse de destination.
        if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $yoann)) // On filtre les serveurs qui rencontrent des bogues.
        {
            $passage_ligne = "\r\n";
        }
        else
        {
            $passage_ligne = "\n";
        }
        //=====Déclaration des messages au format texte et au format HTML.
        $message_txt = $message1;
        $message_html = "<html><head></head><body>".$message1."</body></html>";
        //==========
          
        //=====Création de la boundary
        $boundary = "-----=".md5(rand());
        //==========
          
        //=====Définition du sujet.
        $sujet = "On vous a contacté • yoann-buchet.com";
        //=========
          
        //=====Création du header de l'e-mail.
        $header = "From: <".$mail1.">".$passage_ligne;
        $header.= "Reply-to: <".$mail1.">".$passage_ligne;
        $header.= "MIME-Version: 1.0".$passage_ligne;
        $header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
        //==========
          
        //=====Création du message.
        $message = $passage_ligne."--".$boundary.$passage_ligne;
        //=====Ajout du message au format texte.
        $message.= "Content-Type: text/plain; charset=\"utf8\"".$passage_ligne;
        $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
        $message.= $passage_ligne.$message_txt.$passage_ligne;
        //==========
        $message.= $passage_ligne."--".$boundary.$passage_ligne;
        //=====Ajout du message au format HTML
        $message.= "Content-Type: text/html; charset=\"utf8\"".$passage_ligne;
        $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
        $message.= $passage_ligne.$message_html.$passage_ligne;
        //==========
        $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
        $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
        //==========
          
        //=====Envoi de l'e-mail.
        mail($yoann,$sujet,$message,$header);
        ?>
        <script>
            alert('Votre message a bien été envoyé. Je vous répondrai le plus vite possible.');
        </script>
        <?php
        //==========

    }
}
?>