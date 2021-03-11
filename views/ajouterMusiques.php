<?php 

$title = "Afficher Musiques";
$content = "Afficher les musiques";
//include 'includes/template.php';

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

        <h3>Ajout d'une musique </h3>

        <form method="POST">

            <label for="titre">Titre : </label> <input type="text" name="titreMusique" required ><br />
            <label for="prix">Prix : </label> <input type="text" name="prixMusique" required > <br /><br />
            <input type="submit" name="envoyer">

        </form>
        
        <script src="" async defer></script>
    </body>
</html>