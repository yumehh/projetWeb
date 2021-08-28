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

        function getMusicById($id){
            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT m.idMusique, m.titre, m.prix, m.idArtiste, a.idArtiste, a.nomArtiste 
                                        FROM musiques AS m, artistes AS a 
                                            WHERE m.idArtiste = a.idArtiste AND idMusique = :idMusique');
            $reponse->execute(array(
                'idMusique' => $id
            ));
            $artiste = $reponse->fetchAll();
            $reponse->closeCursor();

            return $artiste;
        }  

        function getIdMusic($id){
            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT idMusique from musiques WHERE idMusique = :idMusique');
            $reponse->execute(array(
                'idMusique' => $id
            ));
            $idMusic = $reponse->fetch();
            $reponse->closeCursor();

            return $idMusic;
        }

        function getPrixByIdPanier($id){
            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT prix FROM musiques WHERE idMusique = :idMusique');
            $reponse->execute(array(
                'idMusique' => $id
            ));
            $prix = $reponse->fetchAll();
            $reponse->closeCursor();

            return $prix;
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
            $updateMusic = $reponse->fetch();
            $reponse->closeCursor();

            return $updateMusic;
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

        function MusicByArtistId($idArtiste){

            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT * FROM musiques where idArtiste =:idArtiste');
            $reponse->execute(array(
                'idArtiste' => $idArtiste
            ));
            $artistIdMusic = $reponse->fetchAll();
            $reponse->closeCursor();
            
            return $artistIdMusic;
        }

    }

?>