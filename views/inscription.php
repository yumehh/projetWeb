<?php 

$title='Inscription';
$content='Page d\'inscription';
include 'includes/template.php';

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
        <link rel="stylesheet" href="../bootstrap-5.1.0-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <script type="text/javascript" src="../js/script.js"></script>
    </head>
    <body>

    <form method="POST" id="inscription">
        <div class="form-group">
            <label for="pseudo">Pseudo</label>
            <input type="text" class="form-control" name="pseudo" id="pseudo" aria-describedby="pseudo" placeholder="Insérez votre pseudo" onsubmit=valider() >
        </div>
        <div class="form-group">
            <label for="mdp">Mot de passe</label>
            <input type="password" class="form-control" name="mdp" id="mdp" placeholder="Votre mot de passe" required>
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control"  name="email" id="email" aria-describedby="emailHelp" placeholder="Entrez votre email" required>
            <small id="emailHelp" class="form-text text-muted">Nous ne partagerons pas votre email avec d'autres personnes.</small>
        </div>
        <br />
        <button type="submit" class="btn btn-primary">S'inscrire</button>
       
    </form>
    </body>
</html>