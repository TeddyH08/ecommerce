<?php 
include("assets/db/connectdb.php");
session_start(); 
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="assets/img/icon/icon.png">

    <title>Nouveautés</title>

    <link rel="stylesheet" href="assets/style/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
    <script src="https://kit.fontawesome.com/eaf2c4b5d9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" 4
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>


</head>

<body>
    <?php include "assets/includes/navbar.php"; ?>



<div class="container cat">
    <h1>Les nouveautés</h1>
<div class="nouveaute-tb">
        <?php
        $sel = "SELECT * FROM articles WHERE id_categories != 3 ORDER BY id_articles DESC LIMIT 15";
        $requete = $db ->prepare($sel);
        $requete ->execute();
        ?>
        <?php
        foreach ($requete as $row){
        ?>
        
            <div class="nouveaute-1">
            <a href="article.php?id_article=<?php echo $row['id_articles'];?>"><ul>
                    <li><img src="assets/img/<?php echo $row['image1_articles'];?>" alt=""></li>
                    <li>                                <?php
                            echo $row['nom_articles'];
                            ?></li>
                    <!-- <li>COULEUR</li> -->
                    <li>                                <?php
                            echo $row['prix_articles'];
                            ?>€</li>
                </ul></a>
            </div>

            <?php
            }
            ?>
        </div>
        

</div>

        </body>
        </html>