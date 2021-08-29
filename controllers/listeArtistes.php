<?php 

    require_once('models/clients.php');
    require_once('models/artistes.php');
    require_once('models/musics.php');

    $afficher = new Artistes();
    $music = new Musics();


    switch(REQ_TYPE){

        case "listeArtistes":

            if(REQ_TYPE){
                if(isset($_POST) AND !empty($_POST)){
                    $_POST[] = null;
                    $search = $afficher->getByNomArtiste($_POST['recherche']);
                }
            }
            if(REQ_TYPE_ID){

            $detailArtiste = $afficher->getByNom(REQ_TYPE_ID);
            $musiqueArtiste = $music->MusicByArtistId($detailArtiste['idArtiste']);

            if(isset($musiqueArtiste)){
                require_once('views/infoArtiste.php');
            }

        }else{
                $artistes = $afficher->getAll();    
                if($artistes){
                    require_once('views/listeArtistes.php'); }
                else{
                    require_once('views/404.php');
                }
            }
                
    }

 
    
?>