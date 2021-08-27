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

    function updateArtistes($nom, $image, $description, $genre, $id){

        $db= $this->connexionDB();
        $reponse = $db->prepare('UPDATE artistes SET nomArtiste = :nomArtiste, imageArtiste = :imageArtiste, descriptionArtiste = :descriptionArtiste, idGenre = :genreArtiste 
                                    WHERE idArtiste = :idArtiste');
        $reponse->execute(array(
            'nomArtiste' => $nom,
            'imageArtiste' => $image,
            'descriptionArtiste' => $description,
            'genreArtiste' => $genre,
            'idArtiste' => $id
        ));
        $artistId = $reponse->fetch();
        $reponse->closeCursor();

        return $artistId;

    }

    function deleteArtistes($id){

        $db = $this->connexionDB();
        $reponse = $db->prepare('UPDATE artistes SET is_deleted = 1 WHERE idArtiste = :idArtiste');
        $reponse->execute(array(
            'idArtiste' => $id
        ));
        $artistDelete = $reponse->fetch();
        $reponse->closeCursor();

        return $artistDelete;
    }


    function restoreArtiste($id){

        $db = $this->connexionDB();
        $reponse = $db->prepare('UPDATE artistes SET is_deleted = 0 WHERE idArtiste = :idArtiste');
        $reponse->execute(array(
            'idArtiste' => $id
        ));
        $artistRestore = $reponse->fetch();
        $reponse->closeCursor();

        return $artistRestore;
    }


    function getArtistIsDeleted(){

        $db = $this->connexionDB();
        $reponse = $db->prepare('SELECT a.is_deleted, a.idArtiste, a.nomArtiste, gm.nomGenre 
                                    FROM artistes AS a, genremusique AS gm 
                                        WHERE a.idGenre = gm.idGenre AND a.is_deleted = 1 ORDER BY nomArtiste');
        $reponse->execute();
        $artiste = $reponse->fetchAll();
        $reponse->closeCursor();

            return $artiste;
    }

    function annuleCommande($numCmd){

        $db = $this->connexionDB();
        $reponse = $db->prepare('UPDATE commandes SET idStatusCommande = 3 WHERE idCommande = :idCommande');
        $reponse->execute(array(
            'idCommande' => $numCmd
        ));
        $idCmd = $reponse->fetch();
        $reponse->closeCursor();

        return $idCmd;
    }

    function validCommande($numCmd){

        $db = $this->connexionDB();
        $reponse = $db->prepare('UPDATE commandes SET idStatusCommande = 2 WHERE idCommande = :idCommande');
        $reponse->execute(array(
            'idCommande' => $numCmd
        ));
        $idCmd = $reponse->fetch();
        $reponse->closeCursor();

        return $idCmd;
    }

}

?>