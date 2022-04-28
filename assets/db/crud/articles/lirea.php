<?php

require 'assets/db/connectdb.php';

$query = "SELECT * FROM articles WHERE id_articles = ?";
$retour = $db -> prepare($query);
$retour->execute(array($_GET['id']));
$resultat = $retour->fetch(PDO::FETCH_ASSOC);

$sqlRequestmarques = ("SELECT * FROM marques");
$pdoStatmarques = $db -> prepare($sqlRequestmarques);
$pdoStatmarques->execute();
$resultmarques = $pdoStatmarques->fetchAll(PDO::FETCH_ASSOC);

$sqlRequestgenres = ("SELECT * FROM genres");
$pdoStatgenres = $db -> prepare($sqlRequestgenres);
$pdoStatgenres->execute();
$resultgenres = $pdoStatgenres->fetchAll(PDO::FETCH_ASSOC);

$sqlRequestc = ("SELECT * FROM categories");
$pdoStatc = $db -> prepare($sqlRequestc);
$pdoStatc->execute();
$resultc = $pdoStatc->fetchAll(PDO::FETCH_ASSOC);

$sqlRequestsc = ("SELECT * FROM sous_categories");
$pdoStatsc = $db -> prepare($sqlRequestsc);
$pdoStatsc->execute();
$resultsc = $pdoStatsc->fetchAll(PDO::FETCH_ASSOC);

?>