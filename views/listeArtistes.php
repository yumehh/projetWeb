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
        <link rel="stylesheet" href="../bootstrap-5.1.0-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
        
    </head>
    <body>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Artistes</th>
                <th scope="col">Genre</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($artistes as $artiste): ?>
                <tr>
                    <td><a href= "/<?= REQ_TYPE?>/<?=$artiste['nomArtiste']?>"> <?=$artiste['nomArtiste']?> </a></td>
                    <td><?= $artiste['nomGenre'] ?></td>
                </tr>  
            <?php endforeach ?>   
    </tbody>
    </table>
    
    <form method="POST">
    <div class="form-group">
            <label for="recherche">Recherche : </label>
            <input type="text" class="form-control" name="recherche" id="recherche" aria-describedby="pseudo" required><br />
            <button type="submit" name="envoyer" class="btn btn-primary mb-2" id="togg1">Rechercher</button>
        </div>
    </form>            

    <div id="d1">
        <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Artistes</th>
                <th scope="col">Information complémentaire</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($search as $searchVisitor): ?>
            <tr>
                <td><?= $searchVisitor['nomArtiste']?></td>
                <td>
                    <form method="GET" action="https://google.be/search" id="monform" target="_blank">
                        <div class="form-group-search">
                            <input type="text" class="form-control" name="q" id="recherche" aria-describedby="pseudo" value= "<?= $searchVisitor['nomArtiste'] ?>" ><br />
                            <button type="submit" name="envoyer" class="btn btn-primary mb-2" id="togg1">Rechercher</button>
                        </div>
                    </form> 
                </td>
            </tr>
    
        <?php endforeach ?>   
    </tbody>
    </table>
    </div>     
    </body>
</html>