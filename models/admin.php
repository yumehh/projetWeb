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

    function updateArtistes($id, $nom, $image, $description, $genre){

        $db = $this->connectDB();
        $reponse = $db->prepare('UDPATE artistes SET nomArtiste =:$nom, imageArtiste =:$image, descriptionArtiste =:$description, idGenre =:$genre WHERE idArtiste = $id');
        $reponse->execute(array(
            'idArtiste' => $id,
            'nomArtiste' => $nom,
            'imageArtiste' => $image,
            'descriptionArtiste' => $description,
            'genreArtiste' => $genre
        ));
        $reponse->closeCursor();

        return $reponse;
    }

    function getArtisteById($id){

        $db = $this->connectDB();
        $reponse = $db->prepare('SELECT * FROM artistes WHERE idArtiste = $id');
        $reponse->execute(array(
            'idArtiste = $id'
        ));
        $reponse->closeCursor();

        return $reponse;
    }

}

?>