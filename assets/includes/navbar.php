<header>
    <div class="top">
        <div class="reseaux">
            <?php 

require_once 'assets/db/connectdb.php';

            if (isset($_SESSION['role']) >= 2 ){
                echo '<a href="crud" class="users">Admin</a>';
            } 
            
            ?>
        </div>
            
        <div class="blank">
        <?php 
        
            if(isset($_SESSION['role']) > 0 ){
                echo "<p class='userss'>Bonjour ".$_SESSION['prenom']." ".$_SESSION['nom']."</p>";
            } 
            
            ?>
            
        </div>
            <?php 

            if(isset($_SESSION['role']) > 0 ){
            ?>  <div class="user">
                <ul>
                    <a href="deconnexion"><li class="users">Déconnexion</li></a>
                </ul>
            </div>
            <?php
            }else { ?>
            <div class="user">
                <ul>
                    <a href="inscription"><li class="users">S'inscrire</li></a>
                    <a href="connexion"><li class="users">S'identifier</li></a>
                </ul>
            </div>
                <?php  
            }
            
            ?>

    </div>

    <nav class="navbar">
        <div class="logo">
                <a href="index.php"><img src="assets/img/logo.jpg" class="log"></a>
        </div>

        <div id="nav" class="respon">
            <div class="menu">
                <ul>
                    <li class="categorie dropdown">
                        <a href="categorie.php">Nouveautés</a>

                        <div class="dd-mnu">
                            <ul class="dropdown-menu">
                                <li class="sous-cat animate__animated animate__fadeIn">
                                    <a href="nouveaux/hauts" class="hov">Hauts</a>
                                    <ul class="sous-sous-cat">
                                        <li class="sous-sous-cat_redirect hov"><a href="">T-shirts</a></li>
                                        <li class="sous-sous-cat_redirect hov"><a href="">Pulls</a></li>
                                        <li class="sous-sous-cat_redirect hov"><a href="">Veste</a></li>
                                    </ul>
                                </li>

                                <div class="separator animate__animated animate__fadeIn"></div>

                                <li class="sous-cat animate__animated animate__fadeIn">
                                    <a href="nouveaux/pantalons" class="hov">Pantalons</a>
                                    <ul class="sous-sous-cat">
                                        <li class="sous-sous-cat_redirect hov"><a href="">Joggings</a></li>
                                        <li class="sous-sous-cat_redirect hov"><a href="">Jeans</a></li>
                                        <li class="sous-sous-cat_redirect hov"><a href="">Cargo</a></li>
                                    </ul>
                                </li>

                                <div class="separator animate__animated animate__fadeIn"></div>

                                <li class="sous-cat animate__animated animate__fadeIn">
                                    <a href="nouveaux/chaussures" class="hov">Chaussures</a>
                                    <ul class="sous-sous-cat">
                                        <li class="sous-sous-cat_redirect hov"><a href="">Baskets</a></li>
                                        <li class="sous-sous-cat_redirect hov"><a href="">Boots</a></li>
                                        <li class="sous-sous-cat_redirect hov"><a href="">Villes</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="categorie dropdown">
                        <a href="categorie.php?genres=1">Hommes</a>

                        <div class="dd-mnu">
                            <ul class="dropdown-menu">
                                <li class="sous-cat animate__animated animate__fadeIn">
                                    <a href="categorie.php?genres=1&categories=1" class="hov">Hauts</a>
                                    <ul class="sous-sous-cat">
                                    <li class="sous-sous-cat_redirect hov"><a href="categorie.php?genres=1&categories=1&sous_cat=1">T-shirts</a></li>
                                        <li class="sous-sous-cat_redirect hov"><a href="categorie.php?genres=1&categories=1&sous_cat=2">Pulls</a></li>
                                        <li class="sous-sous-cat_redirect hov"><a href="categorie.php?genres=1&categories=1&sous_cat=3">Veste</a></li>
                                    </ul>
                                </li>

                                <div class="separator animate__animated animate__fadeIn"></div>

                                <li class="sous-cat animate__animated animate__fadeIn">
                                    <a href="categorie.php?genres=1&categories=2" class="hov">Pantalons</a>
                                    <ul class="sous-sous-cat">
                                        <li class="sous-sous-cat_redirect hov"><a href="categorie.php?genres=1&categories=2&sous_cat=4">Joggings</a></li>
                                        <li class="sous-sous-cat_redirect hov"><a href="categorie.php?genres=1&categories=2&sous_cat=5">Jeans</a></li>
                                        <li class="sous-sous-cat_redirect hov"><a href="categorie.php?genres=1&categories=2&sous_cat=6">Cargo</a></li>
                                    </ul>
                                </li>

                                <div class="separator animate__animated animate__fadeIn"></div>

                                <li class="sous-cat animate__animated animate__fadeIn">
                                    <a href="categorie.php?genres=1&categories=3" class="hov">Chaussures</a>
                                    <ul class="sous-sous-cat">
                                        <li class="sous-sous-cat_redirect hov"><a href="categorie.php?genres=1&categories=3&sous_cat=7">Baskets</a></li>
                                        <li class="sous-sous-cat_redirect hov"><a href="categorie.php?genres=1&categories=3&sous_cat=8">Boots</a></li>
                                        <li class="sous-sous-cat_redirect hov"><a href="categorie.php?genres=1&categories=3&sous_cat=9">Villes</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="categorie dropdown">
                    <a href="categorie.php?genres=2">Femmes</a>

<div class="dd-mnu">
    <ul class="dropdown-menu">
        <li class="sous-cat animate__animated animate__fadeIn">
            <a href="categorie.php?genres=2&categories=1" class="hov">Hauts</a>
            <ul class="sous-sous-cat">
                <li class="sous-sous-cat_redirect hov"><a href="categorie.php?genres=2&categories=1&sous_cat=1">T-shirts</a></li>
                <li class="sous-sous-cat_redirect hov"><a href="categorie.php?genres=2&categories=1&sous_cat=2">Pulls</a></li>
                <li class="sous-sous-cat_redirect hov"><a href="categorie.php?genres=2&categories=1&sous_cat=3">Veste</a></li>
            </ul>
        </li>

        <div class="separator animate__animated animate__fadeIn"></div>

        <li class="sous-cat animate__animated animate__fadeIn">
            <a href="categorie.php?genres=2&categories=2" class="hov">Pantalons</a>
            <ul class="sous-sous-cat">
                <li class="sous-sous-cat_redirect hov"><a href="categorie.php?genres=2&categories=2&sous_cat=4">Joggings</a></li>
                <li class="sous-sous-cat_redirect hov"><a href="categorie.php?genres=2&categories=2&sous_cat=5">Jeans</a></li>
                <li class="sous-sous-cat_redirect hov"><a href="categorie.php?genres=2&categories=3&sous_cat=6">Cargo</a></li>
            </ul>
        </li>

        <div class="separator animate__animated animate__fadeIn"></div>

        <li class="sous-cat animate__animated animate__fadeIn">
            <a href="categorie.php?genres=2&categories=3" class="hov">Chaussures</a>
            <ul class="sous-sous-cat">
                <li class="sous-sous-cat_redirect hov"><a href="categorie.php?genres=2&categories=3&sous_cat=7">Baskets</a></li>
                <li class="sous-sous-cat_redirect hov"><a href="categorie.php?genres=2&categories=3&sous_cat=8">Boots</a></li>
                <li class="sous-sous-cat_redirect hov"><a href="categorie.php?genres=2&categories=3&sous_cat=9">Villes</a></li>
            </ul>
        </li>
    </ul>
</div>
</li>

<li class="categorie dropdown">
<a href="categorie.php?genres=3">Enfants</a>

<div class="dd-mnu">
    <ul class="dropdown-menu">
        <li class="sous-cat animate__animated animate__fadeIn">
            <a href="categorie.php?genres=3&categories=1" class="hov">Hauts</a>
            <ul class="sous-sous-cat">
                <li class="sous-sous-cat_redirect hov"><a href="categorie.php?genres=2&categories=1&sous_cat=1">T-shirts</a></li>
                <li class="sous-sous-cat_redirect hov"><a href="categorie.php?genres=2&categories=1&sous_cat=2">Pulls</a></li>
                <li class="sous-sous-cat_redirect hov"><a href="categorie.php?genres=2&categories=1&sous_cat=3">Veste</a></li>
            </ul>
        </li>

        <div class="separator animate__animated animate__fadeIn"></div>

        <li class="sous-cat animate__animated animate__fadeIn">
            <a href="categorie.php?genres=3&categories=2" class="hov">Pantalons</a>
            <ul class="sous-sous-cat">
                <li class="sous-sous-cat_redirect hov"><a href="categorie.php?genres=2&categories=2&sous_cat=4">Joggings</a></li>
                <li class="sous-sous-cat_redirect hov"><a href="categorie.php?genres=2&categories=2&sous_cat=5">Jeans</a></li>
                <li class="sous-sous-cat_redirect hov"><a href="categorie.php?genres=2&categories=2&sous_cat=6">Cargo</a></li>
            </ul>
        </li>

        <div class="separator animate__animated animate__fadeIn"></div>

        <li class="sous-cat animate__animated animate__fadeIn">
            <a href="categorie.php?genres=3&categories=3" class="hov">Chaussures</a>
            <ul class="sous-sous-cat">
                <li class="sous-sous-cat_redirect hov"><a href="categorie.php?genres=2&categories=3&sous_cat=7">Baskets</a></li>
                <li class="sous-sous-cat_redirect hov"><a href="categorie.php?genres=2&categories=3&sous_cat=8">Boots</a></li>
                <li class="sous-sous-cat_redirect hov"><a href="categorie.php?genres=2&categories=3&sous_cat=9">Villes</a></li>
            </ul>
        </li>
    </ul>
</div>
</li>

<li class="categorie dropdown">
<a href="categorie.php">Sports</a>

<div class="dd-mnu">
    <ul class="dropdown-menu">
        <li class="sous-cat animate__animated animate__fadeIn">
            <a href="nouveaux/hauts" class="hov">Football</a>
            <ul class="sous-sous-cat">
                <li class="sous-sous-cat_redirect hov"><a href="">Chaussures</a></li>
                <li class="sous-sous-cat_redirect hov"><a href="">Tenues</a></li>
                <li class="sous-sous-cat_redirect hov"><a href="">Equipes</a></li>
            </ul>
        </li>

        <div class="separator animate__animated animate__fadeIn"></div>

        <li class="sous-cat animate__animated animate__fadeIn">
            <a href="nouveaux/pantalons" class="hov">Basketball</a>
            <ul class="sous-sous-cat">
                <li class="sous-sous-cat_redirect hov"><a href="">Chaussures</a></li>
                <li class="sous-sous-cat_redirect hov"><a href="">Tenues</a></li>
                <li class="sous-sous-cat_redirect hov"><a href="">Equipes</a></li>
            </ul>
        </li>

        <div class="separator animate__animated animate__fadeIn"></div>

        <li class="sous-cat animate__animated animate__fadeIn">
            <a href="nouveaux/chaussures" class="hov">Handball</a>
            <ul class="sous-sous-cat">
                <li class="sous-sous-cat_redirect hov"><a href="">Chaussures</a></li>
                <li class="sous-sous-cat_redirect hov"><a href="">Tenues</a></li>
                <li class="sous-sous-cat_redirect hov"><a href="">Equipes</a></li>
            </ul>
        </li>
    </ul>
</div>
</li>
</ul>
</div>

            <div class="account">
                <div class="search">
                    <input type="text" class="search-bar">
                    <a href="" class="search-button"><i class="fa-solid fa-magnifying-glass"></i></a>
                </div>
              
                <a href="favoris" class="fav"><i class="fa-solid fa-heart"></i></a>

                <?php

                    $sqlpanier1 = "SELECT COUNT(*) AS nombres FROM panier
                    WHERE id_utilisateurs=:id_utilisateurs";
                    $requetepanier1 = $db->prepare($sqlpanier1);
                    $requetepanier1->execute(array(
                        ":id_utilisateurs" => $_SESSION['id']  
                    ));
                    $affichepanier1 = $requetepanier1->fetch();


                    if ($affichepanier1['nombres'] == 0) {
                        ?>
                        <div class="panier" id="panier"><a href="panier" class="shop"><i class="fa-solid fa-bag-shopping"></i></a></div>
                        <?php
                    }
                    else {
                        ?>
                        <div class="panier" id="panier"><a href="panier" class="shop"><i class="fa-solid fa-bag-shopping"></i><p class="cercle">
                            <?php echo $affichepanier1['nombres']; ?></p></a></div>
                        <?php
                    }

                ?>

                
                <a href="profil" class="acc"><i class="fa-solid fa-user"></i></a>
            </div>
        </div>

        <div class="burger" id="toggle-button">
            <i class="fas fa-bars"></i>
        </div>
</nav>
</header>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script src="assets/js/script.js"></script>
<script src="assets/js/responsive.js"></script>
