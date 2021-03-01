<?php 

    require_once('models/connectDB.php');

        class Admin extends ConnectDB {

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