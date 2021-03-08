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

    function updateArtistes($nom, $image, $description, $id){

        $db= $this->connexionDB();
        $reponse = $db->prepare('UPDATE artistes SET nomArtiste = :nomArtiste, imageArtiste = :imageArtiste, descriptionArtiste = :descriptionArtiste WHERE idArtiste = :id');
        $reponse->execute(array(
            'nomArtiste' => $nom,
            'imageArtiste' => $image,
            'descriptionArtiste' => $description,
            'idArtiste' => $id
            //'idGenre' => $genre
        ));
        $reponse->closeCursor();

        return $reponse;
    }

    function getArtisteById($id){

        $db= $this->connexionDB();
        $reponse = $db->prepare('SELECT * FROM artistes WHERE idArtiste = :id');
        $reponse->execute(array(
            'idArtiste' => $id
        ));
        $reponse->closeCursor();

        return $reponse;
    }

}

?>