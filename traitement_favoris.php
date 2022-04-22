<?php

require_once 'assets/includes/bddconnexion.php';

$id_login = 2;

    $sqlfavoris = "SELECT COUNT(*) AS nombres FROM favoris
    WHERE  id_utilisateurs = :id_utilisateur
    AND id_articles = :id_article";

    $requetefavoris = $db->prepare($sqlfavoris);
    $requetefavoris->execute(array(
        ":id_utilisateur" => $id_login,
        ":id_article" => $_POST['id_article']    
    ));
    $affichefavoris = $requetefavoris->fetch();

    $html = "";
    $fav = "";

if ($affichefavoris['nombres'] <= 0) {
    // ici on insere dans la bdd
    $sqlajoutfavoris = "INSERT INTO favoris (id_articles, id_utilisateurs) VALUES (:id_article, :id_utilisateur)";
    $requeteajoutfavoris = $db->prepare($sqlajoutfavoris);
    $requeteajoutfavoris->execute(array(
        ":id_utilisateur" => $id_login,
        ":id_article" => $_POST['id_article']    
    ));  

   $html .= '<input type="hidden" value="1" id="favoris">
        <button type="submit">
        <i class="fa-solid fa-heart"></i>
        </button>
        </form>';
    
    $fav .= "Article ajouté à vos favoris";
}

if ($affichefavoris['nombres'] >= 1) {
    // ici on le supprime de la bdd 
$sqlsupprfavoris = "DELETE FROM favoris WHERE id_articles=:id_article AND id_utilisateurs=:id_utilisateur";
$requetesupprfavoris = $db->prepare($sqlsupprfavoris);
$requetesupprfavoris->execute(array(
    ":id_utilisateur" => $id_login,
    ":id_article" => $_POST['id_article'] 
)); 

$html .=  '  <input type="hidden" value="1" id="favoris">
        <button type="submit">
        <i class="fa-regular fa-heart"></i>
        </button>
        </form>';

        $fav .= "Article retiré de vos favoris";

}

echo json_encode(
    array(
        "html" => $html,
        "favoris"=> $fav,
    )
);
?>