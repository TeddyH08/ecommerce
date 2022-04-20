<?php

require '../../connectdb.php';


    if(isset($_POST)){
        if(isset($_POST["prenom"]) && (!empty($_POST["prenom"]))){
            $firstname = htmlspecialchars($_POST["prenom"]);
        }
        if(isset($_POST["nom"]) && (!empty($_POST["nom"]))){
            $name = htmlspecialchars($_POST["nom"]);            
        }
        if(isset($_POST["genre"]) && (!empty($_POST["genre"]))){
            $genre = htmlspecialchars($_POST["genre"]);
        }
        if(isset($_POST["date"]) && (!empty($_POST["date"]))){
            $date = htmlspecialchars($_POST["date"]);
        }
        if(isset($_POST["mail"]) && (!empty($_POST["mail"]))){
            $mail = htmlspecialchars($_POST["mail"]);
        }
        if(isset($_POST["tel"]) && (!empty($_POST["tel"]))){
            $tel = htmlspecialchars($_POST["tel"]);
        }
        if(isset($_POST["mdp"]) && (!empty($_POST["mdp"]))){
            $password = md5(htmlspecialchars($_POST["mdp"]));
        }
        if(isset($_POST["mdp1"]) && (!empty($_POST["mdp1"]))){
            $password1 = md5(htmlspecialchars($_POST["mdp1"]));
        }
        if(isset($_POST["rue"]) && (!empty($_POST["rue"]))){
            $rue = htmlspecialchars($_POST["rue"]);
        }
        if(isset($_POST["cp"]) && (!empty($_POST["cp"]))){
            $cp = htmlspecialchars($_POST["cp"]);
        }
        if(isset($_POST["ville"]) && (!empty($_POST["ville"]))){
            $ville = htmlspecialchars($_POST["ville"]);
        }
        if(isset($_POST["pays"]) && (!empty($_POST["pays"]))){
            $pays = htmlspecialchars($_POST["pays"]);
        }
        if(isset($_POST["role"]) && (!empty($_POST["role"]))){
            $role = htmlspecialchars($_POST["role"]);
        }
    }else{
        
    }

    $pdoStat = $db->prepare('SELECT * FROM utilisateurs WHERE mail_utilisateurs = ?');

    $pdoStat->execute(array($mail));

    $row = $pdoStat->fetch(PDO::FETCH_ASSOC);

    if ($mail == $row['mail_utilisateurs']) {
        echo "Adresse mail déjà existant !!";
    } else {
        $sqlRequest = "INSERT INTO `utilisateurs` (`prenom_utilisateurs`, `nom_utilisateurs`, `civilite_utilisateurs`, `password_utilisateurs`, `mail_utilisateurs`, `datenaissance_utilisateurs`, `tel_utilisateurs`, `rue_utilisateurs`, `cp_utilisateurs`, `ville_utilisateur`, `pays_utilisateurs`, `id_roles`) 
                        VALUES (?,?,?,?,?,?,?,?,?,?,?,'1');";
        $pdoStat = $db -> prepare($sqlRequest);
        $pdoStat->execute(array($firstname,$name,$genre,$password,$mail,$date,$tel,$rue,$cp,$ville,$pays));
        $row = $pdoStat->fetchall(PDO::FETCH_ASSOC);
        header('Location: ../../../../add_utilisateur.php');
    }

    ?>