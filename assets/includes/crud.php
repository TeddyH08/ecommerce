<?php
require 'assets/db/auth.php';
forcer_utilisateur_connecte();

require "assets/db/connectdb.php";

if ($_SESSION['role'] == 2) {   

    $sqlRequestusers = ("SELECT * FROM utilisateurs");
    $pdoStatusers = $db -> prepare($sqlRequestusers);
    $pdoStatusers->execute();
    $resultusers = $pdoStatusers->fetchAll(PDO::FETCH_ASSOC);

    $sqlRequestroles = ("SELECT * FROM roles");
    $pdoStatroles = $db -> prepare($sqlRequestroles);
    $pdoStatroles->execute();
    $resultroles = $pdoStatroles->fetchAll(PDO::FETCH_ASSOC);

    $sqlRequestarticle = ("SELECT * FROM articles");
    $pdoStatarticle = $db -> prepare($sqlRequestarticle);
    $pdoStatarticle->execute();
    $resultarticle = $pdoStatarticle->fetchAll(PDO::FETCH_ASSOC);

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

<div class="container">
    <div class="crud">
        <h2 class="titre_h2">Bienvenue dans le CRUD</h2>

        <table id="table_id" class="display">
            <thead>
                <h2 class="title_h2">Données des Utilisateurs :</h2>

                <a href="add_utilisateur.php" class="add"><i class="fa-solid fa-plus"></i> Ajouter</a>

                <tr>
                    <th>Id de l'utilisateur</th>
                    <th>Prénom de l'utilisateur</th>
                    <th>Nom de l'utilisateur</th>
                    <th>Genre de l'utilisateur</th>
                    <th>Adresse mail de l'utilisateur</th>
                    <th>Date de naissance de l'utilisateur</th>
                    <th>Téléphone de l'utilisateur</th>
                    <th>Rue de l'utilisateur</th>
                    <th>Code postal de l'utilisateur</th>
                    <th>Ville de l'utilisateur</th>
                    <th>Pays de l'utilisateur</th>
                    <th>Role de l'utilisateur</th>
                    <th>Lire</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($resultusers as $value) { ?>
                    <tr>
                        <td><?php echo $value['id_utilisateurs']; ?></td>
                        <td><?php echo $value['prenom_utilisateurs']; ?></td>
                        <td><?php echo $value['nom_utilisateurs']; ?></td>
                        <td><?php echo $value['civilite_utilisateurs']; ?></td>
                        <td><?php echo $value['mail_utilisateurs']; ?></td>
                        <td><?php echo $value['datenaissance_utilisateurs']; ?></td>
                        <td><?php echo $value['tel_utilisateurs']; ?></td>
                        <td><?php echo $value['rue_utilisateurs']; ?></td>
                        <td><?php echo $value['cp_utilisateurs']; ?></td>
                        <td><?php echo $value['ville_utilisateurs']; ?></td>
                        <td><?php echo $value['pays_utilisateurs']; ?></td>
                        <td><?php 
                                foreach ($resultroles as $valueroles) {
                                    if ($value['id_roles'] == $valueroles['id_roles']) {
                                        echo $valueroles['nom_roles'];
                                    }
                                }
                             ?></td>
                        <td><a href="edit_utilisateur.php?id=<?php echo $value['id_utilisateurs']; ?>" class="lire"><i class="fa-brands fa-readme"></i></a></td>
                        <td><a href="up_utilisateur.php?id=<?php echo $value['id_utilisateurs']; ?>" class="up"><i class="fa-solid fa-pencil"></i></a></td>
                        <td><a href="delete_utilisateur.php?id=<?php echo $value['id_utilisateurs']; ?>" class="suppr"><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <table id="table2_id" class="display">
            <thead>
                <h2 class="title_h2">Données des Articles :</h2>

                <a href="add_article.php" class="add"><i class="fa-solid fa-plus"></i> Ajouter</a>

                <tr>
                    <th>Id de l'article</th>
                    <th>Nom de l'article</th>
                    <th>Marque de l'article</th>
                    <th>Description de l'article</th>
                    <th>Prix de l'article</th>
                    <th>Image principale</th>
                    <th>Image secondaire 1</th>
                    <th>Image secondaire 2</th>
                    <th>Genre de l'article</th>
                    <th>Catégorie de l'article</th>
                    <th>Sous catégorie de l'article</th>
                    <th>Lire</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($resultarticle as $value) { ?>
                    <tr>
                        <td><?php echo $value['id_articles']; ?></td>
                        <td><?php echo $value['nom_articles']; ?></td>
                        <td><?php
                                foreach ($resultmarques as $valuemarques) {
                                    if ($value['id_marques'] == $valuemarques['id_marques']) {
                                        echo $valuemarques['nom_marques'];
                                    }
                                }
                            ?>
                        </td>
                        <td><?php echo $value['description_articles']; ?></td>
                        <td><?php echo $value['prix_articles']; ?></td>
                        <td><?php echo $value['image1_articles']; ?></td>
                        <td><?php echo $value['image2_articles']; ?></td>
                        <td><?php echo $value['image3_articles']; ?></td>
                        <td><?php
                                foreach ($resultgenres as $valuegenres) {
                                    if ($value['id_genres'] == $valuegenres['id_genres']) {
                                        echo $valuegenres['nom_genres'];
                                    }
                                }
                            ?>
                        </td>
                        <td><?php
                                foreach ($resultc as $valuec) {
                                    if ($value['id_categories'] == $valuec['id_categories']) {
                                        echo $valuec['nom_categories'];
                                    }
                                }
                            ?>
                        </td>
                        <td><?php 
                                foreach ($resultsc as $valuesc) {
                                    if ($value['id_sous_categories'] == $valuesc['id_sous_categories']) {
                                        echo $valuesc['nom_sous_categories'];
                                    }
                                }
                            ?>
                        </td>
                        <td><a href="edit_article.php?id=<?php echo $value['id_articles']; ?>" class="lire"><i class="fa-brands fa-readme"></i></a></td>
                        <td><a href="up_article.php?id=<?php echo $value['id_articles']; ?>" class="up"><i class="fa-solid fa-pencil"></i></a></td>
                        <td><a href="delete_article.php?id=<?php echo $value['id_articles']; ?>" class="suppr"><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <a href="Accueil" class="retour">Retour</a> 
    </div> 
</div>
<?php 
} else {
    header("Location: index.php");
}
?>