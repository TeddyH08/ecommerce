<?php

require 'assets/db/connectdb.php';
$id=0; 
if(!empty($_GET['id'])){ 
    $id=$_REQUEST['id']; 
} 
if(!empty($_POST)){ 
    $id= $_POST['id']; 

    $query = "DELETE FROM articles WHERE articles . id_articles = ?";
    $retour = $db -> prepare($query);
    $retour->execute(array($id));

    header("Location: crud.php");
}

?>