<div class="container">
    <div class="connexion">
        <h3>Connexion :</h3>
        <?php if (isset($_GET['succesinscrit'])){ ?>
            <p class="sucess">Vous êtes bien inscrit, vous pouvez maintenant vous connecter !</p>
        <?php } ?>

        <?php if (isset($_GET['demm'])){ ?>
            <p class="sucess">Un mail vous à été envoyer !</p>
        <?php } ?>

        <?php if (isset($_GET['chgmtmdp'])){ ?>
            <p class="sucess">Votre mot de passe a bien été changer</p>
        <?php } ?>

        <div class="error"></div>

        <form method="post" action="assets/includes/db/traitementco.php" id ="formajax">
            <label for="mail" class="titr_la">Adresse mail :</label>
            <input type="text" name="mail" class="titr_in">

            <label for="mdp" class="titr_la">Mot de passe :</label>
            <input type="text" name="mdp" class="titr_in">

            <div class="aide">
                <div class="check"><input type="checkbox" class="checkbox"><label for="">Se souvenir de moi</label></div>
                <a href="verificationmail.php" class="mdp_oublie">mot de passe oublié ?</a>
            </div>

            <input type="submit" class="sub" value="S'identifier">
        </form>

        <div class="co_ins">
            <p>Pas encore membre ?</p>
            <a href="inscription.php" class="mdp_oublie">Rejoignez-nous !</a>
        </div>
    </div>
</div>