
<?php 

require_once 'assets/db/connectdb.php';

// echo "taillle : ";
// echo $_POST["tailles"];


// echo "article : ";
// echo $_POST["id_article"];

// var_dump($_GET);
// var_dump($_POST);

$sqlcouleur = "SELECT * FROM stocks s, couleurs c, tailles t 
WHERE s.id_couleurs=c.id_couleurs 
AND s.id_tailles=t.id_tailles 
AND s.id_tailles= :tailles 
AND s.id_articles = :id_article";
$requetecouleur= $db->prepare($sqlcouleur);
$requetecouleur->execute(array(
    ":tailles" => $_POST['tailles'],
    ":id_article" => $_POST['id_article']
));


?>

<select name="couleurs" id="couleurs" onchange="getPhoto(this.value);">
<option value="">--Choisir une couleur--</option>

<?php

while ($affichecouleur = $requetecouleur->fetch())
{
    ?>
    <option value="<?php echo $affichecouleur['id_couleurs']; ?>"><?php echo $affichecouleur['couleur_couleurs']; ?></option>
    <?php
}

?>

</select>