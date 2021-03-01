<?php 

    require_once('models/artistes.php');
    $artistesObjet = new Artistes();
    //$artistes = $artistesObjet->getAll();

    //echo "Bonjour " . $_SESSION['pseudo'];

    if(REQ_TYPE_ID)
        {

            $detailArtiste = $artistesObjet->getByNom(REQ_TYPE_ID);
            if(isset($detailArtiste)){

                require_once('views/detailArtiste.php');
            } else {
                require_once('views/404.php');
            }
            
        }else{
        $artistes = $artistesObjet->getAll();
        require_once("views/listeArtistes.php");
}

    
?>