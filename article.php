<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="assets/style/article.css" rel="stylesheet">
    <title>Detail Article</title>
    
    <link rel="stylesheet" href="assets/style/style.css">
    <link 
    rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" 
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" 4
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
<?php include "assets/includes/navbar.php"; ?>


<div class="container">

<div class="article">

<div class="photogauche">
    <div class="photo" onclick="choixPhoto(0)"><img src="assets/img/photo1.jpg" alt="photo1"></div>
    <div class="photo" onclick="choixPhoto(1)"><img src="assets/img/photo2.jpg" alt="photo2"></div>
    <div class="photo" onclick="choixPhoto(2)"><img src="assets/img/photo3.jpg" alt="photo3"></div>
</div>

<div class="photoarticle">
    
    <div class="photo2 active" id="photo2">
    <img id="image1" src="assets/img/photo1.jpg" alt="photo1"></div>

    <div class="photo2" ><img src="assets/img/photo2.jpg" alt="photo2"></div>
    <div class="photo2"><img src="assets/img/photo3.jpg" alt="photo3"></div>
</div>

<div class="detailarticle">

<div class="detail1 titre">Top BURBERRY LONDON <i class="fa-solid fa-heart"></i></div>
<div class="detail1"><div class="titre2">Taille : </div><div class="titre2"> FR 38</div></div>
<div class="detail1"><div class="titre2">Prix : </div><div class="titre2">70€</div></div>
<div class="detail1"><div class="titre2">Couleur : </div><div class="titre2">Bleu Marine</div></div>
<div class="detail1"><div class="titre2">Référence : </div><div class="titre2">1200920</div></div>

<div class="detail2"><div class="titre3">Description de l'article :</div>
<div class="titre4">Carrure : 38 cm</div>
<div class="titre4">Longueur : 64 cm</div>
<div class="titre4">Largeur poitrine : 43 cm</div>
</div>

<div class="notearticle">

<div class="voterarticle">

Voter : <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>

</div>

Note : 3/5 (15 votes)
</div>


<!-- bouton achat  -->
<div class="placementbout">
<form action="article.php?id_article=" method="POST">
    <input type="hidden" value="1" name="quantite">
    <button class="boutonajoutpanier"><i class='fa-solid fa-bag-shopping'></i> Ajouter au panier</button>
<!-- <input type="submit" value="Ajouter au panier" class="boutonajoutpanier">    -->
</form>
</div>

<div class="inforetour">
<i class="fa-solid fa-check"></i> Tout nos articles sont fabriqués en France<br>
<i class="fa-solid fa-check"></i> 30 jours pour changer d'avis<br>
<i class="fa-solid fa-check"></i> Retour gratuit<br>
<i class="fa-solid fa-check"></i> Livraison offerte<br>
</div>



</div>


</div><!-- fin article -->

<div class="commentairesarticle">

De : Alice.D le 15/03/2022 <br>
Note : <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><br>
Article correct<br>

<div class="hr-perso"></div>

De : Flavie.S le 28/01/2022 <br>
Note : <i class="fa-solid fa-star"></i><br>
Déçue de la qualité <br>


<div class="hr-perso"></div>

De : Justine.M le 03/01/2022 <br>
Article conforme a la description <br>
</div>

<br><br><br><br>

</div> <!-- fin container -->
    
<?php include "assets/includes/footer.php"; ?>

    <script src="assets/js/js.js"></script>
</body>
</html>
