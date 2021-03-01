<?php 

    require_once('models/artistes.php');
    $artistesObjet = new Artistes();

    if(REQ_TYPE_ID)
        {
            // echo "coucou";
            $detailArtiste = $artistesObjet->getById($id);
            
        }else{
    
    $artistes = $artistesObjet->getAll();
    require_once("views/listeArtistes.php");
}

    
?>