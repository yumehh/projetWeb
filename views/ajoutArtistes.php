<?php 

    $title = "Artistes";
    $content = "Ajouts de l'artiste";
    //include 'includes/template.php';

?>

<!DOCTYPE html>
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

    <form action="" method="POST" enctype="multipart/form-data">
        
            <p><label for="nom">Nom de l'artiste :</label> <input type="text" name="nomArtiste" id="nom" required></p>
            <p><label for="description">Description de l'artiste :</label><br /><textarea name="descriptionArtiste" id="description" required></textarea></p>
            <p><label for="image">Image de l'artiste : </label> <br > <input type="file" name="imageArtiste" id=""> </p>
            <p><label for="genre">Genre de l'artiste : </label><select name="genreArtiste" id="genre">

                    <option value="defaut">Choississez une style</option>
                <?php foreach($genreMusiques as $genre):  ?>

                    <option value="<?=$genre['idGenre']?>"><?=$genre['nomGenre']?></option>

                <?php endforeach ?>

            </select></p>

            <h3> Musiques </h3>       
            <p><label for="titreMusique">Titre : </label> <input type="text" name="titreMusique"> </p>
            <p><label for="prixMusique"> Prix : </label> <input type="text" name="prixMusique"> </p>

            <p><input type="submit" name="envoyer"></p>
            
        </form>
        
        <script src="" async defer></script>
    </body>
</html>