<?php 

    require_once('models/connectDB.php');

    class Admin extends ConnectDB {

        function addArtistes($nom, $image, $description, $genre){
        
            $db= $this->connexionDB();
            $reponse = $db->prepare('INSERT INTO Artistes(nomArtiste, imageArtiste, descriptionArtiste, idGenre, is_deleted)
                                        VALUES(:nomArtiste, :imageArtiste, :descriptionArtiste, :genreArtiste, 0)');
            $reponse->execute(array(
                'nomArtiste' => $nom,
                'imageArtiste' => $image,
                'descriptionArtiste' => $description,
                'genreArtiste' => $genre
            ));
            $reponse->closeCursor();
        }

        function updateArtistes($nom, $image, $description, $genre, $id){

            $db= $this->connexionDB();
            $reponse = $db->prepare('UPDATE Artistes SET nomArtiste = :nomArtiste, imageArtiste = :imageArtiste, descriptionArtiste = :descriptionArtiste, idGenre = :genreArtiste 
                                        WHERE idArtiste = :idArtiste');
            $reponse->execute(array(
                'nomArtiste' => $nom,
                'imageArtiste' => $image,
                'descriptionArtiste' => $description,
                'genreArtiste' => $genre,
                'idArtiste' => $id
            ));
            $reponse->closeCursor();
        }

        function deleteArtistes($id){

            $db = $this->connexionDB();
            $reponse = $db->prepare('UPDATE Artistes SET is_deleted = 1 WHERE idArtiste = :idArtiste');
            $reponse->execute(array(
                'idArtiste' => $id
            ));
            $reponse->closeCursor();
        }

        function restoreArtiste($id){

            $db = $this->connexionDB();
            $reponse = $db->prepare('UPDATE Artistes SET is_deleted = 0 WHERE idArtiste = :idArtiste');
            $reponse->execute(array(
                'idArtiste' => $id
            ));
            $reponse->closeCursor();
        }

        function getArtistIsDeleted(){

            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT a.is_deleted, a.idArtiste, a.nomArtiste, gm.nomGenre 
                                        FROM Artistes AS a, genremusique AS gm 
                                            WHERE a.idGenre = gm.idGenre AND a.is_deleted = 1 ORDER BY nomArtiste');
            $reponse->execute();
            $artiste = $reponse->fetchAll();
            $reponse->closeCursor();
            return $artiste;
        }

        function annuleCommande($numCmd){

            $db = $this->connexionDB();
            $reponse = $db->prepare('UPDATE Commandes SET idStatusCommande = 3 WHERE idCommande = :idCommande');
            $reponse->execute(array(
                'idCommande' => $numCmd
            ));
            $reponse->closeCursor();
        }

        function validCommande($numCmd){

            $db = $this->connexionDB();
            $reponse = $db->prepare('UPDATE Commandes SET idStatusCommande = 2 WHERE idCommande = :idCommande');
            $reponse->execute(array(
                'idCommande' => $numCmd
            ));
            $reponse->closeCursor();
        }

        function getUser(){
            
            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT idUtilisateur FROM Utilisateurs');
            $reponse->execute();
            $allUser = $reponse->fetchAll();
            $reponse->closeCursor();
            return $allUser;
        }
    }

?>