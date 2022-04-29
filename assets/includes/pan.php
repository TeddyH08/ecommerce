<?php  
     include '../db/connectdb.php';
       session_start();
        $id_login = $_SESSION['id'];
        $sqlajoutpanier = "SELECT * FROM panier WHERE id_utilisateurs = :id_utilisateurs";
        $requeteajoutpanier = $db->prepare($sqlajoutpanier);
        $requeteajoutpanier->execute(array(
            ":id_utilisateurs" => $id_login 
        ));    
        $resultpaniers = $requeteajoutpanier->fetchAll(PDO::FETCH_ASSOC);
        
        $sqlstock = "SELECT * FROM stocks";
        $requetestock = $db->prepare($sqlstock);
        $requetestock->execute();    
        $resultstock = $requetestock->fetchAll(PDO::FETCH_ASSOC);
        
          
        $sqlarticles = "SELECT * FROM articles";
        $requetearticles = $db->prepare($sqlarticles);
        $requetearticles->execute();    
        $resultarticles = $requetearticles->fetchAll(PDO::FETCH_ASSOC);

        $sqltailles = "SELECT * FROM tailles";
        $requetetailles = $db->prepare($sqltailles);
        $requetetailles->execute();    
        $resulttailles = $requetetailles->fetchAll(PDO::FETCH_ASSOC);

        
        $sqlcat= "SELECT * FROM categories";
        $requetecat = $db->prepare($sqlcat);
        $requetecat->execute();    
        $resultcat = $requetecat->fetchAll(PDO::FETCH_ASSOC);
        
        $id_paniers = "";
            $query = "DELETE FROM panier WHERE panier . id_panier = :id_panier";
              $retour = $db -> prepare($query);
            $retour->execute(array(  ":id_panier" => $id_paniers ));

         ?> 
<div class="container">
    <div class="pani">
        <div class="panie">
            <h2 class="titre_h2">Mon panier : </h2>
            <?php foreach ($resultpaniers as $value) { ?>
                  
                <div class="article_pan">
                    <div class="img_pan">
                <?php    foreach ($resultarticles as $valuearticle) {
                                    if ($valuedescription['id_articles'] == $valuearticle['id_articles']) {
                                     foreach ($resultcat as $valuecat) {
                                                                    if ($valuearticle['id_categories'] == $valuecat['id_categories']) {
                                                                        echo "<img src='assets/img/". $valuecat['nom_categories'] ."/".  $valuearticle['image1_articles'] ." class='pan_img'>" ; 
                                                                    }
                                                                }
                                     }} ?>    
                                        </div>
                    <?php
                                foreach ($resultstock as $valuedescription) {
                                    if ($value['id_stocks'] == $valuedescription['id_stocks']) {
                                     ?>  
                                      <div class="infos_pan">
                                        <h4> <?php
                                foreach ($resultarticles as $valuearticle) {
                                    if ($valuedescription['id_articles'] == $valuearticle['id_articles']) {
                                    echo $valuearticle['nom_articles']; }} ?> </h4>
                                        <p>Référence : </p>
                                        <p>Taille : <?php
                                foreach ($resulttailles as $valuetailles) {
                                    if ($valuedescription['id_tailles'] == $valuetailles['id_tailles']) {
                                    echo $valuetailles['taille_tailles']; }} ?> </p>
                                    <h4>Prix : <?php foreach ($resultarticles as $valuearticle) {
                                    if ($valuedescription['id_articles'] == $valuearticle['id_articles']) {
                                    echo $valuearticle['prix_articles']; }} ?> € </h4>
                                </div>
                                 <?php   }
                                } ?>
                    
                   
                
                <div class="quantite_pan">
                    <h4>Quantité :</h4>
                    <select name="quant" id="quantite_article">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                    <a href="" class="suppr">Supprimer</a>
                </div>
            </div><?php } ?>
        </div>
        
        <div class="resume">
            <h4>Résumé :</h4>
            <?php foreach ($resultpaniers as $value) { ?>
            <div class="artic">
           
                <p> <?php
                                foreach ($resultarticles as $valuearticle) {
                                    if ($valuedescription['id_articles'] == $valuearticle['id_articles']) {
                                    echo $valuearticle['nom_articles']; }} ?>
                </p>
                <p><?php foreach ($resultarticles as $valuearticle) {
                                    if ($valuedescription['id_articles'] == $valuearticle['id_articles']) {
                                    echo $valuearticle['prix_articles']; }} ?> €</p>
            </div>
            <?php } ?> 

            <div class="sepa"></div>

            <div class="artic">
                <p>Total à payer :</p>
                <p>Prix</p>
            </div>

            <a href="" class="paie">Paiement</a>
        </div>
    </div>
</div>