<?php 

    $title = "Mon Profil";
    $content = "Mes informations";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?=$content?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
    
    <h3>Modification</h3>

    <form method="POST">
        <div class="form-group">
            <label for="pseudo">Pseudo</label>
            <input type="text" class="form-control" name="pseudo" id="pseudo" aria-describedby="pseudo" placeholder="<?=$user['pseudo']?>" required>
        </div>
        <div class="form-group">
            <label for="pwUser">Mot de passe</label>
            <input type="password" class="form-control" name="pwUser" id="pwUser" placeholder="Votre mot de passe" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="<?=$user['email']?>" required>
        </div>

        <br />
        <button type="submit" name="envoyer" class="btn btn-primary mb-2">Modifier</button>
    
    </form> 

        <script src="" async defer></script>
    </body>
</html>