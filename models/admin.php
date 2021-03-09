<?php 

    require_once('models/connectDB.php');

    class Admin extends ConnectDB {

        function addArtistes($nom, $image, $description, $genre){
        
        $db= $this->connexionDB();
        $reponse = $db->prepare('INSERT INTO artistes(nomArtiste, imageArtiste, descriptionArtiste, idGenre, is_deleted)
                                    VALUES(:nomArtiste, :imageArtiste, :descriptionArtiste, :genreArtiste, 0)');
        $reponse->execute(array(
            'nomArtiste' => $nom,
            'imageArtiste' => $image,
            'descriptionArtiste' => $description,
            'genreArtiste' => $genre
        ));
        $reponse->closeCursor();
        
        return $reponse;
    }

    function addMusicArtist($titre, $prix){

        $db = $this->connexionDB();
        $reponse = $db->prepare('INSERT INTO musiques(titre, prix) VALUES(:titre, :prix)');
        $reponse->execute(array(
            'titre' => $titre,
            'prix' => $prix
        ));
        $reponse->closeCursor();

        return $reponse;
    }

    function updateArtistes($nom, $image, $description, $genre, $id){

        $db= $this->connexionDB();
        $reponse = $db->prepare('UPDATE artistes SET nomArtiste = :nomArtiste, imageArtiste = :imageArtiste, descriptionArtiste = :descriptionArtiste, idGenre = :genreArtiste WHERE idArtiste = :idArtiste');
        $reponse->execute(array(
            'nomArtiste' => $nom,
            'imageArtiste' => $image,
            'descriptionArtiste' => $description,
            'genreArtiste' => $genre,
            'idArtiste' => $id
        ));
        $reponse->closeCursor();

        return $reponse;

    }

    function deleteArtistes($id){

        $db = $this->connexionDB();
        $reponse = $db->prepare('UPDATE artistes SET is_deleted = 1 WHERE idArtiste = :idArtiste');
        $reponse->execute(array(
            'idArtiste' => $id
        ));
        $reponse->closeCursor();

        return $reponse;
    }


    function restoreArtiste($id){

        $db = $this->connexionDB();
        $reponse = $db->prepare('UPDATE artistes SET is_deleted = 0 WHERE idArtiste = :idArtiste');
        $reponse->execute(array(
            'idArtiste' => $id
        ));
        $reponse->closeCursor();

        return $reponse;
    }

    function getArtistIsDeleted(){

        $db = $this->connexionDB();
        $reponse = $db->prepare('SELECT a.is_deleted, a.idArtiste, a.nomArtiste, gm.nomGenre FROM artistes AS a, genremusique AS gm WHERE a.idGenre = gm.idGenre AND a.is_deleted = 1 ORDER BY nomArtiste');
        $reponse->execute();
        $artiste = $reponse->fetchAll();
        $reponse->closeCursor();

            return $artiste;
    }

}

?>