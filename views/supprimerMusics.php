<?php 

    $title = "Suppression de la musique";
    $content = "Suppression de la musique";
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
        <script src="../js/script.js" async defer></script>
    </head>
    <body>

    <h1>Supprimer artiste</h1>

        <form method="POST" name="formdelete">  

            <p>
                <label for="choix">Voulez-vous supprimer cette musique ? </label>
                <input type="radio" name="ajoutgenre" value="oui" ><label for="ajoutgenreoui" >Oui</label>
                <input type="radio" name="ajoutgenre" value="non" checked="checked"><label for="ajoutgenrenon">Non</label>
                <input type="submit" value="Choix" onClick="noDelete(formdelete)" >
            </p>

        </form>
        
    </body>
</html>