<?php
    require 'assets/db/connectdb.php';

    $stmt = $db->prepare('SELECT * FROM utilisateurs WHERE id_utilisateurs = ?');
    $stmt->execute(array($_GET['id']));
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);

    if (isset($_GET['id'])) {
        if (!empty($_POST)) {
            $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
            $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
            $genre = isset($_POST['genre']) ? $_POST['genre'] : '';
            $date = isset($_POST['date']) ? $_POST['date'] : '';
            $mail = isset($_POST['mail']) ? $_POST['mail'] : '';
            $tel = isset($_POST['tel']) ? $_POST['tel'] : '';
            $rue = isset($_POST['rue']) ? $_POST['rue'] : '';
            $cp = isset($_POST['cp']) ? $_POST['cp'] : '';
            $ville = isset($_POST['ville']) ? $_POST['ville'] : '';
            $pays = isset($_POST['pays']) ? $_POST['pays'] : '';
            $role = isset($_POST['role']) ? $_POST['role'] : '';

            $stmt = $db->prepare('UPDATE utilisateurs SET prenom_utilisateurs = ?, nom_utilisateurs = ?, civilite_utilisateurs = ?, datenaissance_utilisateurs = ?, mail_utilisateurs = ?, tel_utilisateurs = ?, rue_utilisateurs = ?, cp_utilisateurs = ?, ville_utilisateur = ?, pays_utilisateurs =  ?, id_roles = ? WHERE id_utilisateurs = ?');
            $stmt->execute(array($prenom, $nom, $genre, $date, $mail, $tel, $rue, $cp, $ville, $pays, $role, $_GET['id']));

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
            <h2 class="titre_h2">Modification d'utilisateur</h2>

            <form action="up_utilisateur.php?id=<?php echo $contact['id_utilisateurs']; ?>" method="post">
                <label for="prenom">Prénom :</label>
                <input type="text" name="prenom" id="prenom" value="<?php echo $contact['prenom_utilisateurs']; ?>" required></input>

                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom" value="<?php echo $contact['nom_utilisateurs']; ?>" required></input>

                <label for="genre">Genre :</label>
                <select name="genre" required>
                    <option value="<?php echo $contact['civilite_utilisateurs']; ?>"><?php echo $contact['civilite_utilisateurs']; ?></option>
                    <option value="femme">Femme</option>
                    <option value="homme">Homme</option>
                </select>

                <label for="date">Date de naissance :</label>
                <input type="date" name="date" id="date" value="<?php echo $contact['datenaissance_utilisateurs']; ?>" required></input>

                <label for="mail">Adresse mail :</label>
                <input type="text" name="mail" id="mail" value="<?php echo $contact['mail_utilisateurs']; ?>" required></input>

                <label for="tel">Téléphone :</label>
                <input type="text" name="tel" id="tel" value="<?php echo $contact['tel_utilisateurs']; ?>" required></input>

                <label for="rue">Adresse :</label>
                <input type="text" name="rue" id="rue" value="<?php echo $contact['rue_utilisateurs']; ?>" required></input>

                <label for="cp">Code postal :</label>
                <input type="text" name="cp" id="cp" value="<?php echo $contact['cp_utilisateurs']; ?>" required></input>

                <label for="ville">Ville :</label>
                <input type="text" name="ville" id="ville" value="<?php echo $contact['ville_utilisateur']; ?>" required></input>

                <label for="pays">Pays :</label>
                <input type="text" name="pays" id="pays" value="<?php echo $contact['pays_utilisateurs']; ?>" required></input>

                <label for="role">Role :</label>
                <select name="role" required>
                    <option value="<?php echo $contact['id_roles']; ?>"><?php echo $contact['id_roles']; ?></option>
                    <option value="admin">1</option>
                    <option value="client">2</option>
                </select>

                <input type="submit" name="submit" id="submit" value="Modifications de l'utilisateur">
            </form>

            <a href="crud.php" class="retour">Retour</a>
        </div>
    </div>
</body>
</html>