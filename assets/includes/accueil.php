<?php 
include("assets/db/connectdb.php");

?>
<div class="container cat">
    <div class="titre-accueil-h1"><h1>Bienvenue sur Amaplon</h1></div>

        <div class="accueil-image">
        <a class="image1-tb" href="./rupture.php"><h2 class="title_h2">Offre à saisir avant la rupture</h2></a>
            <div class="image2-tb"><p></p></div>
            <div class="text-image2-tb"><a href=""><p>La sélection à ne pas manquer
                                                    <br>Tout le monde en parle</p></a></div>
            <div class="image3-tb"></div>
            <div class="text-image3-tb"><a href=""><p>Zoom sur les Robes<br>L'indispensable de votre vestiaire</p></a></div>
        </div>

        <h2 style="text-align: center;" class="title_h2">VÊTEMENTS DE QUALITÉ</h2>

        <hr>

        <h3 style="font-variant-caps: all-small-caps;text-align: center;" class="title_h3">Les Nouveautés qui donnent envie ! </h3>

        <div class="nouveaute-accueil-tb">
        <?php
        $sel = "SELECT * FROM articles WHERE id_categories != 3 ORDER BY id_articles DESC LIMIT 6";
        $requete = $db ->prepare($sel);
        $requete ->execute();
        ?>
        <?php
        foreach ($requete as $row){
        ?>
        
            <div class="nouveaute-1">
            <a href="article.php?id_article=<?php echo $row['id_articles'];?>"><ul>
                    <li><img src="assets/img/<?php echo $row['image1_articles'];?>" alt=""></li>
                    <li>                                <?php
                            echo $row['nom_articles'];
                            ?></li>
                    <li>COULEUR</li>
                    <li>                                <?php
                            echo $row['prix_articles'];
                            ?>€</li>
                </ul></a>
            </div>

            <?php
            }
            ?>
        </div>

    <button class="btn-nouveau">Voir toutes les nouveautés</button>

    <hr>
    <h2 style="text-align: center; margin-top:25px; margin-bottom:25px;" class="title_h2">Nos Collections</h2>
    <div class="collection">
        <div class="collection-box"><a href="categorie.php?genres=1"><p>Hommes</p><img src="assets/img/hommeca9.jpg" alt=""></a></div>
        <div class="collection-box"><a href="categorie.php?genres=2"><p>Femmes</p><img src="assets/img/femmeca5.jpg" alt=""></a></div>
        <div class="collection-box"><a href="categorie.php?genres=3"><p>Enfants</p><img src="assets/img/enfantcat.jpg" alt=""></a></div>
    </div>
    <picture>
        <img src="assets/img/feuille-pac.png" alt="">
    </picture>
    <div class="acheter-chez-nous">
        <div class="logo-tb">
            <ul>
                <li><img src="assets/img/qualite.svg" alt=""></li>
                <li>QUALITÉ<br> GARANTI</li>
            </ul>
    </div>
        <div class="logo-tb">
            <ul>
                <li><img src="assets/img/dispo.svg" alt=""></li>
                <li>DISPONIBILITÉ<br> IMMEDIATE</li>
            </ul>
        </div>
        <div class="logo-tb">
            <ul>
                <li><img src="assets/img/paiement.svg" alt=""></li>
                <li>PAIEMENT<br>100% SÉCURISÉ</li>
            </ul>
        </div>
        <div class="logo-tb">
            <ul>
                <li><img src="assets/img/h24.svg" alt=""></li>
                <li>COMMANDE EXPÉDIÉE EN <br>24H</li>
            </ul>
        </div>
    </div>
</div>