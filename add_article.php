<?php
require 'assets/db/auth.php';
forcer_utilisateur_connecte();

require "assets/db/connectdb.php";

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

if ($_SESSION['role'] == 2) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="assets/img/icon/icon.png">

    <title>E-commerce</title>

    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" 
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style> 
</head>
<body>
    <?php include "assets/includes/navbar.php"; ?>

    <div class="container">
        <div class="ajout">
            <h2 class="titre_h2">Ajout d'un article</h2>

            <form action="assets/db/crud/articles/adda.php" method="post" class="form_crud">
                <label for="nom">Nom :</label>
                <input type="text" name="nom">

                <label for="marque">Marque :</label>
                <select name="marque">
                    <?php foreach ($resultmarques as $valuemarques) {
                        echo "<option value=". $valuemarques['id_marques'] .">". $valuemarques['nom_marques'] ."</option>";
                    } ?>
                </select>

                <label for="desc">Description :</label>
                <input type="text" name="desc">

                <label for="prix">Prix :</label>
                <input type="text" name="prix">

                <label for="imgp">Image principale</label>
                <input type="text" name="imgp">

                <label for="imgs1">Image secondaire 1</label>
                <input type="text" name="imgs1">

                <label for="imgs2">Image secondaire 2</label>
                <input type="text" name="imgs2">

                <label for="genre">Genre :</label>
                <select name="genre">
                    <?php foreach ($resultgenres as $valuegenres) {
                        echo "<option value=". $valuegenres['id_genres'] .">". $valuegenres['nom_genres'] ."</option>";
                    } ?>
                </select>

                <label for="categorie">Catégorie :</label>
                <select name="categorie">
                    <?php foreach ($resultc as $valuec) {
                        echo "<option value=". $valuec['id_categories'] .">". $valuec['nom_categories'] ."</option>";
                    } ?>
                </select>

                <label for="s_categorie">Sous catégorie :</label>
                <select name="s_categorie">
                    <?php foreach ($resultsc as $valuesc) {
                        echo "<option value=". $valuesc['id_sous_categories'] .">". $valuesc['nom_sous_categories'] ."</option>";
                    } ?>
                </select>

                <input type="submit" class="sub" value="Ajouter">
            </form>

            <a href="crud.php" class="retour">Retour</a>
        </div>

    </div>
</body>
</html>
<?php 
} else {
    header("Location: index.php");
}
?>