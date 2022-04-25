<?php 
session_start();

require_once 'assets/db/connectdb.php';

$id_login = 2;

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="assets/style/article.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="assets/img/icon/icon.png">

    <title>Detail Article</title>

    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" 4
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
</head>

<body>
    <?php include "assets/includes/navbar.php"; ?>
    <div class="container art">
<?php
$sqlarticle = "SELECT * FROM articles a, categories c, sous_categories sc, genres g, marques m
WHERE a.id_categories=c.id_categories 
AND a.id_sous_categories=sc.id_sous_categories
AND a.id_genres=g.id_genres
AND a.id_marques=m.id_marques
and a.id_articles = " . $_GET["id_article"] . "";
$requetearticle = $db->prepare($sqlarticle);
$requetearticle->execute();
$affichearticle = $requetearticle->fetch();

echo "login "; echo $id_login;
?>
  <div class="affichermess"></div>

      
  
  <div class="container_article">
      
      <div class="article">
          
          <div class="photogauche">
              <div class="photo" onclick="choixPhoto(0)" id="photo1">
                <img src="assets/img/<?php echo $affichearticle['image1_articles']; ?>"
                alt="<?php echo $affichearticle['nom_articles']; ?>"></div>
                
                <div class="photo" onclick="choixPhoto(1)" id="photo2">
                    <img src="assets/img/<?php echo $affichearticle['image2_articles']; ?>"
                    alt="<?php echo $affichearticle['nom_articles']; ?>"></div>
                    
                <div class="photo" onclick="choixPhoto(2)" id="photo3">
                    <img src="assets/img/<?php echo $affichearticle['image3_articles']; ?>"
                    alt="<?php echo $affichearticle['nom_articles']; ?>"></div>
                </div>
                
                <div id="afficher2"></div>
                
                <div class="photoarticle">
                    
                    <div class="photo2 active" id="photo0">
                        <img id="image1" src="assets/img/<?php echo $affichearticle['image1_articles']; ?>"
                        alt="<?php echo $affichearticle['nom_articles']; ?>"></div>
                        <div class="photo2" id="photo22">
                            <img src="assets/img/<?php echo $affichearticle['image2_articles']; ?>"
                            alt="<?php echo $affichearticle['nom_articles']; ?>"></div>
                            <div class="photo2" id="photo33">
                                <img src="assets/img/<?php echo $affichearticle['image3_articles']; ?>"
                                alt="<?php echo $affichearticle['nom_articles']; ?>"></div>
                            </div>
                            
                            <div class="detailarticle">
                                
                                <?php

// $sqldetail = "SELECT * FROM articles a, stocks s, tailles t, couleurs c
// WHERE a.id_articles=s.id_articles 
// AND s.id_tailles=t.id_tailles
// AND s.id_couleurs=c.id_couleurs
// AND s.id_articles = " . $_GET["id_article"] . "";
// $requetedetail= $db->prepare($sqldetail);
// $requetedetail->execute();

$sqldetail2 = "SELECT t.taille_tailles AS nom, s.id_tailles AS id, COUNT(*) AS nombres FROM articles a, stocks s, tailles t, couleurs c 
    WHERE a.id_articles=s.id_articles 
    AND s.id_tailles=t.id_tailles 
    AND s.id_couleurs=c.id_couleurs 
    AND s.id_articles = " . $_GET["id_article"] . " 
    GROUP BY s.id_tailles";
    $requetedetail2= $db->prepare($sqldetail2);
    $requetedetail2->execute();
    
    // while ($affichedetail2 = $requetedetail2->fetch())
    // {
        //     echo "nombres : "; echo  $affichedetail2['nombres']; echo  $affichedetail2['nom']; 
        // }
        
        // <i class="fa-solid fa-heart"></i><br>
        // <i class="fa-regular fa-heart"></i>
        
        ?>

<div class="favorisb"></div>

<form method="POST" class="formulaire">        
    <div class="detail1 ">
        <div class="titre2"><?php echo $affichearticle['nom_articles']; ?> </div>
        <div class="titre2 favorisa">
            <?php
    $sqlfavoris = "SELECT COUNT(*) AS nombres FROM favoris
    WHERE  id_utilisateurs = :id_utilisateur
    AND id_articles = :id_article";
    $requetefavoris = $db->prepare($sqlfavoris);
    $requetefavoris->execute(array(
        ":id_utilisateur" => $id_login,
        ":id_article" => $_GET['id_article']    
    ));
    $affichefavoris = $requetefavoris->fetch();
    
    if ($affichefavoris['nombres'] <= 0) {
        ?>
        <input type="hidden" value="1" id="favoris">
        <button type="submit">
            <i class="fa-regular fa-heart"></i>
        </button>
    </form>
    <?php
    }
    if ($affichefavoris['nombres'] >= 1) {        
        ?>
        <input type="hidden" value="1" id="favoris">
        <button type="submit">
            <i class="fa-solid fa-heart"></i>
        </button>
    </form>
    <?php
    }
    ?>




</div>
</div>
<form method="POST" class="formpanier">
    <div class="detail1">
        <div class="titre2">Taille : </div>
        
        <div class="titre2" id="afficher">
            
            <select name="tailles" id="tailles">
                <option value="">--Choisir une taille--</option>
                <?php 
                        while ($affichedetail2 = $requetedetail2->fetch())
                        {
                            ?>
                                <option value="<?php echo $affichedetail2['id'];?>">
                                    <?php echo $affichedetail2['nom'];?></option>
                                    <?php
                        }
                        ?>

</select>

<?php
                        $sqldetail3 = "SELECT c.couleur_couleurs AS couleurs, c.id_couleurs AS id, COUNT(*) AS nombres FROM articles a, stocks s, tailles t, couleurs c 
                        WHERE a.id_articles=s.id_articles 
                        AND s.id_tailles=t.id_tailles 
                        AND s.id_couleurs=c.id_couleurs 
                        AND s.id_articles = " . $_GET["id_article"] . " 
                        GROUP BY c.couleur_couleurs";
                        $requetedetail3= $db->prepare($sqldetail3);
                        $requetedetail3->execute();
                        
                        ?>

</div>
</div>
<div class="detail1">
    <div class="titre2">Prix : </div>
    <div class="titre2"><?php echo $affichearticle['prix_articles']; ?> €</div>
</div>
<div class="detail1">
    <div class="titre2">Couleur : </div>
    <div class="titre2 afficher">
        
        <select name="couleurs" id="couleurs" onchange="getPhoto(this.value);">
            <option value="">--Choisir une couleur--</option>
            <?php 
                        while ($affichedetail3 = $requetedetail3->fetch())
                        {
                            ?>
                                <option value="<?php echo $affichedetail3['id'];?>">
                                    <?php echo $affichedetail3['couleurs'];?></option>
                                    <?php
                        }
                        ?>

</select>

</div>
</div>


<!-- <div class="detail1"><div class="titre2">Référence : </div><div class="titre2">1200920</div></div> -->

<div class="detail2">
    <div class="titre3">Description de l'article :</div>
    <div class="titre4"></div>
    <div class="titre2"><?php echo $affichearticle['description_articles']; ?></div>
</div>

<div class="notearticle">
    
    <div class="voterarticle">
        
        Voter : <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
        class="fa-solid fa-star"></i>
        
    </div>
    
    Note : 3/5 (15 votes)
</div>


<!-- bouton achat  -->
<div class="placementbout">
    <input type="hidden" value="1" name="quantite">
    
    <button type="submit" class="boutonajoutpanier">
        <i class='fa-solid fa-bag-shopping'></i> Ajouter au panier
    </button>
    
    
    <!-- <button class="boutonajoutpanier"><i class='fa-solid fa-bag-shopping'></i> Ajouter au
    panier</button> -->
    <!-- <input type="submit" value="Ajouter au panier" class="boutonajoutpanier">    -->
</form>
</div>

<div class="inforetour">
    <i class="fa-solid fa-check"></i> Tout nos articles sont fabriqués en France<br>
    <i class="fa-solid fa-check"></i> 30 jours pour changer d'avis<br>
    <i class="fa-solid fa-check"></i> Retour gratuit<br>
    <i class="fa-solid fa-check"></i> Livraison offerte<br>
</div>



</div>


</div><!-- fin article -->

<div class="commentairesarticle">
    
    <?php

if (isset($_GET["action"]))
{
    if ($_GET["action"] == 'com')
    {
        $sqldanscomms= "SELECT COUNT(*) AS nombres FROM commentaires
                WHERE id_utilisateurs = :id_utilisateur and id_articles=:id_articles";
                $requetedanscomms = $db->prepare($sqldanscomms);
                $requetedanscomms->execute(array(
                    ":id_utilisateur" => $id_login,
                    ":id_articles" => $_GET['id_article']
                ));
                $affichedanscomms = $requetedanscomms->fetch();
                
                if ($affichedanscomms['nombres'] >= 1 ) {echo "Vous avez déjà écris un commentaire<br>";}
                else {
                    
                    $heure =  date('Y-m-d H:i:s');
                    
                    $sqlajoutcommentaire = "INSERT INTO commentaires (commentaire_commentaires, date_commentaires, id_articles, id_utilisateurs) VALUES (:commentaire, :heure, :id_articles, :id_utilisateur)";
                    $requeteajoutcommentaire = $db->prepare($sqlajoutcommentaire);
                    $requeteajoutcommentaire->execute(array(
                        ":commentaire" => $_POST['commentaire'],
                        ":heure" => $heure,
                        ":id_utilisateur" => $id_login,
                        ":id_articles" => $_GET['id_article']    
                    ));
                    
                    echo "Votre commentaire est ajouté<br>";
                }
            }
        };
        
        $sqldanscomms= "SELECT COUNT(*) AS nombres FROM commentaires
        WHERE id_utilisateurs = :id_utilisateur and id_articles=:id_articles";
        $requetedanscomms = $db->prepare($sqldanscomms);
        $requetedanscomms->execute(array(
            ":id_utilisateur" => $id_login,
            ":id_articles" => $_GET['id_article']
        ));
        $affichedanscomms = $requetedanscomms->fetch();
        
        
        if ($affichedanscomms['nombres'] >= 1){
            echo "Vous avez déjà posté un commentaire vous pouvez le modifier<br><br>";
        }
        else {
            ?>

<form method="POST" action="article.php?id_article=<?php echo $_GET['id_article'];?>&action=com">
    <textarea name="commentaire" placeholder="Ecrire un commentaire" class="commentairestexte" max-lenght="255"></textarea>
    <input type="submit"  class="boutonajoutcommentaire" value="Poster mon commentaire">
</form>

<?php
        }
        
        $sqlaffichecomms= "SELECT * FROM commentaires c, utilisateurs u
        WHERE  c.id_utilisateurs=u.id_utilisateurs
        AND c.id_articles=:id_articles";
        $requeteaffichecomms = $db->prepare($sqlaffichecomms);
        $requeteaffichecomms->execute(array(
            ":id_articles" => $_GET['id_article']
        ));
        while ($afficheaffichecomms = $requeteaffichecomms->fetch())
        {
            ?>
                    De : <?php echo $afficheaffichecomms['prenom_utilisateurs'];?> le <?php echo $afficheaffichecomms['date_commentaires'];?> <br>
                    Note : <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                    class="fa-solid fa-star"></i><br>
                    <?php echo $afficheaffichecomms['commentaire_commentaires'];?><br>
                    
                    <div class="hr-perso"></div>
                    
                    <?php
        }
        
        ?>



De : Flavie.S le 28/01/2022 <br>
Note : <i class="fa-solid fa-star"></i><br>
Déçue de la qualité <br>


<div class="hr-perso"></div>

De : Justine.M le 03/01/2022 <br>
Article conforme a la description <br>
</div>

<br><br><br><br>

</div> <!-- fin container -->
</div>

<?php include "assets/includes/footer.php"; ?>

<script>
    
    
    </script>

<script src="assets/js/js.js"></script>
<script src="assets/js/article.js"></script>
<script src="assets/js/favoris.js"></script>
    <script src="assets/js/panier.js"></script>
</body>

</html>