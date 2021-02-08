<?php 

    include 'connexion_db.php';

    $req = $pdo->prepare('SELECT idUtilisateur, pwUser FROM utilisateurs WHERE pseudo = :pseudo');
    $req->execute(array(
        'pseudo' => $pseudo));
        $resultat = $req->fetch();

        $isPasswordCorrect = password_verify($_POST['mdp'], $resultat['pwUser']);

        if(!$resultat){

            echo 'mauvais identifiant ou mot de passe ! ';
        }
        else{
            if($isPasswordCorrect){
                session_start();
                $_SESSION['id'] = $resultat['id'];
                $_SESSION['pseudo'] = $pseudo;
                echo 'vous êtes connecté ! ';
            }else{
                echo 'Mauvais identifiant ou mot de passe ! ';
            }
        }

?>

<!-- ne fonctionne pas, à retravailler -->