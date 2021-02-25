<?php 

require_once('models/connectDB.php');

class Artistes extends connectDB {

    function getAll(){
        $reponse = connexionDB()->prepare('SELECT * FROM artistes');
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