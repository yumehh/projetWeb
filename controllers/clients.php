<?php 

    require_once('models/clients.php');
    require_once('models/artistes.php');
    require_once('models/musics.php');
    require_once('models/panier.php');
    require_once('views/clients.php');
    
    $client = new Clients();
    $afficher = new Artistes();
    $music = new Musics();
    $panier = new Panier();

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

        case "achat":
            if(REQ_ACTION){

                $detailArtiste = $afficher->getByNom(REQ_ACTION);
                $musiqueArtiste = $music->MusicByArtistId($detailArtiste['idArtiste']);
                if(isset($musiqueArtiste)){
                    require_once('views/detailArtisteClient.php');
               }
            }else{
                require_once('views/achat.php');
            }

            break;

        case "panier":
                if(!empty($_POST)){

                    //affichage
                    $getMusic = $music->getMusicById($_POST['achatMusique']);
                    print_r($getMusic);

                    //compta panier
                    $idMusicPanier = $panier->getMusicByIdPanier($_POST['achatMusique']);
                    print_r($idMusicPanier);
                    $musicPrixPanier = $panier->getPrixByIdPanier($_POST['achatMusique']);
                   // print_r($musicPrixPanier);

                    
                    //je stocke dans un tableau l'idMusique
                    $tempId = array();
                    $tempId['idMusique'] = $idMusicPanier;
                    $tempId['qte'] = 1;
                    $tempId['prixMusique'] = $musicPrixPanier;

                    $panier->creationPanier();
                    
                    if(isset($_SESSION['panier'])){
                        $panier->ajoutPanier($tempId);
                        $prix = $panier->montant_panier();   
                        echo $prix;

                        // $verif = $panier->verif_panier($idMusicPanier);
                        // var_dump($verif);
                    }
                    
                    // $panier->addCommande(1, $idMusicPanier);

                    require_once('views/panier.php');
                }else{
                    require_once('views/panier.php');
                }     
    }
       
?>