<?php
    require_once('models/users.php');
    require_once('views/login.php');

    function isValidUser($pseudo, $mdp){
        $user = new Users();
        $user->checkUserByPseudo($pseudo);
            if($user && password_verify($mdp, $user['pwUser'])){ // problème ICI
                echo "isValidUser OKAY";
                return $user;
            }
            else
            {
                echo "isValidUser FAIL";
            }
    }

    if(!empty($_POST)){
        if(!empty($_POST['pseudo']) && !empty($_POST['mdp'])){
            $user = isValidUser($_POST['pseudo'], $_POST['mdp']);
            if($user){
                // $_SESSION['id'] = $user['id'];
                // $_SESSION['message'] = "Bienvenue ". $user['pseudo'];
                header('Location: welcome');
                exit();
            }else{
                $_SESSION['error'] = "mauvais login/mot de passe";
            }
        }
    }


?>