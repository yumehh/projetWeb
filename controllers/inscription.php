<?php 

    // require_once('models/users.php');
    // require_once('views/inscription.php');

    require 'models/users.php';
    include 'views/inscription.php';

    if(isset($_POST['pseudo']) && $_POST['pseudo'] && $_POST['email']){

        addUser($_POST['pseudo'], $_POST['mdp'], $_POST['email']);

        header('Location: welcome');
    }
    
?>

