<?php 

    $title = "Artistes";
    $content = "Ajouts de l'artiste";
    include 'includes/template.php';

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
    </head>
    <body>

        <form method="POST" action="artistes.php">
        
            <p><label for="nom">Nom de l'artiste :</label> <input type="text" name="nomArtiste" id="nom" required></p>
            <p><label for="description">Description de l'artiste :</label><br /><textarea name="descriptionArtiste" id="description" required></textarea></p>
            <p><label for="image">Image de l'artiste : </label> <br ><textarea name="imageArtiste" id="image" required></textarea></p>
            <p><label for="genre">Genre de l'artiste : </label><select name="genreArtiste" id="genre">
                <option value="rock">Rock</option>
                <option value="rap">Rap</option>
                <option value="dancehall">DanceHall</option>
                <option value="rnb">RnB</option>
            </select></p>
            <p><input type="submit" name="envoyer"></p>

        </form>

        <a href="../controllers/afficherArtistes.php">Listes des artistes</a>
        
        <script src="" async defer></script>
    </body>
</html>