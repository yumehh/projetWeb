<?php 

    require_once("models/connectDB.php");

    class Artistes extends ConnectDB {

        function getAll(){
            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT nomArtiste FROM artistes');
            $reponse->execute();
            $user = $reponse->fetch();
            $reponse->closeCursor();
            return $user;
            
        }
    
        function addArtistes($nom, $image, $description){
        
            $reponse = connexionDB()->prepare('INSERT INTO artistes(nomArtiste, imageArtiste, descriptionArtiste)
                                        VALUES(:nomArtiste, :imageArtiste, :descriptionArtiste)');
            $reponse->execute(array(
                'nomArtiste' => $nom,
                'imageArtiste' => $image,
                'descriptionArtiste' => $description
            ));
            $reponse->closeCursor();
        }

}


?>