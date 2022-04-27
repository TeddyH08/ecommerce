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

    <title>Categorie</title>

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
    
            <?php

            // ici la requete si on a que le genre
            $sel = "SELECT * FROM articles a, genres g, categories c, sous_categories sc";

            $affichearticle = "";

            // ici la requete si on a que le genre
            if ((isset($_GET['genres'])))
            {
                $sel .= " WHERE a.id_genres = g.id_genres";
                $sel .= " AND a.id_categories = c.id_categories";
                $sel .= " AND a.id_sous_categories = sc.id_sous_categories";
                $sel .= " AND a.id_genres = '".$_GET['genres']."'";

                $requete2 = $db ->prepare($sel);
                $requete2 ->execute();
                $affiche2 = $requete2->fetch();

                $affichearticle .= $affiche2['nom_genres'];
            }

            if ((isset($_GET['categories'])))
            {
                $sel .= " AND a.id_categories = '".$_GET['categories']."'";

                $requete3 = $db ->prepare($sel);
                $requete3 ->execute();
                $affiche3 = $requete3->fetch();

                $affichearticle .= " / ".$affiche3['nom_categories'];
            }

            if ((isset($_GET['sous_cat'])))
            {
                $sel .= " AND a.id_sous_categories = '".$_GET['sous_cat']."'";

                $requete4 = $db ->prepare($sel);
                $requete4 ->execute();
                $affiche4 = $requete4->fetch();

                $affichearticle .= " / ".$affiche4['nom_sous_categories'];
            }

            $requete = $db->prepare($sel);
            $requete->execute();

        ?>

        <h1 style="text-align:center;">
            <?php  echo  $affichearticle; ?>
        </h1>
        <?php
        
        
        
        ?>
<div class="container-filtre-tb">
        <div class="categorie-filtre-tb">
            <!-- filtre -->
            <div class="filtre">



                <form action="" method="GET">
                    <div class="card shadow mt-3">
                        <div class="card-header">
                            <h5>Filtre
                                <button type="submit" class="button-filtre">Chercher</button>
                            </h5>
                        </div>
                        <div class="card-body">
                            <h6>Genre</h6>
                            <hr>
                            <?php
                                    $con = mysqli_connect("localhost","root","","ecommerce");

                                    $brand_query = "SELECT * FROM genres";
                                    $brand_query_run  = mysqli_query($con, $brand_query);

                                    if(mysqli_num_rows($brand_query_run) > 0)
                                    {
                                        foreach($brand_query_run as $brandlist)
                                        {
                                            $checked = [];
                                            if(isset($_GET['genress']))
                                            {
                                                $checked = $_GET['genress'];
                                            }
                                            ?>
                            <div>
                                <input type="checkbox" name="genress[]" value="<?= $brandlist['id_genres']; ?>"
                                    <?php if(in_array($brandlist['id_genres'], $checked)){ echo "checked"; } ?> />
                                <?= $brandlist['nom_genres']; ?>

                            </div>
                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "No Brands Found";
                                    }
                                ?>
                        </div>
                    </div>
                    <!-- TEST -->
                    <div class="card-body">
                            <h6>sous catégories</h6>
                            <hr>
                            <?php
                                    $con = mysqli_connect("localhost","root","","ecommerce");

                                    $brand_query = "SELECT * FROM sous_categories";
                                    $brand_query_run  = mysqli_query($con, $brand_query);

                                    if(mysqli_num_rows($brand_query_run) > 0)
                                    {
                                        foreach($brand_query_run as $brandlist)
                                        {
                                            $checked = [];
                                            if(isset($_GET['sous_cat2']))
                                            {
                                                $checked = $_GET['sous_cat2'];
                                            }
                                            ?>
                            <div>
                                <input type="checkbox" name="sous_cat2[]" value="<?= $brandlist['id_sous_categories']; ?>"
                                    <?php if(in_array($brandlist['id_sous_categories'], $checked)){ echo "checked"; } ?> />
                                <?= $brandlist['nom_sous_categories']; ?>

                            </div>
                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "No Brands Found";
                                    }
                                ?>
                        </div>
                    </div>
                    <!-- RANGE PRIX -->
                    <div class="card-body">            
                    
                        <div class="slidecontainer">
                        <p>Choisis ton prix max</p>
                            <input type="range" min="1" max="500" value="500" class="slider" id="myRange" style="background-color:#000; height:4px">
                            <p>Prix: <span id="demo"></span>€ max</p>
                        </div>
                    </div>

                    
                </form>
                
                
                

            </div>

            <!-- FIN filtre -->
            <!-- <div class="container cat"> -->


            <div class="categorie-tb">

                <?php
                                if ((isset($_GET['genress'])) && (empty($_GET['sous_cat2'])))
                                {
                                    $branchecked = [];
                                    $branchecked = $_GET['genress'];
                                    foreach($branchecked as $rowbrand)
                                    {
                                        $products = "SELECT * FROM articles WHERE id_genres IN ($rowbrand)";
                                        $products_run = mysqli_query($con, $products);
                                        if(mysqli_num_rows($products_run) > 0)
                                        {
                                            foreach($products_run as $proditems) :
                                                ?>
                <div class="test-tb">
                    <div class="border">
                        <a href="article.php?id_article=<?= $proditems['id_articles'];?>">
                            <ul>
                                <li><img src="assets/img/<?= $proditems['image1_articles']; ?>"></li>
                                <li>
                                    <h6><?= $proditems['nom_articles']; ?></h6>
                                </li>
                                <li>
                                    <h6><?= $proditems['prix_articles']; ?>€</h6>
                                </li>
                            </ul>
                        </a>
                    </div>
                </div>
                <?php
                                            endforeach;
                                        }
                                    
                                }
                                }


                                if ((empty($_GET['genress'])) && (isset($_GET['sous_cat2'])))
                                {
                                    $branchecked = [];
                                    // $branchecked = $_GET['genress'];
                                    $branchecked2 = $_GET['sous_cat2'];
                                    // foreach($branchecked as $rowbrand)
                                    // {
                                        foreach($branchecked2 as $rowbrand2)
                                    {

                                        $products = "SELECT * FROM articles WHERE id_sous_categories IN ($rowbrand2)";
                                        $products_run = mysqli_query($con, $products);
                                        if(mysqli_num_rows($products_run) > 0)
                                        {
                                            foreach($products_run as $proditems) :
                                                ?>
                <div class="test-tb">
                    <div class="border">
                        <a href="article.php?id_article=<?= $proditems['id_articles'];?>">
                            <ul>
                                <li><img src="assets/img/<?= $proditems['image1_articles']; ?>"></li>
                                <li>
                                    <h6><?= $proditems['nom_articles']; ?></h6>
                                </li>
                                <li>
                                    <h6><?= $proditems['prix_articles']; ?>€</h6>
                                </li>
                            </ul>
                        </a>
                    </div>
                </div>
                <?php
                                            endforeach;
                                        }
                                    // }
                                }
                                }



                                if ((isset($_GET['genress'])) && (isset($_GET['sous_cat2'])))
                                {
                                    $branchecked = [];
                                    $branchecked = $_GET['genress'];
                                    $branchecked2 = $_GET['sous_cat2'];
                                    foreach($branchecked as $rowbrand)
                                    {
                                        foreach($branchecked2 as $rowbrand2)
                                    {

                                        $products = "SELECT * FROM articles WHERE id_genres IN ($rowbrand) AND id_sous_categories IN ($rowbrand2)";
                                        $products_run = mysqli_query($con, $products);
                                        if(mysqli_num_rows($products_run) > 0)
                                        {
                                            foreach($products_run as $proditems) :
                                                ?>
                <div class="test-tb">
                    <div class="border">
                        <a href="article.php?id_article=<?= $proditems['id_articles'];?>">
                            <ul>
                                <li><img src="assets/img/<?= $proditems['image1_articles']; ?>"></li>
                                <li>
                                    <h6><?= $proditems['nom_articles']; ?></h6>
                                </li>
                                <li>
                                    <h6><?= $proditems['prix_articles']; ?>€</h6>
                                </li>
                            </ul>
                        </a>
                    </div>
                </div>
                <?php
                                            endforeach;
                                        }
                                    }
                                }
                                }
                                
                            ?>

                <?php
            
                    
                if (isset($_GET['genres'])){

                foreach ($requete as $row)
                {
                    
                    
                ?>

                <div class="categorie-1">

                    <ul>
                        <a href="article.php?id_article=<?php echo $row['id_articles'];?>">
                            <li><img src="assets/img/<?php echo $row['image1_articles'];?>" alt=""></li>
                            <li>
                                <?php
                            echo $row['nom_articles'];
                            ?>
                            </li>
                            <!-- <li>COULEUR</li> -->
                            <li>
                                <?php
                            echo $row['prix_articles'];
                            ?>€</li>
                        </a>
                    </ul>
                </div>
                <?php
                }
                }
                // else {echo "Aucun article trouvé";}
                ?>
            </div>
        </div>
    </div>
</div>
 
<script src="assets/js/sliderprix.js"></script>
<?php include "assets/includes/footer.php"; ?>
    

</body>

</html>
