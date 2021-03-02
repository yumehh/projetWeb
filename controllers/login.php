<?php
    require_once('models/users.php');
    require_once('views/login.php');

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

                $_SESSION['pseudo']=$_POST['pseudo'];
                header('Location: admin');
                exit();

            }elseif($userAuth == "2"){

                $_SESSION['pseudo']=$_POST['pseudo'];
                header('Location: welcome');
                exit();

            }else{
                $_SESSION['error'] = "mauvais login/mot de passe";
            }
        }
    }

    // if(idRole = 1){
    //     header('Location: admin');
    // }

?>