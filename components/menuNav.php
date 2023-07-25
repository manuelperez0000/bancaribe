<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a href="./">
            <img src="img/logo.svg" alt="logo">
        </a>
        <a class="navbar-brand" href="#">Sistema de Gestion de Incidencias</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
            aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
            aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">MENU</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <i class='bx bxs-user-account' style="font-size: 30px;"></i><a class="nav-link"
                            href="usuarios.php">Registro de usuarios</a>
                    </li>
                    <hr>
                    <li class="nav-item dropdown">
                        <i class='bx bxs-check-shield'></i>
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Incidencias
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="regincidencia.php">Registrar</a></li>
                            <li><a class="dropdown-item" href="bitacora.php"> Visualizar</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="bitacora.php">Eliminar o modificar</a></li>
                        </ul>
                    </li>
                    <hr>
                    <li><a class="dropdown-item" href="index.php">Cerrar sesion</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>