<?php 

    require_once('models/connectDB.php');

    class Artistes extends ConnectDB {

        function getAll(){
            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT * FROM artistes');
            $reponse->execute();
            $artiste = $reponse->fetchAll();

            $reponse->closeCursor();

            return $artiste;
        
        }

        function getById($id){
            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT * FROM artistes where id =:id');
            $reponse->execute(array(
                'id' => $id
            ));
            $artiste = $reponse->fetch();
            $reponse->closeCursor();

            return $artiste;
        }
    
        // function addArtistes($nom, $image, $description){
        
        //     $reponse = connexionDB()->prepare('INSERT INTO artistes(nomArtiste, imageArtiste, descriptionArtiste)
        //                                 VALUES(:nomArtiste, :imageArtiste, :descriptionArtiste)');
        //     $reponse->execute(array(
        //         'nomArtiste' => $nom,
        //         'imageArtiste' => $image,
        //         'descriptionArtiste' => $description
        //     ));
        //     $reponse->closeCursor();
        // }

}


?>