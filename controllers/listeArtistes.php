<?php 

    require_once('models/artistes.php');

    $artiste = new Artistes();
    $artiste = $artiste->getAll();

    require_once("views/listeArtistes.php");
?>