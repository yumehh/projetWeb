<?php 

    require_once('models/clients.php');
    require_once('models/artistes.php');
    require_once('models/musics.php');
    require_once('models/panier.php');
    require_once('models/users.php');
    require_once('views/clients.php');
    
    
    $client = new Clients();
    $afficher = new Artistes();
    $music = new Musics();
    $panier = new Panier();
    $user = new Users();

    $afficherClient = $client->getAll();
    $afficherArtistes = $afficher->getAll();
    $afficherMusic = $music->getAll();

    switch(REQ_TYPE_ID){
    
        case "profil":
            if(REQ_ACTION){
                $user = $client->getUserByNom(REQ_ACTION);
                $userDetail = $client->getUserById($user['idUtilisateur']);
                if(isset($user) && isset($userDetail)){
                    require_once('views/profil.php');
                }
                if(!empty($_POST)){
                    $modify = $client->updateUser($_POST['pseudo'], $_POST['pwUser'], $_POST['email'], $user['idUtilisateur']);
                }
            }
            
            break;

        case "artistes":
            if(REQ_ACTION){

                $detailArtiste = $afficher->getByNom(REQ_ACTION);
                $musiqueArtiste = $music->MusicByArtistId($detailArtiste['idArtiste']);
                if(isset($musiqueArtiste)){
                    require_once('views/detailArtisteClient.php');
               }
            }else{
                require_once('views/artistes.php');
            }

            break;

        case "panier":
                if(!empty($_POST)){

                    //affichage
                    $getMusic = $music->getMusicById($_POST['achatMusique']);

                    //compta panier
                    $idMusicPanier = $music->getIdMusic($_POST['achatMusique']);
                    $musicPrixPanier = $music->getPrixByIdPanier($_POST['achatMusique']);

                    foreach($_SESSION['userID'] as $test){
                        $test;
                    }

                    $panier->addCommande($test, $_POST['achatMusique']);

                   foreach($musicPrixPanier as $prixMusic){
                        $prixMusic[0];
                   }
                    
                    //je stocke dans un tableau l'idMusique
                    $tempId = array();
                    $tempId['idMusique'] = $idMusicPanier;
                    $tempId['qte'] = 1;
                    $tempId['prixMusique'] = $prixMusic['prix'];
                    
                    $panier->creationPanier();
                    
                    if(isset($_SESSION['panier'])){
                        $panier->ajoutPanier($tempId);
                        $prix = $panier->montant_panier();   
                        

                        // $verif = $panier->verif_panier($idMusicPanier);
                        // var_dump($verif);
                    }
                    
                    require_once('views/panier.php');
                }else{
                    require_once('views/panier.php');
                }     
    }
       
?>