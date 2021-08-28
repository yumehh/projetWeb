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
        <script src="script.js"></script>
        <link rel="stylesheet" href="../css/style.css">
        
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
    
    <h3>Barre de recherche par nom </h3>
    <form method="POST">
        <p><label for="recherche"> Recherche : </label> <input type="text" name="recherche" id="recherche" required></p>
        <p><input type="submit" name="envoyer"></p>
    </form>
    <table>
        <caption>Recherche</caption>
            <thead>
                <tr>
                    <th>artistes</th>
                    <th>informations supplémentaires</th>
                </tr>
		    </thead>

        <?php foreach($search as $searchVisitor): ?>

            <tr>
                <td><?= $searchVisitor['nomArtiste']?></td>
                <td>
                    <form method="GET" action="https://google.be/search" id="monform" target="_blank">
                        <input name="q" type="text" id="recherche" value= "<?= $searchVisitor['nomArtiste'] ?>" >
                        <input type="submit" value="Rechercher">
                </td>
            </tr>
    
        <?php endforeach ?>  
        </table>
    </body>
</html>