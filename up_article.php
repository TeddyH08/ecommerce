<?php
    require 'assets/db/connectdb.php';

    $stmt = $db->prepare('SELECT * FROM articles WHERE id_articles = ?');
    $stmt->execute(array($_GET['id']));
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);

    if (isset($_GET['id'])) {
        if (!empty($_POST)) {
            $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
            $marque = isset($_POST['marque']) ? $_POST['marque'] : '';
            $desc = isset($_POST['desc']) ? $_POST['desc'] : '';
            $prix = isset($_POST['prix']) ? $_POST['prix'] : '';
            $genre = isset($_POST['genre']) ? $_POST['genre'] : '';
            $categorie = isset($_POST['categorie']) ? $_POST['categorie'] : '';
            $s_categorie = isset($_POST['s_categorie']) ? $_POST['s_categorie'] : '';

            $stmt = $db->prepare('UPDATE articles SET nom_articles = ?, marques_articles = ?, description_articles = ?, prix_articles = ?, genres_articles = ?, id_categories = ?, id_sous_categories = ? WHERE id_articles = ?');
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
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom" value="<?php echo $contact['nom_articles']; ?>" required></input>

                <label for="marque">Marque :</label>
                <input type="text" name="marque" id="marque" value="<?php echo $contact['marques_articles']; ?>" required></input>

                <label for="desc">Description :</label>
                <input type="text" name="desc" id="desc" value="<?php echo $contact['description_articles']; ?>" required></input>

                <label for="prix">Prix :</label>
                <input type="number" name="prix" id="prix" value="<?php echo $contact['prix_articles']; ?>" required></input>

                <label for="genre">Genre :</label>
                <input type="text" name="genre" id="genre" value="<?php echo $contact['genres_articles']; ?>" required></input>

                <label for="categorie">Catégorie :</label>
                <select name="categorie" required>
                    <option value="<?php echo $contact['id_categories']; ?>"><?php echo $contact['id_categories']; ?></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>

                <label for="s_categorie">Sous catégorie :</label>
                <select name="s_categorie" required>
                    <option value="<?php echo $contact['id_sous_categories']; ?>"><?php echo $contact['id_sous_categories']; ?></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>

                <input type="submit" name="submit" id="submit" value="Modifications de l'utilisateur">
            </form>

            <a href="crud.php" class="retour">Retour</a>
        </div>
    </div>
</body>
</html>