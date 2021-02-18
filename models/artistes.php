<?php 

require 'connexion_db.php';

function getAll(){
    $reponse = getDB()->prepare('SELECT * FROM artistes');
    $reponse->execute();
    $user = $reponse->fetch();
    $reponse->closeCursor();
    return $user;
}

function addArtistes($nom, $image, $description){

    $reponse = getDB()->prepare('INSERT INTO artistes(nomArtiste, imageArtiste, descriptionArtiste)
                                VALUES(:nomArtiste, :imageArtiste, :descriptionArtiste)');
    $reponse->execute(array(
        'nomArtiste' => $nom,
        'imageArtiste' => $image,
        'descriptionArtiste' => $description
    ));
    $reponse->closeCursor();
}

?>