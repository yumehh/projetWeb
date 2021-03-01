<?php 

    require_once('models/users.php');
    require_once('views/inscription.php');

    if(isset($_POST['pseudo']) && $_POST['pseudo'] && $_POST['email']){

        $user = new Users();
        $user->addUser($_POST['pseudo'], $_POST['mdp'], $_POST['email']);
        return $user;

        header('Location: welcome');
    }
    
?>

