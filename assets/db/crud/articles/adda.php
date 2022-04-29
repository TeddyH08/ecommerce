<?php

require '../../connectdb.php';


    if(isset($_POST)){
        if(isset($_POST["nom"]) && (!empty($_POST["nom"]))){
            $nom = htmlspecialchars($_POST["nom"]);            
        }
        if(isset($_POST["marque"]) && (!empty($_POST["marque"]))){
            $marque = htmlspecialchars($_POST["marque"]);
        }
        if(isset($_POST["desc"]) && (!empty($_POST["desc"]))){
            $desc = htmlspecialchars($_POST["desc"]);
        }
        if(isset($_POST["prix"]) && (!empty($_POST["prix"]))){
            $prix = htmlspecialchars($_POST["prix"]);
        }
        if(isset($_POST["imgp"]) && (!empty($_POST["imgp"]))){
            $prix = htmlspecialchars($_POST["imgp"]);
        }
        if(isset($_POST["imgs1"]) && (!empty($_POST["imgs1"]))){
            $prix = htmlspecialchars($_POST["imgs1"]);
        }
        if(isset($_POST["imgs2"]) && (!empty($_POST["imgs2"]))){
            $prix = htmlspecialchars($_POST["imgs2"]);
        }
        if(isset($_POST["genre"]) && (!empty($_POST["genre"]))){
            $genre = htmlspecialchars($_POST["genre"]);
        }
        if(isset($_POST["categorie"]) && (!empty($_POST["categorie"]))){
            $categorie = htmlspecialchars($_POST["categorie"]);
        }
        if(isset($_POST["s_categorie"]) && (!empty($_POST["s_categorie"]))){
            $s_categorie = htmlspecialchars($_POST["s_categorie"]);
        }
    }else{
        
    }

    $pdoStat = $db->prepare('SELECT * FROM articles WHERE nom_articles = ? AND marques_articles = ? AND description_articles = ? AND prix_articles = ? AND genres_articles = ? AND id_categories = ? AND id_sous_categories = ?');

    $pdoStat->execute(array($nom, $marque, $desc, $prix, $genre, $categorie, $s_categorie));

    $row = $pdoStat->fetch(PDO::FETCH_ASSOC);

    if ($nom == $row['nom_articles'] 
        && $marque == $row['marques_articles'] 
        && $desc == $row['description_articles'] 
        && $prix == $row['prix_articles']
        && $genre == $row['genres_articles']
        && $categorie == $row['id_categories']
        && $s_categorie == $row['id_sous_categories']
        ) {
            echo "Article déjà existant !!";
    } else {
        $sqlRequest = "INSERT INTO `articles` (`nom_articles`, `marques_articles`, `description_articles`, `prix_articles`, `genres_articles`, `id_categories`, `id_sous_categories`) 
                        VALUES (?,?,?,?,?,?,?);";
        $pdoStat = $db -> prepare($sqlRequest);
        $pdoStat->execute(array($nom,$marque,$desc,$prix,$genre,$categorie,$s_categorie));
        $row = $pdoStat->fetchall(PDO::FETCH_ASSOC);
        header('Location: ../../../../add_article.php');
    }

    ?>