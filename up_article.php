<?php
    require 'assets/db/auth.php';
    forcer_utilisateur_connecte();
    
    require "assets/db/connectdb.php";
    
    if ($_SESSION['role'] == 2) {
    
    $stmt = $db->prepare('SELECT * FROM articles WHERE id_articles = ?');
    $stmt->execute(array($_GET['id']));
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);

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

    if (isset($_GET['id'])) {
        if (!empty($_POST)) {
            $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
            $marque = isset($_POST['marque']) ? $_POST['marque'] : '';
            $desc = isset($_POST['desc']) ? $_POST['desc'] : '';
            $prix = isset($_POST['prix']) ? $_POST['prix'] : '';
            $genre = isset($_POST['genre']) ? $_POST['genre'] : '';
            $categorie = isset($_POST['categorie']) ? $_POST['categorie'] : '';
            $s_categorie = isset($_POST['s_categorie']) ? $_POST['s_categorie'] : '';

            $stmt = $db->prepare('UPDATE articles SET nom_articles = ?, id_marques = ?, description_articles = ?, prix_articles = ?, id_genres = ?, id_categories = ?, id_sous_categories = ? WHERE id_articles = ?');
            $stmt->execute(array($nom, $marque, $desc, $prix, $genre, $categorie, $s_categorie, $_GET['id']));

            header('Location: crud.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
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
        <div class="modif">
            <h2 class="titre_h2">Modification d'article</h2>

            <form action="up_article.php?id=<?php echo $contact['id_articles']; ?>" method="post">
                <label for="nom" class="titr_lac">Nom :</label>
                <input type="text" name="nom" id="nom" class="titr_inc" value="<?php echo $contact['nom_articles']; ?>" required></input>

                <label for="marque" class="titr_lac">Marque :</label>
                <select name="marque" class="titr_inc" required>
                    <option value="<?php echo $contact['id_marques']; ?>">
                        <?php foreach ($resultmarques as $valuemarques) {
                            if ($contact['id_marques'] == $valuemarques['id_marques']) {
                                echo $valuemarques['nom_marques'];
                            }
                        } ?>
                    </option>
                    <?php foreach ($resultmarques as $valuemarques) {
                        echo "<option value=". $valuemarques['id_marques'] .">". $valuemarques['nom_marques'] ."</option>";
                    } ?>
                </select>

                <label for="desc" class="titr_lac">Description :</label>
                <input type="text" name="desc" id="desc" class="titr_inc" value="<?php echo $contact['description_articles']; ?>" required></input>

                <label for="prix" class="titr_lac">Prix :</label>
                <input type="number" name="prix" id="prix" class="titr_inc" value="<?php echo $contact['prix_articles']; ?>" required></input>

                <label for="imgp" class="titr_lac">Image principale :</label>
                <input type="text" name="imgp" id="imgp" class="titr_inc" value="<?php echo $contact['image1_articles']; ?>" required></input>

                <label for="imgs1" class="titr_lac">Image secondaire 1 :</label>
                <input type="text" name="imgs1" id="imgs1" class="titr_inc" value="<?php echo $contact['image2_articles']; ?>" required></input>

                <label for="imgs2" class="titr_lac">Image secondaire 2 :</label>
                <input type="text" name="imgs2" id="imgs2" class="titr_inc" value="<?php echo $contact['image3_articles']; ?>" required></input>

                <label for="genre" class="titr_lac">Genre :</label>
                <select name="genre" class="titr_inc" required>
                    <option value="<?php echo $contact['id_categories']; ?>">
                        <?php foreach ($resultgenres as $valuegenres) {
                            if ($contact['id_genres'] == $valuegenres['id_genres']) {
                                echo $valuegenres['nom_genres'];
                            }
                        } ?>
                    </option>
                    <?php foreach ($resultgenres as $valuegenres) {
                        echo "<option value=". $valuegenres['id_genres'] .">". $valuegenres['nom_genres'] ."</option>";
                    } ?>
                </select>

                <label for="categorie" class="titr_lac">Catégorie :</label>
                <select name="categorie" class="titr_inc" required>
                    <option value="<?php echo $contact['id_categories']; ?>">
                        <?php foreach ($resultc as $valuec) {
                            if ($contact['id_categories'] == $valuec['id_categories']) {
                                echo $valuec['nom_categories'];
                            }
                        } ?>
                    </option>
                    <?php foreach ($resultc as $valuec) {
                        echo "<option value=". $valuec['id_categories'] .">". $valuec['nom_categories'] ."</option>";
                    } ?>
                </select>

                <label for="s_categorie" class="titr_lac">Sous catégorie :</label>
                <select name="s_categorie" class="titr_inc" required>
                    <option value="<?php echo $contact['id_sous_categories']; ?>">
                        <?php foreach ($resultsc as $valuesc) {
                            if ($contact['id_sous_categories'] == $valuesc['id_sous_categories']) {
                                echo $valuesc['nom_sous_categories'];
                            }
                        } ?>
                    </option>
                    <?php foreach ($resultsc as $valuesc) {
                        echo "<option value=". $valuesc['id_sous_categories'] .">". $valuesc['nom_sous_categories'] ."</option>";
                    } ?>
                </select>

                <input type="submit" name="submit" id="submit" class="titr_inc" value="Modifications de l'utilisateur">
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