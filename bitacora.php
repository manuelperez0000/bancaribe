<!DOCTYPE html>
<html lang="es">
<?php include("components/head.php") ?>

<?php include('php/connect.php') ?>

<body>
    <?php include("components/menuNav.php") ?>
    <br><br>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">f incidencia</th>
                            <th scope="col">h incidencia</th>
                            <th scope="col">f solucion</th>
                            <th scope="col">h solucion</th>
                            <th scope="col">duracion</th>
                            <th scope="col">afectacion</th>
                            <th scope="col">ambiente</th>
                            <th scope="col">servicio</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include('php/getBitacora.php') ?>
                        
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>