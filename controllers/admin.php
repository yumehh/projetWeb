<?php 

    require_once('models/admin.php');
    require_once('models/artistes.php');
    require_once('views/admin.php');

    

    switch(REQ_TYPE_ID){
        case "ajoutArtistes":
            require_once('views/ajoutArtistes.php');
            break;
        case "listeArtistes":
            require_once('views/listeArtistes.php');
            break;    
    }
?>



 <!-- $ajout = $artiste->addArtistes($_POST['nomArtiste'], $_POST['imageArtiste'], $_POST['descriptionArtiste']); -->