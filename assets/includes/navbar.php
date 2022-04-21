<header>
    <div class="top">
        <div class="reseaux">
            <?php 
            if(isset($_SESSION['role']) == 2 ){
                echo '<a href="crud.php" class="users">crud</a>';
            } 
            
            ?>
        </div>
            
        <div class="blank">
        <?php 
        
            if(isset($_SESSION['role']) >= 0 ){
                echo "<p class='users'> ".$_SESSION['prenom']." ".$_SESSION['nom']."</p>";
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
                    <a href="Inscription"><li class="users">S'inscrire</li></a>
                    <a href="Connexion"><li class="users">S'identifier</li></a>
                </ul>
            </div>
                <?php  
            }
            
            ?>

    </div>

<nav class="navbar">
        <div class="logo">
                <a href="Accueil"><img src="assets/img/logo.jpg" class="log"></a>
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
                        <a href="categorie.php">Hommes</a>

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
                        <a href="categorie.php">Femmes</a>

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
                        <a href="categorie.php">Enfants</a>

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
                <a href="" class="fav"><i class="fa-solid fa-heart"></i></a>
                <a href="" class="shop"><i class="fa-solid fa-bag-shopping"></i></a>
                <a href="" class="acc"><i class="fa-solid fa-user"></i></a>
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
