<!DOCTYPE html>
<html lang="es">
<?php include("components/head.php") ?>

<?php include('php/connect.php') ?>

<body>
    <?php include("components/menuNav.php") ?>
    <br><br><br><br>
<?php
include('php/connect.php');
$id = $_POST['id'];
$query = "SELECT * FROM incidencias WHERE id = $id";

// Ejecuta la consulta en la base de datos
$resultado = $conn->query($query);
$fila = $resultado->fetch_assoc();
?>  
    
<div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                <div class="login">
                    <h4>Editar de incidencia</h4>
                    <form action="php/editincidencia.php" method="post">
                        <hr>
                        <label for="nombre">Fecha de inicio</label>
                        <input class="form-control mb-4" type="date" id="fincidencia" value="<?php echo $fila["fincidencia"] ?>" name="fincidencia">
                        <label for="nombre">Hora de inicio</label>
                        <input class="form-control mb-4" type="text" id="hincidencia" value="<?php echo $fila["hincidencia"] ?>" name="hincidencia">
                        <hr>
                        <input type="hidden" value="<?php echo $fila["id"] ?>" name="id" id="id">
                        <label for="nombre">Fecha de solucion</label>
                        <input class="form-control mb-4" type="date" id="fsolucion" value="<?php echo $fila["fsolucion"] ?>" name="fsolucion">
                        <label for="nombre">Hora de solucion</label>
                        <input class="form-control mb-4" type="text" id="hsolucion" value="<?php echo $fila["hsolucion"] ?>" name="hsolucion">
                        <label for="nombre">Duracion</label>
                        <input class="form-control mb-4" type="text" id="duracion" value="<?php echo $fila["duracion"] ?>" name="duracion">
                        <label for="nombre">Afectacion</label>
                        <input class="form-control mb-4" type="text" id="afectacion" value="<?php echo $fila["afectacion"] ?>" name="afectacion">
                        
                        <label for="nombre">Ambiente</label>
                        <input class="form-control mb-4" type="text" id="ambiente" value="<?php echo $fila["ambiente"] ?>" name="ambiente">
                        <label for="nombre">Servicio</label>
                        <input class="form-control mb-4" type="text" id="servicio" value="<?php echo $fila["servicio"] ?>" name="servicio">
                        <label for="nombre">Elemento afectado</label>
                        <input class="form-control mb-4" type="text" id="elementoafectado" value="<?php echo $fila["elementoafectado"] ?>" name="elementoafectado">
                        <label for="nombre">Tipo de afectacion</label>
                        <input class="form-control mb-4" type="text" id="tipoafectacion" value="<?php echo $fila["tipoafectacion"] ?>" name="tipoafectacion">
                        <label for="nombre">Descripcion</label>
                        <textarea class="form-control mb-4" id="descripcion" name="descripcion" rows="3"><?php echo $fila["descripcion"] ?></textarea>
                        <label for="nombre">Estatus de alerta</label>
                        <input class="form-control mb-4" type="text" id="estatusalerta" value="<?php echo $fila["estatusalerta"] ?>" name="estatusalerta">
                        <label for="nombre">Ticket</label>
                        <input class="form-control mb-4" type="text" id="ticket" value="<?php echo $fila["ticket"] ?>" name="ticket">
                        <label for="nombre">Usuario</label>
                        <input class="form-control mb-4" type="text" id="usuario" value="<?php echo $fila["usuario"] ?>" name="usuario">
                        <label for="nombre">Reporte</label>
                        <input class="form-control mb-4" type="text" id="reporte" value="<?php echo $fila["reporte"] ?>" name="reporte">
                        <div class="text-center mt-4">
                            <button type="submit" class="btn-inicio">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>
</html>