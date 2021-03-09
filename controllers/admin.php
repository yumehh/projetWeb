<?php 

    require_once('models/admin.php');
    require_once('models/artistes.php');
    require_once('models/genreMusique.php');
    require_once('views/admin.php');
    require_once('fonctions/sendImg.php');

    $admin = new Admin();
    $genre = new GenreMusique();
    $afficher = new Artistes();

    $genreMusiques = $genre->getAll();
    $afficherArtistes = $afficher->getAll();
    //$rechercheArtiste = $afficher->getByNom();
    


    switch(REQ_TYPE_ID){

        case "ajoutArtistes":
            require_once('views/ajoutArtistes.php');
            if(!empty($_POST)){
                if($_POST['genreArtiste'] == "1"){
                    require_once('views/ajoutGenre.php');
                }
                elseif(!empty($_POST['nomArtiste']) && !empty($_FILES['imageArtiste']) && !empty($_POST['descriptionArtiste']) && !empty($_POST['genreArtiste'])){

                    $receiveImg = insertImg($_FILES['imageArtiste']);

                  $ajout = $admin->addArtistes($_POST['nomArtiste'], $receiveImg[1], $_POST['descriptionArtiste'], $_POST['genreArtiste']);
                }  
            }
            break;

        case "afficherArtistes":
            if(REQ_ACTION)
            {
            $detailArtiste = $afficher->getByNom(REQ_ACTION);
            $artistMusics = $afficher->getMusicArtiste($detailArtiste['idArtiste']); //on récupère l'ID artiste lié au titre de la musique
                
            if(isset($detailArtiste) && isset($artistMusics)){

                    require_once('views/detailArtiste.php');

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

                if(!empty($_POST)){

                    $receiveImg = insertImg($_FILES['imageArtiste']);

                    $modify = $admin->updateArtistes($_POST['nomArtiste'], $receiveImg[1], $_POST['descriptionArtiste'], $_POST['genreArtiste'], $_POST['idArtiste']);

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
           //$artistesDeleted = $afficher->getAll();
           
            foreach($artistesDeleted as $deleted){

                $idDeleted = $deleted['idArtiste'];
                $restore = $admin->restoreArtiste($idDeleted);
            }

            require_once('views/restaurerArtistes.php');

            break;


    }
?>
