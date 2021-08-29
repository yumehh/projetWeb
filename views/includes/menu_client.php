<!-- 
        <a href="/<?= REQ_TYPE ?>/profil/<?=$_SESSION['pseudo']?>">profil</a><br />
        <a href="/<?= REQ_TYPE ?>/artistes">artistes</a><br /> 
        <a href="/<?= REQ_TYPE ?>/panier">panier</a><br /> 
        <a href="/<?= REQ_TYPE ?>/achats">Mes achats</a><br />
        <a href="/logout">Déconnexion</a><br/> -->


<nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Menu de navigation </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/<?= REQ_TYPE ?>/profil/<?=$_SESSION['pseudo']?>">profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/<?= REQ_TYPE ?>/artistes">artistes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/<?= REQ_TYPE ?>/panier">panier</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/<?= REQ_TYPE ?>/achats">Mes achats</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/logout">Déconnexion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>