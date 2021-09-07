<?php 

    require_once('models/connectDB.php');

    class Artistes extends ConnectDB {

        function getAll(){

            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT a.is_deleted, a.idArtiste, a.nomArtiste, gm.nomGenre FROM Artistes AS a, GenreMusique AS gm WHERE a.idGenre = gm.idGenre AND a.is_deleted != 1 ORDER BY nomArtiste');
            $reponse->execute();
            $artiste = $reponse->fetchAll();
            $reponse->closeCursor();
            return $artiste;
        }

        function getByNom($nomArtiste){

            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT * FROM Artistes where nomArtiste =:nomArtiste');
            $reponse->execute(array(
                'nomArtiste' => $nomArtiste
            ));
            $artiste = $reponse->fetch();
            $reponse->closeCursor();
            return $artiste;
        }

        function getInfoArtiste($idArtiste){

            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT * FROM Artistes where idArtiste = :idArtiste');
            $reponse->execute(array(
                'idArtiste' => $idArtiste
            ));
            $artiste = $reponse->fetchAll();
            $reponse->closeCursor();
            return $artiste;

        }  

        function getByNomArtiste($nomArtiste){
            
            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT nomArtiste FROM Artistes where nomArtiste = :nomArtiste');
            $reponse->execute(array(
                'nomArtiste' => $nomArtiste
            ));
            $artiste = $reponse->fetchAll();
            $reponse->closeCursor();
            return $artiste;
        }
}

?>