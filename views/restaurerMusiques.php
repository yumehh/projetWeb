<?php 

$title = "Restaurer Musiques";
$content = "Restaurer les musiques";
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
        
    <h1> Restauration des musiques </h1>

    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Numéro de musique</th>
            <th scope="col">Titre</th>
            <th scope="col">Prix</th>
            <th scope="col">Restauration</th>
            </tr>
        </thead>
  <tbody>
  <form method="POST">
            
            <?php foreach($afficherMusicDeleted as $deleted): ?>
                <tr>
                    <td><?= $deleted['idMusique'] ?></td>
                    <td><?= $deleted['titre'] ?></td>
                    <td><?= $deleted['prix'] ?></td>
                    <td><p><label for="choix">Voulez-vous restaurer cet artiste ? </label>
                        <input type="radio" name="ajoutgenre" value="oui" ><label for="ajoutgenreoui" >Oui</label>
                        <input type="radio" name="ajoutgenre" value="non" checked="checked"><label for="ajoutgenrenon">Non</label>
                        <input type="submit" name="envoyer"></p>
                    </td>  
                </tr>
            <?php endforeach ?>

    </form>
  </tbody>
</table>
        
    </body>
</html>