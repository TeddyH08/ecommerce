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
         ?> 
<div class="container">
    <div class="pani">
        <div class="panie">
            <h2 class="titre_h2">Mon panier : </h2>
            <?php foreach ($resultpaniers as $value) { ?>
                  
                <div class="article_pan">
                    <div class="img_pan">
                        <img src="assets/img/hauts/thumb_c290x3906af62e3a15061099ff52f933aa9857ba.jpg" class="pan_img">
                    </div>
                    
                    <div class="infos_pan">
                        <h4>Nom de l'article <?php  echo $value['id_panier'];?></h4>
                        <p>Référence :</p>
                        <p>Taille : <?php  echo $value['id_utilisateurs'];?></p>
                    <h4>Prix :<?php  echo $value['id_stocks'];?> </h4>
                </div>
                
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

            <div class="artic">
                <p>Nom de l'article</p>
                <p>Prix</p>
            </div>

            <div class="artic">
                <p>Nom de l'article</p>
                <p>Prix</p>
            </div>

            <div class="artic">
                <p>Nom de l'article</p>
                <p>Prix</p>
            </div>

            <div class="sepa"></div>

            <div class="artic">
                <p>Total à payer :</p>
                <p>Prix</p>
            </div>

            <a href="" class="paie">Paiement</a>
        </div>
    </div>
</div>