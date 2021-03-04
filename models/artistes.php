<?php 

    require_once('models/connectDB.php');

    class Artistes extends ConnectDB {

        function getAll(){
            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT a.nomArtiste, gm.nomGenre FROM artistes AS a, genremusique AS gm WHERE a.idGenre = gm.idGenre ORDER BY nomArtiste');
            $reponse->execute();
            $artiste = $reponse->fetchAll();

            $reponse->closeCursor();

            return $artiste;
        
        }

        function getByNom($nomArtiste){
            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT * FROM artistes where nomArtiste =:nomArtiste');
            $reponse->execute(array(
                'nomArtiste' => $nomArtiste
            ));
            $artiste = $reponse->fetch();
            $reponse->closeCursor();

            return $artiste;
        }

        function getMusicArtiste($idArtiste){
            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT am.idArtiste, am.idMusique, m.titre, m.prix 
                                        FROM artistesmusiques AS am, musiques AS m 
                                            WHERE idArtiste =:idArtiste    
                                                AND am.idMusique = m.idMusique');
            $reponse->execute(array(
                'idArtiste' => $idArtiste
            ));
            $artisteMusic = $reponse->fetchAll();
            $reponse->closeCursor();

            return $artisteMusic;
        }

}


?>