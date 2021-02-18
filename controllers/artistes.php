<?php 

    require '../models/artistes.php';
    include '../views/artistes.php';

    if(isset($_POST['nomArtiste']) && $_POST['imageArtiste'] 
        && $_POST['descriptionArtiste']){
            
            addArtistes($_POST['nomArtiste'], $_POST['imageArtiste'], $_POST['descriptionArtiste']);
            echo "ajout artistes réalisé";
        }
        else{
            echo "Ajouts artistes a foiré";
        }

?>