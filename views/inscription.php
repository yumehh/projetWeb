<?php 

$title='Inscription';
$content='Page d\'inscription';
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
        <script type="text/javascript" src="../js/script.js"></script>
    </head>
    <body>

    <form method="POST" id="inscription">
        <div class="form-group">
            <label for="pseudo">Pseudo</label>
            <input type="text" class="form-control" name="pseudo" id="pseudo" aria-describedby="pseudo" placeholder="Insérez votre pseudo" >
        </div>
        <div class="form-group">
            <label for="mdp">Mot de passe</label>
            <input type="password" class="form-control" name="mdp" id="mdp" placeholder="Votre mot de passe" >
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control"  name="email" id="email" aria-describedby="emailHelp" placeholder="Entrez votre email" >
            <small id="emailHelp" class="form-text text-muted">Nous ne partagerons pas votre email avec d'autres personnes.</small>
        </div>
        <br />
        <button type="submit" class="btn btn-primary">S'inscrire</button>
       
    </form>
    <p style="color: red;" id="erreur"></p>

    </body>
</html>