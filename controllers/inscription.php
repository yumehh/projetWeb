<?php 

    require_once('models/users.php');
    require_once('views/inscription.php');

    $user = new Users();

    if(isset($_POST['pseudo']) && $_POST['pseudo'] && $_POST['email']){
        $user->addUser($_POST['pseudo'], $_POST['mdp'], $_POST['email']);
        return $user;
        header('Location: welcome');
    }
?>

