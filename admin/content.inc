<header class="menu">
    <div id="entete">
        <img src="img/gear.png" alt="engrenage" id="gear">
        <p class="centred">&bull; Espace d'administration &bull;</p>
    </div>
    <div id="logo" class="centred">
        <h1 class="title">Yoann Buchet</h1>
        <h2 class="subtitle">Multiservices</h2>
    </div>
    <nav>
        <a href='../index.html' class='link' target="_blank">Aller sur le site</a>
        <a href='index.php?logout' id='logout'>Déconnexion</a>
    </nav>
</header>
<section>
    <h1>Administration du livre d'or</h1>
    <article>
        <?php
            if(isset($_GET['validate'])) {
                $req = $bdd->prepare('UPDATE livreor SET valid=1 WHERE id=?;');
                if($req->execute(array($_GET['validate']))){
        ?>
                    <script type="text/javascript">
                        alert("Le témoignage a bien été validé.\nIl est maintenant visible dans le Livre d'or !");
                    </script>
        <?php
                }
            }
              
            if(isset($_GET['delete'])) {
                $req = $bdd->prepare('DELETE FROM livreor WHERE id=?;');
                if($req->execute(array($_GET['delete']))){
        ?>
                    <script type="text/javascript">
                        alert("Le témoignage a été définitivement supprimé.\nIl ne sera pas visible dans le Livre d'or !");
                    </script>
        <?php
                }
            }
        ?>
        <ul class="menu">
            <li class="item"><a href="#" class="h2"><h2>Témoignages à valider</h2></a>
                <ul>   
                    <?php
                        setlocale(LC_TIME, 'fra_fra');
                        $res=$bdd->query('SELECT * FROM livreor WHERE valid="0" ORDER BY date DESC;');
                        while($data=$res->fetch(PDO::FETCH_OBJ)){
                            echo "<li class='subitem'>";
                                echo "<article class='valid0'>";
                                    echo "<div class='temoignage'>";
                                        echo "<h3 class='titre'>Témoignage de ".$data->nom."</h3>";
                                        echo "<p>".$data->message."</p>";
                                        echo "<p class='date'>Envoyé le ".strftime('%d %B %Y', strtotime($data->date))."</p>";
                                    echo "</div>";
                                    echo "<div class='button'>";
                                        echo "<a href='index.php?validate=".$data->id."' class='validate'>Valider</a>";
                                        echo "<a href='index.php?delete=".$data->id."' class='delete'>Supprimer</a>";
                                    echo "</div>";  
                                echo "</article>";
                            echo "</li>";
                        };
                    ?>
                </ul>
            </li>
        </ul>
    </article>            
    <article>
        <ul class="menu">
            <li class="item"><a href="#" class="h2"><h2>Témoignages déjà validés</h2></a>
                <ul>
                    <?php
                        setlocale(LC_TIME, 'fra_fra');
                        $res=$bdd->query('SELECT * FROM livreor WHERE valid="1" ORDER BY date DESC;');
                        while($data=$res->fetch(PDO::FETCH_OBJ)){
                            echo "<li class='subitem'>";
                                echo "<article class='valid1'>";
                                    echo "<div class='temoignage'>"; 
                                        echo "<h3 class='titre'>Témoignage de ".$data->nom."</h3>";
                                        echo "<p>".$data->message."</p>";
                                        echo "<p class='date'>Envoyé le ".strftime('%d %B %Y', strtotime($data->date))."</p>";
                                    echo "</div>";
                                    echo "<div class='button'>";
                                        echo "<a href='index.php?delete=".$data->id."' class='delete'>Supprimer</a>";
                                    echo "</div>";
                                echo "</article>";
                            echo "</li>";
                        };
                    ?>
                </ul>
            </li>
        </ul>
    </article>
</section>
<script type="text/javascript">
    $(function() {

        var menu_ul = $('.menu > li > ul'),
            menu_a  = $('.menu > li > a');

        menu_ul.hide();

        menu_a.click(function(e) {
            e.preventDefault();
            if(!$(this).hasClass('h2-active')) {
                menu_a.removeClass('h2-active');
                menu_ul.filter(':visible').slideUp('normal');
                $(this).addClass('h2-active').next().stop(true,true).slideDown('normal');
            } 
            else {
                $(this).removeClass('h2-active');
                $(this).next().stop(true,true).slideUp('normal');
            }
        });
    });
</script>