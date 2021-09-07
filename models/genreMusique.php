<?php 

    require_once('models/connectDB.php');

    class GenreMusique extends connectDB {

        function getAll(){
            
            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT * FROM genremusique');
            $reponse->execute();
            $genre = $reponse->fetchAll();
            $reponse->closeCursor();
            return $genre;
        }
    }

?>