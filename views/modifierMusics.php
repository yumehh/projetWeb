<?php 

    $title = "Modification de la musique ";
    $content = "Modification de la musique ";
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
        
        <form method="POST" enctype="multipart/form-data">

            <p><label for="numeroMusique"> Numéro de la musique : </label> <input type="text" name="numeroMusique" value="<?= REQ_ACTION ?>"> </p>
            <p><label for="idArtiste">ID de l'artiste :</label> <input type="text" name="idArtiste"></p>
            <p><label for="nomMusique"> Nom de la musique : </label> <input type="text" name="nomMusique"></p>
            <p><label for="prixMusique">Prix de la musique :</label> <input type="text" name="prixMusique"></p>

    <!-- <h3> Musiques </h3>       
    <p><label for="titreMusique">Titre : </label> <input type="text" name="titreMusique"> </p>
    <p><label for="prixMusique"> Prix : </label> <input type="text" name="prixMusique"> </p> -->

    <p><input type="submit" name="envoyer"></p>

    </form>

    </body>
</html>