<!DOCTYPE html>
<html lang="es">
<?php include("components/head.php") ?>

<body>
    <?php include("components/menuNav.php") ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                <div class="login">
                    <h4>Registro de incidencias</h4>
                    <form action="php/registerIncidence.php" method="post">
                        <hr>
                        <label for="nombre">Fecha de inicio</label>
                        <input class="form-control mb-4" type="date" id="fincidencia" name="fincidencia">
                        <label for="nombre">Hora de inicio</label>
                        <input class="form-control mb-4" type="text" id="hincidencia" name="hincidencia">
                        <hr>
                        <label for="nombre">Fecha de solucion</label>
                        <input class="form-control mb-4" type="date" id="fsolucion" name="fsolucion">
                        <label for="nombre">Hora de solucion</label>
                        <input class="form-control mb-4" type="text" id="hsolucion" name="hsolucion">
                        <label for="nombre">Duracion</label>
                        <input class="form-control mb-4" type="text" id="duracion" name="duracion">
                        <label for="nombre">Afectacion</label>
                        <input class="form-control mb-4" type="text" id="afectacion" name="afectacion">
                        <label for="nombre">Ambiente</label>
                        <input class="form-control mb-4" type="text" id="ambiente" name="ambiente">
                        <label for="nombre">Servicio</label>
                        <input class="form-control mb-4" type="text" id="servicio" name="servicio">
                        <label for="nombre">Elemento afectado</label>
                        <input class="form-control mb-4" type="text" id="elementoafectado" name="elementoafectado">
                        <label for="nombre">Tipo de afectacion</label>
                        <input class="form-control mb-4" type="text" id="tipoafectacion" name="tipoafectacion">
                        <label for="nombre">Descripcion</label>
                        <textarea class="form-control mb-4" id="descripcion" name="descripcion" rows="3"></textarea>
                        <label for="nombre">Estatus de alerta</label>
                        <input class="form-control mb-4" type="text" id="estatusalerta" name="estatusalerta">
                        <label for="nombre">Ticket</label>
                        <input class="form-control mb-4" type="text" id="ticket" name="ticket">
                        <label for="nombre">Usuario</label>
                        <input class="form-control mb-4" type="text" id="usuario" name="usuario">
                        <label for="nombre">Reporte</label>
                        <input class="form-control mb-4" type="text" id="reporte" name="reporte">

                        
                        <div class="text-center mt-4">
                            <button type="submit" class="btn-inicio">Registrar incidencia</button>
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