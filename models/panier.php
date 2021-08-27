<?php 

    require_once('models/connectDB.php');
    
    Class Panier extends ConnectDB {

        function getMusicByIdPanier($id){
            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT idMusique FROM musiques WHERE idMusique = :idMusique');
            $reponse->execute(array(
                'idMusique' => $id
            ));
            $music = $reponse->fetchAll();
            $reponse->closeCursor();

            return $music;
        }

        function getPrixByIdPanier($id){
            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT prix FROM musiques WHERE idMusique = :idMusique');
            $reponse->execute(array(
                'idMusique' => $id
            ));
            $prix = $reponse->fetchAll();
            $reponse->closeCursor();

            return $prix;
        }

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
    
        function verif_panier($ref_musique){
            $present = false;
            if(count($_SESSION['panier']['idMusique']) > 0 && array_search($ref_musique, $_SESSION['panier']['idMusique']) !== false){
                $present = true;
            }
            return $present;
        }
    
        function vider_panier(){
            
            $vide = false;
            unset($_SESSION['panier']);
            if(!isset($_SESSION['panier'])){
                $vide = true;
            }
            return $vide;
        }
    
        function montant_panier(){
        
            $montant = 0;
            $total_panier = count($_SESSION['panier']['idMusique']);
            for($i = 0; $i < $total_panier; $i++){

                $montant += $_SESSION['panier']['prixMusique'][$i] * $_SESSION['panier']['qte'][$i];
            }
            return $montant;
        }

        function addCommande($idUser, $idMusic){
            $db= $this->connexionDB();
            $reponse = $db->prepare('INSERT INTO commandes(idStatusCommande, idUtilisateur, idMusique) VALUES (1, :idUtilisateur, :idMusique)');
            $reponse->execute(array(
                'idUtilisateur' => $idUser,
                'idMusique' => $idMusic
            ));
            $reponse->closeCursor();
        
        return $reponse;

        }
    }

    

?>