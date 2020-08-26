<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="/admin/accueil.php"><img src="../assets/media/images/logo.png" alt="Taekwondo-Challenge-logo" style="width: 80px; height: 80px;"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/admin/accueil.php">Accueil <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../prestations/list-prestation.php">Prestations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../reservations/list-reservation.php">Reservations</a>
            </li>
            <li class="nav-item">

                <a class="nav-link" href="../contacts/list-contact.php">Messages de contacts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../users/list-users.php">Utilisateurs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/parametres.php">Paramètres</a>
            </li>
           <!-- <li class="nav-item">
                <a class="nav-link" href="../users/list-user.php">Utilisateurs</a>
            </li>-->
        </ul>

        <div class="navbar-text">
            <a href="mon-compte.php" class="btn btn-success" role="button">Mon compte</a>
            <a href="logout.php" class="btn btn-warning" role="button">
                <i class="fa fa-power-off" aria-hidden="true"></i>
            </a>
        </div>
    </div>
  </nav>