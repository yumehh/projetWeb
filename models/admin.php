<?php 

    require_once('models/connectDB.php');

    class Admin extends ConnectDB {

        function addArtistes($nom, $image, $description, $genre){
        
        $db= $this->connexionDB();
        $reponse = $db->prepare('INSERT INTO artistes(nomArtiste, imageArtiste, descriptionArtiste, idGenre)
                                    VALUES(:nomArtiste, :imageArtiste, :descriptionArtiste, :genreArtiste)');
        $reponse->execute(array(
            'nomArtiste' => $nom,
            'imageArtiste' => $image,
            'descriptionArtiste' => $description,
            'genreArtiste' => $genre
        ));
        $reponse->closeCursor();
        
        return $reponse;
    }

}

?>