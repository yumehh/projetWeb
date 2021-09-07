<?php 

    require_once('models/connectDB.php');

    Class Clients extends ConnectDB {

        function getAll(){
            
            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT * from Utilisateurs');
            $reponse->execute();
            $users = $reponse->fetchAll();
            $reponse->closeCursor();
            return $users;
        }

        function getUserByNom($pseudo){

            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT * FROM Utilisateurs where pseudo =:pseudo');
            $reponse->execute(array(
                'pseudo' => $pseudo
            ));
            $user = $reponse->fetch();
            $reponse->closeCursor();
            return $user;
        }

        function getUserById($idUtilisateur){

            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT * FROM Utilisateurs where idUtilisateur = :idUtilisateur');
            $reponse->execute(array(
                'idUtilisateur' => $idUtilisateur
            ));
            $artiste = $reponse->fetchAll();
            $reponse->closeCursor();
            return $artiste;
        }

        function updateUser($pseudo, $pwUser, $email, $id){

            $db= $this->connexionDB();
            $reponse = $db->prepare('UPDATE Utilisateurs SET pseudo = :pseudo, pwUser = :pwUser, email = :email WHERE idUtilisateur = :idUtilisateur');
            if($pwUser){
                $pwUser = password_hash($pwUser, PASSWORD_DEFAULT);
            }else{
                echo "fail mot de passe";
            }
            $reponse->execute(array(
                'pseudo' => $pseudo,
                'pwUser' => $pwUser,
                'email' => $email,
                'idUtilisateur' => $id
            ));
            $reponse->closeCursor();    
        }
    }
?>