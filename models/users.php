<?php 
    require_once 'connexion_db.php';

    function addUser($pseudo, $mdp, $email){

        // $pseudo = "luc";
        // $mdp = "lol";
        // $email = "jean@gmail.com";

        $date = date("YYYY-MM-DD");
        $reponse = getDB()->prepare('INSERT INTO utilisateurs(pseudo, pwUser, email) VALUES (:pseudo, :mdp, :email)');
        if($mdp){ //si il existe = true
            $mdp = password_hash($mdp, PASSWORD_DEFAULT);
        }else{
            echo "fail mot de passe";
        }

        $reponse->execute(array(
            'pseudo' => $pseudo,
            'mdp' => $mdp,
            'email' => $email
        ));
        $reponse->closeCursor();
    }

?>