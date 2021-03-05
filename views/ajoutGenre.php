<?php 

    $title = "Ajout d'un genre";
    $content = "Ajout d'un genre";
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
        <script type="text/javascript" src="../js/script.js" async defer></script>
    </head>
    <body>
        
        <form name="formAjoutGenre">
            <p>Besoin de rajouter un genre ? </p> 
                <input type="radio" name="ajoutgenre" value="oui" ><label for="ajoutgenreoui">Oui</label>
                <input type="radio" name="ajoutgenre" value="non" checked="checked"><label for="ajoutgenrenon">Non</label>
            <p><input type="button" name="but" value="Quel est votre choix ?" onClick="choixAjoutGenre(formAjoutGenre)"></p>
        </form>
    
    <!-- <script type="text/javascript" src="../js/script.js" async defer></script> -->
    </body>
</html>