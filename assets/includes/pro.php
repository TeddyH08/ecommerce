<?php
if (est_connecte()) {
?>
<div class="container">
    <div class="prof">
        <h2 class="titre_h2">Bonjour TRUC,</h2>

        <div class="infos_profil">
            <div class="base_profil">
                <p>Nom :</p>
                <p>Prénom :</p>
                <p>Genre :</p>
                <p>Date de naissance :</p>
                <p>Adresse mail :</p>
                <p>Pays :</p>
                <p>Adresse de livraison :</p>
            </div>

            <div class="base_profil">
                <p><?php echo $_SESSION['nom']; ?></p>
                <p><?php echo $_SESSION['prenom']; ?></p>
                <p><?php echo $_SESSION['genre']; ?></p>
                <p><?php echo $_SESSION['date']; ?></p>
                <p><?php echo $_SESSION['mail']; ?></p>
                <p><?php echo $_SESSION['pays']; ?></p>
                <p><?php echo $_SESSION['rue'] .", ". $_SESSION['cp'] .", ". $_SESSION['ville']; ?></p>
            </div>

            <div class="base_profil">
                <a href=""><i class="fa-solid fa-pen pen"></i></a>
                <a href=""><i class="fa-solid fa-pen pen"></i></a>
                <a href=""><i class="fa-solid fa-pen pen"></i></a>
                <a href=""><i class="fa-solid fa-pen pen"></i></a>
                <a href=""><i class="fa-solid fa-pen pen"></i></a>
                <a href=""><i class="fa-solid fa-pen pen"></i></a>
                <a href=""><i class="fa-solid fa-pen pen"></i></a>
            </div>
        </div>

        <h2 class="titre_h2 m">Historique d'achat :</h2>
    </div>
</div>
<?php
} else {
?>
<div class="container">
    <p>Veuillez vous connecter pour voir votre profil.</p>
</div>
<?php
}
?>