<?php 

    require_once('views/inscription.php');
    require_once('models/users.php');

    $user = new Users();

    if(isset($_POST['pseudo']) && $_POST['pseudo'] && $_POST['email']){
        $user->addUser($_POST['pseudo'], $_POST['mdp'], $_POST['email']);
    }
?>

