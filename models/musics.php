<?php 

    require_once('models/connectDB.php');

    class Musics extends ConnectDB {

        function getAll(){
            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT * FROM musiques WHERE is_deleted != 1');
            $reponse->execute();
            $musics = $reponse->fetchAll();
    
            $reponse->closeCursor();
    
            return $musics;

        }

        function addMusic($titre, $prix){

            $db = $this->connexionDB();
            $reponse = $db->prepare('INSERT INTO musiques(titre, prix, is_deleted) VALUES(:titre, :prix, 0)');
            $reponse->execute(array(
                'titre' => $titre,
                'prix' => $prix
            ));
            $reponse->closeCursor();
    
            return $reponse;
        }
    

        function updateMusic($titre, $prix, $id){

            $db = $this->connexionDB();
            $reponse = $db->prepare('UPDATE musiques SET titre = :titre, prix = :prix WHERE idMusique = :idMusique');
            $reponse->execute(array(
            'titre' => $titre,
            'prix' => $prix,
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
    
    }

?>