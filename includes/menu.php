<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="">
  <a class="navbar-brand" href="/"><img src="/assets/media/images/logo.png"  width="100px" height="90px" alt="Taekwondo-Challenge-logo"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    <!--img src=".\images\logo.png"-->
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/taekwondo/index.php">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Le club
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/taekwondo/presentation.php">Présentation</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/taekwondo/infos.php">Infos pratiques</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/taekwondo/contact.php">Nous contacter</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/taekwondo/galerie.php">Galerie</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/taekwondo/prestations.php">Prestations</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/taekwondo/boutique.php">Boutique</a>
      </li>
    </ul>
      <?php if (!isset($_SESSION['profil'])){?>
        <ul class="navbar-text">
          <!--li class="nav-item"-->
            <a  id="btn-fblogin" href="/taekwondo/inscription.php" class="btn btn-lg  btn-primary" style="background-color: gray;font-size: 15px;">S'inscrire</a> |
            
            <a id="btn-fblogin" href="/taekwondo/login.php" class="btn btn-lg  btn-primary" style="background-color: gray;font-size: 15px;">Se connecter</a>
          <!--/li-->
        </ul>
      <?php }else{ ?>
      <div class="navbar-text">
          <a href="/taekwondo/mon-espace.php" class="btn btn-success" role="button">Espace membre</a>
          <a href="/taekwondo/logout.php" class="btn btn-warning" role="button">
              <i class="fa fa-power-off" aria-hidden="true"></i>
          </a>
      </div>
      <?php } ?>
  </div>
</nav>