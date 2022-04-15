<?php $token = $_GET['reset']; ?>
<div class="container">
    <div class="connexion">
        <h3>Changement de Mot de Passe :</h3>

        <form action="assets/includes/db/traitementmdp.php">
        <label for="" class="titr_la">Mot de passe :</label>
            <input type="text" class="titr_in">

            <label for="" class="titr_la">Confirmation du Mot de passe :</label>
            <input type="text" class="titr_in">

            <input type="submit" class="sub" value="Valider">
        </form>
    </div>
</div>