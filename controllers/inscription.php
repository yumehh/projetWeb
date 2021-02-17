<?php 

    require '../models/users.php';
    include '../views/inscription.php';

    if(isset($_POST['pseudo']) && $_POST['mdp'] && $_POST['email']){

        addUser($_POST['pseudo'], $_POST['mdp'], $_POST['email']);

    }
    else{
        echo "l'inscription a ratée";
    }
    
?>