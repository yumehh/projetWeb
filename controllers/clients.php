<?php 

    require_once('models/clients.php');
    require_once('views/clients.php');
    
    $client = new Clients();
    $afficherClient = $client->getAll();

    switch(REQ_TYPE_ID){
    
        case "profil":
            if(REQ_ACTION){
                $user = $client->getUserByNom(REQ_ACTION);
                $userDetail = $client->getUserById($user['idUtilisateur']);
                if(isset($user) && isset($userDetail)){
                    require_once('views/profil.php');
                }
                if(!empty($_POST)){
                    $modify = $client->updateUser($_POST['pseudo'], $_POST['pwUser'], $_POST['email'], $user['idUtilisateur']);
                }
            }
            
            break;

        case "achat":
            require_once('views/achat.php');
            break;

    }
       
?>