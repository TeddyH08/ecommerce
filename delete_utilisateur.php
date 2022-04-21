<?php
    require 'assets/db/crud/users/delu.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" href="assets/img/icon/icon.png">

    <title>E-commerce</title>

    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" 
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style> 
</head>
<body>
    <?php include "assets/includes/navbar.php"; ?>

    <div class="container">
        <div>
            <h3 class="titre_h3">Voulez-vous vraiment supprimer cet utilisateur ?</h2>

            <form class="form_del" action="delete_utilisateur.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id;?>"/>        
                    Veux-tu vraiment le supprimer ?
                <button type="submit" class="oui_non">Oui</button>
                <a class="oui_non" href="crud.php">Non</a>
            </form>
        </div>
    </div>
</body>
</html>