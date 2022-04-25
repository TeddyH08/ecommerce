<?php

require_once 'assets/db/connectdb.php';

// $sqlcouleur = "SELECT * FROM stocks s, couleurs c, tailles t 
// WHERE s.id_couleurs=c.id_couleurs 
// AND s.id_tailles=t.id_tailles 
// AND s.id_couleurs= :couleurs 
// AND s.id_articles = :id_article";
// $requetecouleur= $db->prepare($sqlcouleur);
// $requetecouleur->execute(array(
//     ":couleurs" => $_POST['couleurs'],
//     ":id_article" => $_POST['id_article']
// ));

// $affichercouleur = $requetecouleur->rowCount();  

// 1 = L
// $sqldetail1 = "SELECT t.taille_tailles AS nom, s.id_tailles AS id, s.id_couleurs AS idc, COUNT(*) AS nombres FROM articles a, stocks s, tailles t, couleurs c 
// WHERE a.id_articles=s.id_articles 
// AND s.id_tailles=t.id_tailles 
// AND s.id_couleurs=c.id_couleurs 
// AND s.id_articles = :id_article
// GROUP BY s.id_tailles";
// $requetedetail1= $db->prepare($sqldetail1);
// $requetedetail1->execute(array(
//     ":id_article" => $_POST['id_article']
// ));


    $html = "";

//     $html.= "   
//     <select name='tailles' id='tailles'>
//     <option value=''>--Choisir une taille--</option>";

//     while ($affichedetail1 = $requetedetail1->fetch())
//     {
//             $html .= "<option value='".$affichedetail1['id']."'>".$affichedetail1['nom']." ".$affichedetail1['nombres']."(Dispo)</option>";
//             $html .= "<option value='".$affichedetail1['id']."'>".$affichedetail1['nom']." ".$affichedetail1['nombres']."( Pas Dispo)</option>";
//     }

//     $html .= "</select>";


// $sqlarticle = "SELECT * FROM stocks s, tailles t, couleurs c
// WHERE s.id_tailles=t.id_tailles
// AND s.id_couleurs=c.id_couleurs
// AND s.id_articles = :id_article";
// $requetearticle = $db->prepare($sqlarticle);
// $requetearticle->execute(array(
//         ":id_article" => $_POST['id_article']
//     ));


// while ($affichearticle = $requetearticle->fetch())
// {

//     $sqlarticle2 = "SELECT COUNT(*) as total FROM stocks s, tailles t, couleurs c
//     WHERE s.id_tailles=t.id_tailles
//     AND s.id_couleurs=c.id_couleurs
//     and s.id_articles = :id_article
//     AND s.id_couleurs= :id_couleurs
//     AND s.id_tailles = :id_tailles";
//     $requetearticle2 = $db->prepare($sqlarticle2);
//     $requetearticle2->execute(array(
//         ":id_article" => $_POST['id_article'],
//         ":id_couleurs" => $_POST['couleurs'],
//         ":id_tailles" => $affichearticle['id_tailles']
//     ));
//     $affichearticle2 = $requetearticle2->fetch();

//         // $html .= "taille ".$affichearticle['taille_tailles']." couleur ".$affichearticle['couleur_couleurs']." ".$affichearticle2['total']."";
//         $html .= "stock ".$affichearticle['id_stocks']."  article ".$_POST['id_article']." couleur ".$_POST['couleurs']." taille ".$affichearticle['id_tailles']." total ".$affichearticle2['total'] ." ";
//         $html .= "<br>";


// }

$html.= "<select name='tailles' id='tailles'>";
$html.= "<option value=''>--Choisir une taille--</option>";

$sqlarticle = "SELECT * FROM tailles";
$requetearticle = $db->prepare($sqlarticle);
$requetearticle->execute();
while ($affichearticle = $requetearticle->fetch())
{

        $sqlarticle2 = "SELECT COUNT(*) AS nombres FROM stocks s, tailles t, couleurs c
        WHERE s.id_tailles=t.id_tailles
        AND s.id_couleurs=c.id_couleurs
        AND s.id_articles = :id_article
        AND s.id_couleurs = :id_couleurs
        AND s.id_tailles = :id_tailles
        ";
        $requetearticle2 = $db->prepare($sqlarticle2);
        $requetearticle2->execute(array(
            ":id_article" => $_POST['id_article'],
            ":id_couleurs" => $_POST['couleurs'],
            ":id_tailles" => $affichearticle['id_tailles']
        ));
        $affichearticle2 = $requetearticle2->fetch();

            $sqlarticle3 = "SELECT * FROM stocks s, tailles t, couleurs c
            WHERE s.id_tailles=t.id_tailles
            AND s.id_couleurs=c.id_couleurs
            AND s.id_articles = :id_article
            AND s.id_couleurs = :id_couleurs
            AND s.id_tailles = :id_tailles
            ";
            $requetearticle3 = $db->prepare($sqlarticle3);
            $requetearticle3->execute(array(
                ":id_article" => $_POST['id_article'],
                ":id_couleurs" => $_POST['couleurs'],
                ":id_tailles" => $affichearticle['id_tailles']
            ));
            $affichearticle3 = $requetearticle3->fetch();


        if($affichearticle2['nombres'] >= 1){

            if (($affichearticle3['quantite_stock'] >= 1)  && ($affichearticle3['quantite_stock'] <= 5)){
                $html.= " <option value='".$affichearticle['id_tailles']."'>".$affichearticle['taille_tailles']." (".$affichearticle3['quantite_stock']." articles)</option>";
            }
            if($affichearticle3['quantite_stock'] > 5){
            
            $html.= " <option value='".$affichearticle['id_tailles']."'>".$affichearticle['taille_tailles']." (Disponible)</option>";
            }

            if($affichearticle3['quantite_stock'] <= 0){
                $html.= " <option disabled>".$affichearticle['taille_tailles']." (Indisponible) </option>";
            }

            // $html .= " ".$affichearticle['taille_tailles']." ".$affichearticle2['nombres']."<br>";
        }
        if($affichearticle2['nombres'] <= 0){
            $html.= " <option disabled>".$affichearticle['taille_tailles']." (Indisponible) </option>";
        }

    
}

$html.= "</select>";

            $sqlarticle4 = "SELECT * FROM stocks s, couleurs c, articles a
            WHERE s.id_couleurs=c.id_couleurs
            AND s.id_articles=a.id_articles
            AND s.id_articles = :id_article
            AND s.id_couleurs = :id_couleurs
            ";
            $requetearticle4 = $db->prepare($sqlarticle4);
            $requetearticle4->execute(array(
                ":id_article" => $_POST['id_article'],
                ":id_couleurs" => $_POST['couleurs']
            ));
            $affichearticle4 = $requetearticle4->fetch();

          $minuscule = strtolower($affichearticle4['couleur_couleurs']);

// $photo0="".$minuscule."_".$affichearticle4['image1_articles']."";
// $photo1="".$minuscule."_".$affichearticle4['image1_articles']."";
// $photo2="".$minuscule."_".$affichearticle4['image2_articles']."";
// $photo3="".$minuscule."_".$affichearticle4['image3_articles']."";


$photo0="<img src=assets/img/".$minuscule."_".$affichearticle4['image1_articles']." alt='test'>";
$photo1="<img src=assets/img/".$minuscule."_".$affichearticle4['image1_articles']." alt='test'>";
$photo2="<img src=assets/img/".$minuscule."_".$affichearticle4['image2_articles']." alt='test'>";
$photo3="<img src=assets/img/".$minuscule."_".$affichearticle4['image3_articles']." alt='test'>";

echo json_encode(
    array(
        "html" => $html,
        "photo0"=> $photo0,
        "photo1"=> $photo1,
        "photo2"=> $photo2,
        "photo3"=> $photo3,
    )
);



?>