<?php 

    require_once('models/artistes.php');
    $artistesObjet = new Artistes();


    if(REQ_TYPE_ID)
        {

            $detailArtiste = $artistesObjet->getByNom(REQ_TYPE_ID);

            $artistMusics = $artistesObjet->getMusicArtiste($detailArtiste['idArtiste']); //on récupère l'ID artiste lié au titre de la musique
            
            if(isset($detailArtiste) && isset($artistMusics)){

                require_once('views/detailArtiste.php');
            } else {
                require_once('views/404.php');
            }
            
        }else{
        $artistes = $artistesObjet->getAll();
        require_once("views/listeArtistes.php");
}

    
?>