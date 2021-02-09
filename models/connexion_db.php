<?php 

function getDB(){
    try{
        //PDO
        $bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=UTF8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $bdd;

    }catch(Exception $e){
        die('Erreur : ' . $e->getMessage());
    }
}

?>