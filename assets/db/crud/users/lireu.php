<?php

require 'assets/db/connectdb.php';

$query = "SELECT * FROM utilisateurs WHERE id_utilisateurs = ?";
$retour = $db -> prepare($query);
$retour->execute(array($_GET['id']));

$resultat = $retour->fetch(PDO::FETCH_ASSOC);

?>