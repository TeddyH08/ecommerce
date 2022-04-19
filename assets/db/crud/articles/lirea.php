<?php

require 'assets/db/connectdb.php';

$query = "SELECT * FROM articles WHERE id_articles = ?";
$retour = $db -> prepare($query);
$retour->execute(array($_GET['id']));

$resultat = $retour->fetch(PDO::FETCH_ASSOC);

?>