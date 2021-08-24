<?php 

    require_once('models/connectDB.php');

    class Musics extends ConnectDB {

        function getAll(){
            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT m.idMusique, m.titre, m.prix, m.is_deleted, m.idArtiste, a.idArtiste, a.nomArtiste 
                                        FROM musiques AS m, artistes AS a 
                                            WHERE m.idArtiste = a.idArtiste AND m.is_deleted != 1 ORDER BY a.nomArtiste');
            $reponse->execute();
            $musics = $reponse->fetchAll();
    
            $reponse->closeCursor();
    
            return $musics;

        }

        function addMusic($titre, $prix, $idArtiste){

            $db = $this->connexionDB();
            $reponse = $db->prepare('INSERT INTO musiques(titre, prix, is_deleted, idArtiste) VALUES(:titre, :prix, 0, :idArtiste)');
            $reponse->execute(array(
                'titre' => $titre,
                'prix' => $prix,
                'idArtiste' => $idArtiste
            ));
            $reponse->closeCursor();
    
            return $reponse;
        }
    

        function updateMusic($titre, $prix, $idArtiste, $id){

            $db = $this->connexionDB();
            $reponse = $db->prepare('UPDATE musiques SET titre = :titre, prix = :prix, idArtiste =:idArtiste WHERE idMusique = :idMusique');
            $reponse->execute(array(
            'titre' => $titre,
            'prix' => $prix,
            'idArtiste' => $idArtiste,
            'idMusique' => $id
        ));
            $reponse->closeCursor();

            return $reponse;
        }

        function deleteMusic($id){

            $db = $this->connexionDB();
            $reponse = $db->prepare('UPDATE musiques SET is_deleted = 1 WHERE idMusique = :idMusique');
            $reponse->execute(array(
                'idMusique' => $id
            ));
            $reponse->closeCursor();
    
            return $reponse;
        }


        function getMusicIsDeleted(){

            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT * from musiques WHERE is_deleted = 1 ');
            $reponse->execute();
            $musics = $reponse->fetchAll();
            $reponse->closeCursor();
    
                return $musics;
        }


        function restoreMusics($id){

            $db = $this->connexionDB();
            $reponse = $db->prepare('UPDATE musiques SET is_deleted = 0 WHERE idMusique = :idMusique');
            $reponse->execute(array(
                'idMusique' => $id
            ));
            $reponse->closeCursor();
    
            return $reponse;
        }

        function getMusicByArtistId($idArtiste){

            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT * FROM musiques where idArtiste =:idArtiste');
            $reponse->execute(array(
                'idArtiste' => $idArtiste
            ));
            $artistMusic = $reponse->fetchAll();
            $reponse->closeCursor();
            
            return $artistMusic;
        }
    
    }

?>