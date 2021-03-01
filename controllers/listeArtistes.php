<?php 

    require_once('models/artistes.php');

    $artistes = new Artistes();
    $artistes->getAll();

    require_once("views/listeArtistes.php");
?>