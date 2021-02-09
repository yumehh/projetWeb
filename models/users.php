<?php 
    require 'connexion_db.php';

    function addUser($pseudo, $mdp, $email){

        $reponse = getDB()->prepare('INSERT INTO utilisateurs(pseudo, pwUser, email, date_inscription) VALUES (:pseudo, :mdp, :email, NOW())');
        if($mdp){
            $mdp = password_hash($mdp, PASSWORD_DEFAULT);
            echo "ajout OK de user";
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

    function checkUserByPseudo($pseudo){
        $reponse = getDB()->prepare('SELECT * FROM utilisateurs WHERE pseudo = :pseudo');
        $reponse->execute(['pseudo' => $pseudo]);
        $user = $reponse->fetch();
        $reponse->closeCursor();
        return $user;
    }

?>