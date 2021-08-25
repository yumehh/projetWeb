<?php 

    require_once('models/admin.php');
    require_once('models/artistes.php');
    require_once('models/genreMusique.php');
    require_once('models/musics.php');
    require_once('models/clients.php');
    require_once('views/admin.php');
    require_once('fonctions/sendImg.php');

    $admin = new Admin();
    $genre = new GenreMusique();
    $afficher = new Artistes();
    $music = new Musics();
    $client = new Clients();

    $genreMusiques = $genre->getAll();
    $afficherArtistes = $afficher->getAll();
    $afficherMusics = $music->getAll();
    $afficherMusicDeleted = $music->getMusicIsDeleted();
    $musiqueArtiste = $music->MusicByArtistId(REQ_ACTION_2);
    

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

        case "ajoutArtistes":
            require_once('views/ajoutArtistes.php');
            if(!empty($_POST)){
                if($_POST['genreArtiste'] == "1"){
                    require_once('views/ajoutGenre.php');
                }
                elseif(!empty($_POST['nomArtiste']) && !empty($_FILES['imageArtiste']) && !empty($_POST['descriptionArtiste']) 
                        && !empty($_POST['genreArtiste'])){

                    $receiveImg = insertImg($_FILES['imageArtiste']);

                  $ajout = $admin->addArtistes($_POST['nomArtiste'], $receiveImg[1], $_POST['descriptionArtiste'], $_POST['genreArtiste']);
                
                } 
            }
            break;

        case "afficherArtistes":
            if(REQ_ACTION)
            {
                $detailArtiste = $afficher->getByNom(REQ_ACTION);
                $artistMusics = $afficher->getInfoArtiste($detailArtiste['idArtiste']); 
                
            if(isset($detailArtiste) && isset($artistMusics)){

                    if(!empty($_SESSION)){
                        if(!empty($_POST['titreMusique']) && !empty($_POST['prixMusique'])){
                            $addMusics = $music->addMusic($_POST['titreMusique'], $_POST['prixMusique'], $detailArtiste['idArtiste']);
                        }

                        require_once('views/detailArtiste.php');
                    }
                    
                }else {
                    require_once('views/404.php');
                }
            }else{
                $artistes = $afficher->getAll();
                if($artistes){
                    require_once('views/afficherArtistes.php');
                }else{
                    require_once('views/404.php');
                }
            }
            break;
        
        case "modifierArtistes":
                $artistes = $afficher->getAll();
                require_once('views/modifierArtistes.php');
                $detailArtiste = $afficher->getByNom(REQ_ACTION_2);
                if(!empty($_POST)){
                    $receiveImg = insertImg($_FILES['imageArtiste']);
                    $modify = $admin->updateArtistes($_POST['nomArtiste'], $receiveImg[1], $_POST['descriptionArtiste'], $_POST['genreArtiste'], $detailArtiste['idArtiste']);

                }  
            
            break;      
        
        case "supprimerArtistes":
            $artistes = $afficher->getAll();
            require_once('views/supprimerArtistes.php');
            if(!empty($_POST)){
                $delete = $admin->deleteArtistes(REQ_ACTION);
            }
        
           break;

        case "restaurerArtistes":

           $artistesDeleted = $admin->getArtistIsDeleted();
            require_once('views/restaurerArtistes.php');
            foreach($artistesDeleted as $deleted){
                $idDeleted = $deleted['idArtiste'];
                $restore = $admin->restoreArtiste($idDeleted);
            }
            break;
        
        case "afficherMusiques":

            $musique = $music->getAll();
            if($musique){
                require_once('views/afficherMusiques.php');
            }else{
                require_once('views/404.php');
            }
            break;
        
        
        case "detailArtiste":

            $detailArtiste = $afficher->getByNom(REQ_ACTION);
                if(isset($getMusicArtist)){
                    require_once('views/detailArtiste.php');
                }else{
                    require_once('views/404.php');
                }
    
                break;


        case "modifierMusics":
                $musique = $music->getAll();
                require_once('views/modifierMusics.php');
                $musicById = $music->getMusicById(REQ_ACTION);
                if(!empty($_POST)){
                    $modify = $music->updateMusic($_POST['nomMusique'], $_POST['prixMusique'], $_POST['idArtiste'], $musicById['idMusique']);
                }

            break; 
            
        case "supprimerMusics":
            $musique = $music->getAll();
            require_once('views/supprimerMusics.php');
            if(!empty($_POST)){
                $delete = $music->deleteMusic(REQ_ACTION);
            }

            break;

        case "restaurerMusiques":

           $musiqueDeleted = $music->getMusicIsDeleted();
           foreach($musiqueDeleted as $deleted){
            $idDeleted = $deleted['idMusique'];
            $restore = $music->restoreMusics($idDeleted);
            }
            require_once('views/restaurerMusiques.php');

            break; 

    }
?>