<?php 

    require 'models/users.php';
    require 'views/inscription.php';

    // require 'models/users.php';
    // include 'views/inscription.php';

    // if(isset($_POST['pseudo']) && $_POST['pseudo'] && $_POST['email']){
    //     addUser($_POST['pseudo'], $_POST['mdp'], $_POST['email']);
    //     header('Location: login');
    // }

    function ajouterUser(){
        $user = new Users();
        $ajout = $user->addUser($_POST['pseudo'], $_POST['mdp'], $_POST['email']);
        return $ajout;
    }
    
?>

