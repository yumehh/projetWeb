<?php 
    session_start();
    
    require '../models/users.php';
    include '../views/login.php';

    function isValidUser($pseudo, $mdp){
        $user = checkUserByPseudo($pseudo);
            if($user && password_verify($mdp, $user['pwUser'])){
                return $user;
            }
    }

    if(!empty($_POST)){
        if(!empty($_POST['pseudo']) && !empty($_POST['mdp'])){
            $user = isValidUser($_POST['pseudo'], $_POST['mdp']);
            if($user){
                $_SESSION['id'] = $user['id'];
                $_SESSION['message'] = "Bienvenue ". $user['pseudo'];
                header("Location: " . '../views/auth/welcome.php');
                exit();
            }else{
                $_SESSION['error'] = "mauvais login/mot de passe";
            }
        }
    }

?>