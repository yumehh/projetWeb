<?php 

    require_once('models/clients.php');
    require_once('views/clients.php');
    
    $client = new Clients();
    $afficherClient = $client->getAll();

    switch(REQ_TYPE_ID){
    
        case "achat":
            require_once('views/achat.php');
            break;
        
        case "profil":
            require_once('views/profil.php');
            break;
    }
       
?>