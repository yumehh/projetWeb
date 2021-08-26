<?php 

    function creationPanier(){
        if(!isset($_SESSION['panier'])){
            $_SESSION['panier'] = array();
            $_SESSION['panier']['idMusique'] = array();
            // $_SESSION['panier']['nomArtiste'] = array();
            // $_SESSION['panier']['titreMusique'] = array();
            // $_SESSION['panier']['prixMusique'] = array();
        }
    }

    function ajoutPanier($tempId){
        array_push($_SESSION['panier']['idMusique'],$tempId['idMusique']); 
    }

?>