<?php 

    require_once('models/connectDB.php');

    Class Clients extends ConnectDB {

        function getAll(){
            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT * from utilisateurs');
            $reponse->execute();
            $users = $reponse->fetchAll();

            $reponse->closeCursor();

            return $users;
        }

        function getUserByNom($pseudo){
            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT * FROM utilisateurs where pseudo =:pseudo');
            $reponse->execute(array(
                'pseudo' => $pseudo
            ));
            $user = $reponse->fetch();
            $reponse->closeCursor();
            
            return $user;
        }

        function getUserById($idUtilisateur){
            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT * FROM utilisateurs where idUtilisateur = :idUtilisateur');
            $reponse->execute(array(
                'idUtilisateur' => $idUtilisateur
            ));

            $artiste = $reponse->fetchAll();
            $reponse->closeCursor();

            return $artiste;
        }
    }
?>