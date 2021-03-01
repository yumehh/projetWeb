<?php 

$title='Login';
$content='Page de connexion';
include 'includes/template.php';

?>

<!DOCTYPE html>
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
        
    <form method="POST">

        <p><label for="pseudo"> Login : </label> <input type="text" name="pseudo" id="pseudo" required></p>
        <p><label for="mdp"> Mot de passe : </label><input type="password" name="mdp" id="mdp" required></p>
        <p><input type="submit" name="envoyer"></p>
    
    </form>

        <script src="" async defer></script>
    </body>
</html>