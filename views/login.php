<?php 

$title='Login';
$content='Page de connexion';
include 'includes/template.php';
//include '../models/connexion_db.php';
include '../models/check_credentials.php';

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        
    <form method="POST" action="login.php">

        <p>Login : <input type="text" name="pseudo" required></p>
        <p>Mot de passe : <input type="password" name="mdp" required></p>
        <p><input type="submit" name="envoyer"></p>
    
    </form>

        <script src="" async defer></script>
    </body>
</html>