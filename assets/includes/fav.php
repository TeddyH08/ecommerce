<div class="container">
    <div class="favo">
        <h2 class="titre_h2">Mes favoris :</h2>

        <?php

        if (isset($_SESSION['id']))
        {


                     
                    $sqlfavoris = "SELECT * FROM favoris f, articles a
                    WHERE a.id_articles=f.id_articles 
                    AND f.id_utilisateurs = :id_utilisateurs";
                    $requetefavoris = $db->prepare($sqlfavoris);
                    $requetefavoris->execute(array(
                        ":id_utilisateurs" => $_SESSION['id']
                    ));
                    while ($affichefavoris = $requetefavoris->fetch())
                    { 
                    ?>

        <div class="article_fav">

            <div class="img_fav">
                <img src="assets/img/<?php echo $affichefavoris['image1_articles'];?>" class="fav_img">
            </div>

            <!-- <div class="sous_img_fav">
                <div>
                    <img src="assets/img/<?php echo $affichefavoris['image2_articles'];?>" class="fav_img">
                </div>

                <div>
                    <img src="assets/img/<?php echo $affichefavoris['image3_articles'];?>" class="fav_img">
                </div>
            </div> -->

            <div class="infos_fav">
                <h4><?php echo $affichefavoris['nom_articles'];?></h4>
                <p>Prix : <?php echo $affichefavoris['prix_articles'];?> €</p><br>
                <button class="boutonvoirarticle"><a href="article.php?id_article=<?php echo $affichefavoris['id_articles'];?>">Voir l'article</a></button>
                
               
            </div>

            <div class="description_fav">
                <h4>Description : </h4> <p><?php echo $affichefavoris['description_articles'];?> </h4>

            </div>
        </div>

        <?php
                    }
        ?>
   <!-- <div class="article_fav">
            <div class="img_fav">
                <img src="assets/img/hauts/thumb_c290x3906af62e3a15061099ff52f933aa9857ba.jpg" class="fav_img">
            </div>

            <div class="sous_img_fav">
                <div>
                    <img src="assets/img/hauts/thumb_c290x3900e1b7bcaec2cd8933ffec83e10c7d997.jpg" class="fav_img">
                </div>

                <div>
                    <img src="assets/img/hauts/thumb_c290x39040e9b4a6b5c4fceb814c0ef728c79f99.jpg" class="fav_img">
                </div>
            </div>

            <div class="infos_fav">
                <h4>Nom de l'article</h4>
                <p>Taille :</p>
                <p>Couleur :</p>
                <p>Référence :</p>
                <h4>Prix :</h4>
            </div>

            <div class="description_fav">
                <h4>Description :</h4>
                <p>Carrure :</p>
                <p>Longueur :</p>
                <p>Largeur :</p>
                <p>Note :</p>
            </div>
        </div> 
        
        
        <div class="article_fav">
            <div class="img_fav">
                <img src="assets/img/hauts/thumb_c290x3906af62e3a15061099ff52f933aa9857ba.jpg" class="fav_img">
            </div>

            <div class="sous_img_fav">
                <div>
                    <img src="assets/img/hauts/thumb_c290x3900e1b7bcaec2cd8933ffec83e10c7d997.jpg" class="fav_img">
                </div>

                <div>
                    <img src="assets/img/hauts/thumb_c290x39040e9b4a6b5c4fceb814c0ef728c79f99.jpg" class="fav_img">
                </div>
            </div>

            <div class="infos_fav">
                <h4>Nom de l'article</h4>
                <p>Taille :</p>
                <p>Couleur :</p>
                <p>Référence :</p>
                <h4>Prix :</h4>
            </div>

            <div class="description_fav">
                <h4>Description :</h4>
                <p>Carrure :</p>
                <p>Longueur :</p>
                <p>Largeur :</p>
                <p>Note :</p>
            </div>
        </div> -->

        <?php
        }
        else {
            echo "Connectez vous si vous souhaiter acceder à vos favoris";
        }

        ?>
    </div>
</div>