<?php 

    $title = "Liste d'artistes";
    $content = "Présentation des artistes";
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
        <link rel="stylesheet" href="">
    </head>
    <body>
     
    <table>
        <caption>Liste des artistes </caption>
            <thead>
                <tr>
                    <th> Artistes </th>
                    <th> Genre </th>
                </tr>
		    </thead>
                
            <?php foreach($artistes as $artiste): ?>
                <tr>
                    <td><a href= "/<?= REQ_TYPE?>/<?=$artiste['nomArtiste']?>"> <?=$artiste['nomArtiste']?> </a></td>
                    <td><?= $artiste['nomGenre'] ?></td>
                </tr>
                    
            <?php endforeach ?>   

    </table>
    
    <form method="POST">
        <p><label for="recherche"> Recherche : </label> <input type="text" name="recherche" id="recherche" required></p>
        <p><input type="submit" name="envoyer"></p>
    </form>
        
        <script src="" async defer></script>
    </body>
</html>