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

            <form action="assets/db/crud/users/adda.php" method="post" class="form_crud">
                <label for="nom">Nom :</label>
                <input type="text" name="nom">

                <label for="marque">Marque :</label>
                <input type="text" name="marque">

                <label for="desc">Description :</label>
                <input type="text" name="desc">

                <label for="prix">Prix :</label>
                <input type="text" name="prix">

                <label for="genre">Genre :</label>
                <input type="text" name="genre">

                <label for="categorie">Catégorie :</label>
                <select name="categorie">
                    <option value="homme">1</option>
                    <option value="femme">2</option>
                </select>

                <label for="s_categorie">Sous catégorie :</label>
                <select name="s_categorie">
                    <option value="hauts">1</option>
                    <option value="pantalons">2</option>
                </select>

                <input type="submit" class="sub" value="Ajouter">
            </form>

            <a href="crud.php">Retour</a>
        </div>

    </div>
</body>
</html>