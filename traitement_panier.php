
<?php

require_once 'assets/db/connectdb.php';

$id_login = 2;

$tailles = $_POST['tailles'];
$couleurs = $_POST['couleurs'];

if (isset($tailles, $couleurs) && !empty($tailles)  && !empty($couleurs)) 
{

    // ici on regarde si l'article choisi existe
    $sqlarticleexiste = "SELECT COUNT(*) AS nombres FROM stocks
    WHERE  id_tailles = :id_tailles
    AND id_couleurs = :id_couleurs
    AND id_articles = :id_article";

    $requetearticleexiste = $db->prepare($sqlarticleexiste);
    $requetearticleexiste->execute(array(
        ":id_tailles" => $tailles,
        ":id_couleurs" => $couleurs,
        ":id_article" => $_POST['id_article']    
    ));
    $affichearticleexiste = $requetearticleexiste->fetch();

    if ($affichearticleexiste['nombres'] == 1){ 

   

            $sqlverifarticle = "SELECT * FROM stocks
            WHERE  id_tailles = :id_tailles
            AND id_couleurs = :id_couleurs
            AND id_articles = :id_article";

            $requeteverifarticle = $db->prepare($sqlverifarticle);
            $requeteverifarticle->execute(array(
            ":id_tailles" => $tailles,
            ":id_couleurs" => $couleurs,
            ":id_article" => $_POST['id_article']   
            ));
            $afficheverifarticle = $requeteverifarticle->fetch();

            if ($afficheverifarticle['quantite_stock'] >= 1){

            $resultat = $afficheverifarticle['quantite_stock'] -1;

            $sqlstockmaj = "UPDATE stocks SET quantite_stock = :quantite_stock  WHERE id_stocks=:id_stocks";
            $requetestockmaj = $db->prepare($sqlstockmaj);
            $requetestockmaj->execute(array(
            ":quantite_stock" => $resultat,
            ":id_stocks" => $afficheverifarticle['id_stocks']    
            ));


            $sqlajoutpanier = "INSERT INTO panier (quantite_panier, token_panier, id_utilisateurs, id_stocks) VALUES ('1', '1', :id_utilisateur, :id_stocks)";
            $requeteajoutpanier = $db->prepare($sqlajoutpanier);
            $requeteajoutpanier->execute(array(
                ":id_utilisateur" => $id_login,
                ":id_stocks" => $afficheverifarticle['id_stocks']    
            ));  
        
            echo "L'article est ajouté à votre panier";
            }

            if ($afficheverifarticle['quantite_stock'] <= 0){
                echo "<br>L'article n'est plus disponible dans cette taille et cette couleur";
            }

        
    }
    
    if ($affichearticleexiste['nombres'] == 0){ 
        echo "Désolé nous n'avons pas pu ajouter cette article dans le panier <br>";
    }

}
else {

if ((empty($tailles)) && (!empty($couleurs))){
    echo "Merci de choisir une taille<br>";
}

if ((empty($couleurs)) && (!empty($tailles))){
    echo "Merci de choisir une couleur<br>";
}

if ((empty($couleurs)) && (empty($tailles))){
    echo "Merci de choisir une taille et une couleur<br>";
}

}

?>