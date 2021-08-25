<?php 

    require_once('models/clients.php');
    require_once('models/artistes.php');
    require_once('models/musics.php');
    require_once('views/clients.php');
    
    $client = new Clients();
    $afficher = new Artistes();
    $music = new Musics();

    $afficherClient = $client->getAll();
    $afficherArtistes = $afficher->getAll();

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
            if(REQ_ACTION){

                $detailArtiste = $afficher->getByNom(REQ_ACTION);
                $musiqueArtiste = $music->MusicByArtistId($detailArtiste['idArtiste']);
                if(isset($musiqueArtiste)){
                    require_once('views/detailArtisteClient.php');
                }
            }else{
                require_once('views/achat.php');
            }

            break;
    }
       
?>