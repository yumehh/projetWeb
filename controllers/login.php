<?php
    require_once('models/users.php');
    require_once('views/login.php');

    function isValidUser($pseudo, $mdp){
        $user = new Users();
        $monUser =  $user->checkUserByPseudo($pseudo);
            if($monUser && password_verify($mdp, $monUser['pwUser'])){
                return $user;
            }
    }

    if(!empty($_POST)){
        if(!empty($_POST['pseudo']) && !empty($_POST['mdp'])){
            $userAuth = isValidUser($_POST['pseudo'], $_POST['mdp']);
            if($userAuth){
                $_SESSION['pseudo']=$_POST['pseudo'];
                //echo $_SESSION['pseudo'];
                //header('Location: welcome');
                exit();
            }else{
                $_SESSION['error'] = "mauvais login/mot de passe";
            }
        }
    }


?>