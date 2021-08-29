<!-- 
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
          <a class="nav-link" href="/<?= REQ_TYPE ?>/profil/<?=$_SESSION['pseudo']?>">profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/<?= REQ_TYPE ?>/afficherArtistes">Afficher artistes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/<?= REQ_TYPE ?>/ajoutArtistes">Ajouter artistes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/<?= REQ_TYPE ?>/restaurerArtistes">Restaurer des artistes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/<?= REQ_TYPE ?>/afficherMusiques">Afficher les musiques</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/<?= REQ_TYPE ?>/restaurerMusiques">Restaurer les musiques</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/<?= REQ_TYPE ?>/listingCommande">Confirmer - annuler commandes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/<?= REQ_TYPE ?>/statsCommande">Statistiques des commandes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/logout">Déconnexion</a>
        </li>
</nav> -->
<div class="container-full">
      <h3>Menu de navigation</h3>
      <nav>
        <ul class="nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Artistes</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/<?= REQ_TYPE ?>/afficherArtistes">Afficher artistes</a>
              <a class="dropdown-item" href="/<?= REQ_TYPE ?>/ajoutArtistes">Ajouter artistes</a>
              <a class="dropdown-item" href="/<?= REQ_TYPE ?>/restaurerArtistes">Restaurer des artistes</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Musiques</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="/<?= REQ_TYPE ?>/afficherMusiques">Afficher les musiques</a>
                <a class="dropdown-item" href="/<?= REQ_TYPE ?>/restaurerMusiques">Restaurer les musiques</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Commandes</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="/<?= REQ_TYPE ?>/listingCommande">Confirmer - annuler commandes</a>
                <a class="dropdown-item" href="/<?= REQ_TYPE ?>/statsCommande">Statistiques des commandes</a>
          </li>
          <li class="nav-item"><a class="nav-link " href="/logout">Déconnexion</a></li>
        </ul>
      </nav>
    </div>
