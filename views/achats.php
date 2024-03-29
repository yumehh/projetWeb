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
        
        <h1>MES ACHATS</h1>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Numéro de commande</th>
                <th scope="col">Numéro de musique</th>
                <th scope="col">Nom de l'artiste</th>
                <th scope="col"> titre </th>
                <th scope="col"> prix </th>
                <th scope="col"> status </th>
                <th scope="col">Date de commande</th>
                </tr>
            </thead>
        <tbody>

        <?php foreach($getCmd as $cmd): ?>

            <tr>
                <td><?= $cmd['idCommande'] ?></td>
                <td><?= $cmd['idMusique'] ?></td>
                <td><?= $cmd['nomArtiste']?></td>
                <td><?= $cmd['titre'] ?></td>
                <td><?= $cmd['prix'] ?>euros </td>
                <td><?= $cmd['nom'] ?></td>
                <td><?= $cmd['date_commande']?></td>
            </tr>

            <?php endforeach ?>
            
        </tbody>
        </table>


        <h3>Annulation</h3>

        <form method="POST">
        <div class="form-group">
            <label for="annuleCmd">Numéro commande : </label>
            <input type="text" class="form-control" name="annuleCmd" id="annuleCmd"><br />
            <button type="submit" class="btn btn-primary">Confirmer</button>
        </div><br />

        <h3>Confirmation</h3>

        <form method="POST">
        <div class="form-group">
            <label for="validCmd">Numéro commande : </label>
            <input type="text" class="form-control" name="validCmd" id="validCmd"><br />
            <button type="submit" class="btn btn-primary">Confirmer</button>
        </div>
    </body>
</html>