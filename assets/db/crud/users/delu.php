<?php

require 'assets/db/connectdb.php';
$id=0; 
if(!empty($_GET['id'])){ 
    $id=$_REQUEST['id']; 
} 
if(!empty($_POST)){ 
    $id= $_POST['id']; 

    $query = "DELETE FROM utilisateurs WHERE utilisateurs . id_utilisateurs = ?";
    $retour = $db -> prepare($query);
    $retour->execute(array($id));

    header("Location: crud.php");
}

?>