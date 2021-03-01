<?php 

    require_once('models/connectDB.php');

    class Artistes extends ConnectDB {

        function getAll(){
            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT * FROM artistes');
            $reponse->execute();
            $artiste = $reponse->fetchAll();

            $reponse->closeCursor();

            return $artiste;
        
        }

        function getByNom($nomArtiste){
            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT * FROM artistes where nomArtiste =:nomArtiste');
            $reponse->execute(array(
                'nomArtiste' => $nomArtiste
            ));
            $artiste = $reponse->fetch();
            $reponse->closeCursor();

            return $artiste;
        }

}


?>