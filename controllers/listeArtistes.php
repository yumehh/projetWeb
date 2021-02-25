<?php 

    require('models/artistes.php');

    $reponse = getAll();

    require_once("views/listeArtistes.php");

?>