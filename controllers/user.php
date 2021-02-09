<?php 

    require '../models/users.php';
    include '../views/inscription.php';

    if(isset($_POST['pseudo']) && $_POST['mdp'] && $_POST['email']){

        addUser($_POST['pseudo'], $_POST['mdp'], $_POST['email']);
        echo "l'inscription a réussie";

    }
    else{
        echo "l'inscription a ratée";
    }
    
?>