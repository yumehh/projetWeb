<?php 
    require_once('views/profil.php');
    require_once('models/clients.php');

    $client = new Clients();
    $getClient = $client->getAll();

    if($client){
        require_once('views/profil.php');
    }

?>