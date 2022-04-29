<?php 
 include '../db/connectdb.php';
$id_paniers = $_GET["idp"];
            $query = "DELETE FROM panier WHERE panier . id_panier = :id_panier";
              $retour = $db -> prepare($query);
            $retour->execute(array(  ":id_panier" => $id_paniers ));

            header("Location:../../panier.php");