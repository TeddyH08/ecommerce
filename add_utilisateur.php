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
            <h2 class="titre_h2">Ajout d'un utilisateur</h2>

            <form action="assets/db/crud/users/addu.php" method="post" class="form_crud">
                <label for="prenom">Prénom :</label>
                <input type="text" name="prenom">

                <label for="nom">Nom :</label>
                <input type="text" name="nom">

                <label for="genre">Genre :</label>
                <select name="genre">
                    <option value="femme">Femme</option>
                    <option value="homme">Homme</option>
                </select>

                <label for="date">Date de naissance :</label>
                <input type="date" name="date">

                <label for="mail">Adresse mail :</label>
                <input type="mail" name="mail">

                <label for="tel">Téléphone :</label>
                <input type="number" name="tel">

                <label for="mdp">Mot de passe :</label>
                <input type="password" name="mdp">

                <label for="mdp1">Confirmation du mot de passe :</label>
                <input type="password" name="mdp1">

                <label for="rue">Adresse :</label>
                <input type="text" name="rue">

                <label for="cp">Code postal :</label>
                <input type="text" name="cp">

                <label for="ville">Ville :</label>
                <input type="text" name="ville">
                
                <label for="pays">Pays :</label>
                <input type="text" name="pays">

                <label for="role">Rôle :</label>
                <select name="role">
                    <option value="admin">1</option>
                    <option value="client">2</option>
                </select>

                <input type="submit" class="sub" value="Ajouter">
            </form>

            <a href="crud.php">Retour</a>
        </div>

    </div>
</body>
</html>