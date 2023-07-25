<!DOCTYPE html>
<html>
<?php include("components/head.php") ?>
<body>
    <?php include("components/nav.php") ?>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                <div class="login">
                    <h4>Sistema de Gestion de Incidencias</h4>
                    <form method="post" action="php/login.php">
                        <div class="mb-3">
                            Nombre de usuario
                            <input class="form-control" type="text" name="username" placeholder="Usuario"
                                required="required"  />
                        </div>
                        <div class="mb-3">
                            Contraseña
                            <input class="form-control" type="text" name="password" placeholder="Contraseña"
                                required="required" />
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn-inicio">Iniciar Sesion</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>