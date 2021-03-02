<?php 

    require_once('models/admin.php');
    require_once('views/admin.php');
    require_once('models/artistes.php');

    $admin = new Admin();
    $artiste = new Artistes();

    if(REQ_ACTION){
       $detailArtiste = $artiste->getByNom(REQ_ACTION);
       if($detailArtiste){
           require_once('views/detailArtiste.php');
       }else{
           require_once('views/404.php');
       }
    }else{
        $artistes = $artiste->getAll();
        require_once('views/listeArtistes.php');
    }

?>



 <!-- $ajout = $artiste->addArtistes($_POST['nomArtiste'], $_POST['imageArtiste'], $_POST['descriptionArtiste']); -->