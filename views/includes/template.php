<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $title ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="text/javascript" href="../../bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="../../bootstrap-5.1.0-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/style.css">

    </head>
    <body>
    
    <h1 class="display-4"><?php echo $content ?></h1>

        <nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Menu de navigation </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="welcome">Page d'accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="inscription">Inscription</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login">S'authentifier</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listeArtistes">Liste d'artistes</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


    </body>
</html>


<html>
<head>