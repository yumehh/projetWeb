<?php 

    require_once('models/admin.php');
    require_once('models/artistes.php');
    require_once('views/admin.php');
    //require_once('views/ajoutArtistes.php');

   if(REQ_TYPE_ID){
    require_once('views/ajoutArtistes.php');
   } 

?>



 <!-- $ajout = $artiste->addArtistes($_POST['nomArtiste'], $_POST['imageArtiste'], $_POST['descriptionArtiste']); -->