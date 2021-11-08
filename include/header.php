<header class="top">
    <nav class="nav navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="background: linear-gradient(133deg, rgba(255,144,21,1) 2%, rgba(246,114,1,1) 35%, rgba(255,94,28,1) 57%, rgba(247,72,0,1) 88%);">
          <div class="container-xxl">
            <a class="navbar-brand" href="index.php"><img src="img/icons/logo.png" id="logo_m" class="rounded float-left"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item"><a class="nav-link " aria-current="page" href="index.php">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="dudas.php">¿Tienes Dudas?</a></li>
                <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Conócenos</a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="acerca-de-nosotros.php">¿Quiénes Somos?</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#contacto">Contacto</a></li>
                      </ul>
                    </li>
              </ul>
              <form class="d-flex me-auto">
                  <input class="form-control me-2" type="search" placeholder="Buscar en Venpa.com" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
                  <li id="navlogin" class="navbar-nav mb-lg-0">
                    <?php if(!empty($user)):?>
                      <a class="nav-link" aria-current="page" href="usuario.php"><img src="img/icons/profile-user.png" id="icons_profile" class="rounded float me-2 " ><?= $user['nombre']; ?></p></a> 
                    <?php else: ?>
                      <a class="nav-link" aria-current="page" href="login.php"><img src="img/icons/profile-user.png" id="icons_profile" class="rounded float me-2 " >Iniciar Sesión</p></a>
                    <?php endif; ?>
                </li>
            </div>
          </div>
        </nav>
</header>



