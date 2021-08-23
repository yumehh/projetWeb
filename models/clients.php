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
    }
?>