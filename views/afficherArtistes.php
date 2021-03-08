<?php 

    $title = "Artistes";
    $content = "Ajouts de l'artiste";
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
        <link rel="stylesheet" href="../css/style.css">
        <script type="text/javascript" src="../js/script.js" async defer></script>
    </head>
    <body>
    <table>
        <caption>Liste des artistes </caption>
            <thead>
                <tr>
                    <th>Numéro de l'Artiste</th>
                    <th> Détail Artistes </th>
                    <th> Artistes </th>
                    <th> Genre </th>
                </tr>
		    </thead>
                
            <?php foreach($afficherArtistes as $artiste): ?>

                <tr>
                    <td><?= $artiste['idArtiste']?></td>
                    <td><a href= "/<?= REQ_TYPE ?>/<?= REQ_TYPE_ID ?>/<?=$artiste['nomArtiste']?>"> <?=$artiste['nomArtiste']?> </a></td>
                    <td><?= $artiste['nomArtiste']?></td>
                    <td><?= $artiste['nomGenre'] ?></td>

                    <td> <button class="btn">Modifier</button></td>
                
                    <td>Supprimer</td>
                   
                </tr>
                    
            <?php endforeach ?>   

    </table>  

            <?php foreach($afficherArtistes as $artiste): ?>

                    <form method="POST" class="form__off">
                
                    <p><label for="nom">Nom de l'artiste :</label> <input type="text" name="nomArtiste" id="nom" value="<?= $artiste['nomArtiste']?>"></p>
                    <p><label for="description">Description de l'artiste :</label><br /><textarea name="descriptionArtiste" id="description" required></textarea></p>
                    <p><label for="image">Image de l'artiste : </label> <br ><textarea name="imageArtiste" id="image" required></textarea></p>
                    <p><label for="genre">Genre de l'artiste : </label>
                    
                    <select name="genreArtiste" id="genre">

                    <option value="defaut">Choississez une style</option>

                        <?php foreach($genreMusiques as $genre):  ?>

                    <option value="<?=$genre['idGenre']?>"><?=$genre['nomGenre']?></option>

                        <?php endforeach ?>

                    </select></p>

                <p><input type="submit" name="envoyer"></p>

                </form>

            <?php endforeach ?>          

</form>
        
    </body>
</html>