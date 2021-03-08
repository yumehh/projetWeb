<?php 

    require_once('models/admin.php');
    require_once('models/artistes.php');
    require_once('models/genreMusique.php');
    require_once('views/admin.php');

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
                elseif(!empty($_POST['nomArtiste']) && !empty($_POST['imageArtiste']) && !empty($_POST['descriptionArtiste']) && !empty($_POST['genreArtiste'])){
                   $ajout = $admin->addArtistes($_POST['nomArtiste'], $_POST['imageArtiste'], $_POST['descriptionArtiste'], $_POST['genreArtiste']);
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
            
                require_once('views/modifierArtistes.php');
                
    }
?>
