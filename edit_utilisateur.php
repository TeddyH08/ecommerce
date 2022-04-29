<?php

require 'assets/db/auth.php';
forcer_utilisateur_connecte();

require "assets/db/connectdb.php";

if ($_SESSION['role'] == 2) {

    require 'assets/db/crud/users/lireu.php';
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
        <div class="edit">
            <h2 class="titre_h2">Infos de l'utilisateur</h2>

            <div class="cont">
                <div class="inf">
                    <p>Prénom :</p>
                    <p>Nom :</p>
                    <p>Genre :</p>
                    <p>Adresse mail :</p>
                    <p>Date de naissance :</p>
                    <p>Téléphone :</p>
                    <p>Rue :</p>
                    <p>Code Postal :</p>
                    <p>Ville :</p>
                    <p>Pays :</p>
                    <p>Role :</p>
                </div>

                <div>
                    <p><?php echo $resultat['prenom_utilisateurs'] ?></p>
                    <p><?php echo $resultat['nom_utilisateurs'] ?></p>
                    <p><?php echo $resultat['civilite_utilisateurs'] ?></p>
                    <p><?php echo $resultat['mail_utilisateurs'] ?></p>
                    <p><?php echo $resultat['datenaissance_utilisateurs'] ?></p>
                    <p><?php echo $resultat['tel_utilisateurs'] ?></p>
                    <p><?php echo $resultat['rue_utilisateurs'] ?></p>
                    <p><?php echo $resultat['cp_utilisateurs'] ?></p>
                    <p><?php echo $resultat['ville_utilisateurs'] ?></p>
                    <p><?php echo $resultat['pays_utilisateurs'] ?></p>
                    <p><?php echo $resultat['id_roles'] ?></p>
                </div>
            </div>

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