<?php

    require_once('models/users.php');

    $user = new Users();

    function isValidUser($pseudo, $mdp){
        $user = new Users();
        $monUser =  $user->checkUserByPseudo($pseudo);
            if($monUser && password_verify($mdp, $monUser['pwUser'])){
                return $monUser['idRole'];
            }else{
                return "Pas de role défini";
            }
    }

    if(!empty($_POST)){
        if(!empty($_POST['pseudo']) && !empty($_POST['mdp'])){
            $userAuth = isValidUser($_POST['pseudo'], $_POST['mdp']);
            if($userAuth == "1"){
                $userID = $user->getIdUser($_POST['pseudo']);
                $_SESSION['userID'] = $userID;
                $_SESSION['pseudo']=$_POST['pseudo'];
                header('Location: admin');
                exit();
            }elseif($userAuth == "2"){
                $userID = $user->getIdUser($_POST['pseudo']);
                $_SESSION['userID'] = $userID;
                $_SESSION['pseudo'] = $_POST['pseudo'];
                $test = $user->getIdUser($_POST['pseudo']);
                header('Location: clients');
                exit();
            }else{
                $_SESSION['error'] = "mauvais login/mot de passe";
            }
        }
    }

    require('views/login.php');
?>