<?php 

    require_once('models/connectDB.php');

    class Artistes extends ConnectDB {

        function getAll(){
            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT * FROM artistes');
            $reponse->execute();
            $artiste = $reponse->fetch();

            // while($donnees = $reponse->fetch(PDO::FETCH_ASSOC)){
            //     //var_dump($donnees);
            //     echo "<br />";
            //     echo $donnees['nomArtiste'];
            // }

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