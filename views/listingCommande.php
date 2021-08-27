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
        <caption>HISTORIQUE</caption>
            <thead>
                <tr>
                    <th>Numéro de Commande</th>
                    <th>Numéro de musique</th>
                    <th>Numéro de client</th>
                    <th> Nom de l'artiste </th>
                    <th> titre </th>
                    <th> prix </th>
                    <th> status </th>
                    <th>Date de commande</th>
                </tr>
		    </thead>

        <?php foreach($getCmd as $cmd): ?>

            <tr>
                <td><?= $cmd['idCommande'] ?></td>
                <td><?= $cmd['idMusique'] ?></td>
                <td><?= $cmd['idUtilisateur'] ?></td>
                <td><?= $cmd['nomArtiste']?></td>
                <td><?= $cmd['titre'] ?></td>
                <td><?= $cmd['prix'] ?>euros </td>
                <td><?= $cmd['nom'] ?></td>
                <td><?= $cmd['date_commande']?></td>
            </tr>
    
        <?php endforeach ?>  
        </table>

        <h3>Annulation</h3>

        <form method="POST">
        <p><label for="annuleCmd">Numéro de la commande :</label> <input type="text" name="annuleCmd" id="annuleCmd" required></p>
        <p><input type="submit" name="envoyer"></p>
        </form>

        <h3>Confirmation</h3>
        
        <form method="POST">
        <p><label for="validCmd">Numéro de la commande :</label> <input type="text" name="validCmd" id="validCmd" required></p>
        <p><input type="submit" name="envoyer"></p>
        </form>

        <script src="" async defer></script>
    </body>
</html>