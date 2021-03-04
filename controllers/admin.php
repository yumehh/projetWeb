<?php 

    require_once('models/admin.php');
    require_once('models/artistes.php');
    require_once('views/admin.php');

    $admin = new Admin();

    switch(REQ_TYPE_ID){

        case "ajoutArtistes":
            
            require_once('views/ajoutArtistes.php');

            if(!empty($_POST)){

                if(!empty($_POST['nomArtiste']) && !empty($_POST['imageArtiste']) && !empty($_POST['descriptionArtiste']) && !empty($_POST['genreArtiste'])){

                    $ajout = $admin->addArtistes($_POST['nomArtiste'], $_POST['imageArtiste'], $_POST['descriptionArtiste'], $_POST['genreArtiste']);
                }  
            }else{
                echo "Ajout de l'artiste est un échec.";
            }
            break;

        case "listeArtistes":
            require_once('views/listeArtistes.php');
            break;    
    }
?>



 <!-- $ajout = $artiste->addArtistes($_POST['nomArtiste'], $_POST['imageArtiste'], $_POST['descriptionArtiste']); -->