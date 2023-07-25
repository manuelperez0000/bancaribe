<!DOCTYPE html>
<html lang="es">
<?php include("components/head.php") ?>

<body>
    <?php include("components/menuNav.php") ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                <div class="login">
                    <h4>Registro de usuarios</h4>
                    <form action="php/register.php" method="post">
                        <label for="nombre">Nombre</label>
                        <input class="form-control" type="text" id="nombre" name="nombre"
                            placeholder="Ingresar el nombre"  required>

                        <label for="apellido">Apellido</label>
                        <input class="form-control" type="text" id="apellido" name="apellido"
                            placeholder="Ingresar el apellido"  required>

                        <label for="email">Correo</label>
                        <input class="form-control" type="email" id="correo" name="correo"
                            placeholder="Ingresar el correo"  required>

                        <label for="usuario">Nombre de Usuario</label>
                        <input class="form-control" type="text" id="username" name="username"
                            placeholder="Ingresar su usuario"  required>

                        <label for="password">Contraseña</label>
                        <input class="form-control" type="password" id="password" name="password"
                            placeholder="Ingresar su contraseña" value="123456" required>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn-inicio">Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>
</body>

</html>