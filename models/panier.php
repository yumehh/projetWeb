<?php 

    require_once('models/connectDB.php');
    
    Class Panier extends ConnectDB {

        function creationPanier(){
            if(!isset($_SESSION['panier'])){
                $_SESSION['panier'] = array();
                $_SESSION['panier']['idMusique'] = array();
                $_SESSION['panier']['qte'] = array();
                $_SESSION['panier']['prixMusique'] = array();
            }
        }
    
        function ajoutPanier($tempId){
            array_push($_SESSION['panier']['idMusique'],$tempId['idMusique']);
            array_push($_SESSION['panier']['qte'], $tempId['qte']);
            array_push($_SESSION['panier']['prixMusique'],$tempId['prixMusique']); 
        }
    
        // function verif_panier($ref_musique){
        //     $present = false;
        //     if(count($_SESSION['panier']['idMusique']) > 0 && array_search($ref_musique, $_SESSION['panier']['idMusique']) !== false){
        //         $present = true;
        //     }
        //     return $present;
        // }
    
        // function vider_panier(){
            
        //     $vide = false;
        //     unset($_SESSION['panier']);
        //     if(!isset($_SESSION['panier'])){
        //         $vide = true;
        //     }
        //     return $vide;
        // }
    
        function montant_panier(){
        
            $montant = 0;
            $total_panier = count($_SESSION['panier']['idMusique']);
            for($i = 0; $i < $total_panier; $i++){

                $montant += $_SESSION['panier']['prixMusique'][$i];
            }
            return $montant;
        }

        function addCommande($idUtilisateur, $idMusic){
            $db= $this->connexionDB();
            $reponse = $db->prepare('INSERT INTO commandes(idStatusCommande, idUtilisateur, idMusique, date_commande) VALUES (1, :idUtilisateur, :idMusique, NOW())');
            $reponse->execute(array(
                'idUtilisateur' => $idUtilisateur,
                'idMusique' => $idMusic
            ));
            $reponse->closeCursor();
        }

        function getAllCommandByID($id){
            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT c.idCommande, m.idMusique, a.nomArtiste, m.titre, m.prix, sc.nom, c.date_commande from musiques as m, commandes as c, statuscommandes as sc, artistes as a 
                                        WHERE c.idStatusCommande = sc.idStatusCommande
                                            AND c.idMusique = m.idMusique 
                                                AND m.idArtiste = a.idArtiste
                                                    AND idUtilisateur = :idUtilisateur ORDER BY c.date_commande DESC');
            $reponse->execute(array(
                'idUtilisateur' => $id
            ));
            $allCmd = $reponse->fetchAll();
            $reponse->closeCursor();
            return $allCmd;
        }

        function getAllCommand(){
            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT c.idCommande ,m.idMusique, c.idUtilisateur, a.nomArtiste, m.titre, m.prix, sc.nom, c.date_commande from musiques as m, commandes as c, statuscommandes as sc, artistes as a 
                                        WHERE c.idStatusCommande = sc.idStatusCommande
                                            AND c.idMusique = m.idMusique 
                                                AND m.idArtiste = a.idArtiste
                                                     ORDER BY c.date_commande DESC');
            $reponse->execute();
            $allCmd = $reponse->fetchAll();
            $reponse->closeCursor();
            return $allCmd;
        }

        function annuleCommande($numCmd, $idUser){

            $db = $this->connexionDB();
            $reponse = $db->prepare('UPDATE commandes SET idStatusCommande = 3 WHERE idCommande = :idCommande AND idUtilisateur = :idUtilisateur');
            $reponse->execute(array(
                'idCommande' => $numCmd,
                'idUtilisateur' => $idUser
            ));
            $annuleCmd = $reponse->fetch();
            $reponse->closeCursor();
    
            return $annuleCmd;
        }
    
        function validCommande($numCmd, $idUser){
    
            $db = $this->connexionDB();
            $reponse = $db->prepare('UPDATE commandes SET idStatusCommande = 2 WHERE idCommande = :idCommande AND idUtilisateur = :idUtilisateur');
            $reponse->execute(array(
                'idCommande' => $numCmd,
                'idUtilisateur' => $idUser
            ));
            $validCmd = $reponse->fetch();
            $reponse->closeCursor();
    
            return $validCmd;
        }

    }

?>