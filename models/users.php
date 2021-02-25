<?php 

    require_once("models/connectDB.php");

    class Users extends ConnectDB {

        function addUser($pseudo, $mdp, $email){

            $db = $this->connexionDB();
            $reponse = $db->prepare('INSERT INTO utilisateurs(pseudo, pwUser, email, date_inscription) 
                                        VALUES (:pseudo, :mdp, :email, NOW())');
            if($mdp){
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
            
            return $reponse;
            
        }
    
        function checkUserByPseudo($pseudo){
            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT * FROM utilisateurs WHERE pseudo = :pseudo');
            $reponse->execute(['pseudo' => $pseudo]);
            $user = $reponse->fetch();
            $reponse->closeCursor();

            return $user;
        }

    }

?>