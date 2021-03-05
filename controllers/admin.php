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

            if(REQ_ACTION){

                $detail = $afficher->getByNom(REQ_ACTION);
                $artistDetail = $afficher->getMusicArtiste($detail['idArtiste']);
                if(isset($detail) && isset($artistDetail)){
                    require_once('views/detailAdmin.php');
                }else{
                    require_once('views/404.php');
                }
            }else{
                $artist = $afficher->getAll();
                    if($artist){
                        require_once('views/afficherArtistes.php');
                    }else{
                        require_once('views/404.php');
                    }
            }

            break;    
    }
?>
