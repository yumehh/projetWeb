<?php 

    require_once('models/clients.php');
    //require_once('views/clients.php');
    
    $client = new Clients();
    $afficherClient = $client->getAll();

    require_once('views/clients.php');

    switch(REQ_TYPE_ID){
        case "afficherClient":
            require_once('views/profil.php');
    }
       
?>