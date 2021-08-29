<div class="container-full">
      <h3>Menu de navigation</h3>
      <nav>
        <ul class="nav">
          <li class="nav-item"><a class="nav-link " href="/<?= REQ_TYPE ?>/profil/<?=$_SESSION['pseudo']?>">Mon profil</a></li>
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
