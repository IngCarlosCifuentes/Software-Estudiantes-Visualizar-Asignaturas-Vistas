<?php 
require_once 'models/notaModel.php';

?>

<div class="pagetitle">
    <h1>Administrador Notas de Asignaturas Por Estudiante</h1>


  
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-crear-notas">
        Registrar Nota Por Estudiante
    </button><br><br>
    

</div>
<!-- Modal -->
<div class="modal fade" id="modal-crear-notas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar Notas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="notas" method="post">
                    <div class="row mb-3">
                        <div class="col-6 px-md-1">
                            <div class="form-group">

                                <label>Selecciona estudiante</label>
                                <select class="form-control" name="id_seleccionaestudiante" required>
                                    <?php


                                    try {
                                        $conexion = Conexion::conectar(); // Obtener la conexión usando el método estático de la clase Conexion
                                        $consulta = "SELECT id, nombre FROM estudiantes";
                                        $resultado = $conexion->query($consulta);

                                        if ($resultado) {
                                            while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
                                                $id = $row['id'];
                                                $nombre = $row['nombre'];
                                                $selected = ($id == $_POST['id']) ? 'selected' : ''; // Comprueba si la opción actual debe estar seleccionada
                                                echo '<option value="' . $id . '"' . $selected . '>' . $nombre . '</option>';
                                            }
                                        }
                                    } catch (PDOException $e) {
                                        echo "Error de conexión: " . $e->getMessage();
                                    }
                                    ?>
                                    <option selected></option>

                                                               
                                </select>
                            </div>
                        </div><!-- fin de nombre asignatura  -->



                        <div class="col-6 px-md-1">
                            <div class="form-group">

                                <label>Selecciona materia</label>
                                <select class="form-control" name="id_seleccionamateria" required>
                                <option value="">Selecciona</option>
                                    <?php


                                    try {
                                        $conexion = Conexion::conectar(); // Obtener la conexión usando el método estático de la clase Conexion
                                        $consulta = "SELECT id, nombre_materia FROM `materias`";
                                        $resultado = $conexion->query($consulta);

                                        if ($resultado) {
                                            while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
                                                $id = $row['id'];
                                                $nombre = $row['nombre_materia'];
                                                $selected = ($id == $_POST['id']) ? 'selected' : ''; // Comprueba si la opción actual debe estar seleccionada
                                                echo '<option value="' . $id . '"' . $selected . '>' . $nombre . '</option>';
                                            }
                                        }
                                    } catch (PDOException $e) {
                                        echo "Error de conexión: " . $e->getMessage();
                                    }
                                    ?>
                                   <option selected></option>

                               
                                </select>
                            </div>
                        </div><!-- fin de nombre asignatura  -->




                        <div class="col-6 px-md-1">
                            <div class="form-group">

                                <label>Digite nota </label>
                                <input id="notas" step="any"type="number" name="notas" class="form-control"  placeholder="Digite número creditos" value="" required>
                            </div>
                        </div> <!-- fin de número de creditos  -->




                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" value="ok" name="btnregistrarmateria" class="btn btn-primary">Registrar Nota</button>
                    </div>
                  

                </form>
            </div>
        </div>
    </div>
</div>
    <div class="card-body">


        <table id="tablanotaporestudiante" class="table table-striped" style="width:100%">

            <thead class="bg-info">

                <tr>

                    <th style="width:10px">#</th>
                    <th>Nombre Estudiante</th>
                    <th>Nombre Materia</th>
                    <th>NRC</th>
                    <th>Alfanumericos</th>
                    <th>Semestre</th>

                    <th>Número Créditos</th>
                    <th>Horas</th>
                    <th>Notas</th>






                </tr>
            </thead>


            <tbody>

            <?php  ?>



            <?php
            foreach ($notas as $key => $value) {


            ?>

                <tr>

                    <td><?php echo ($key + 1)  ?></td>
                    <td><?php echo $value["estudiante_nombre"]  ?></td>
                    <td><?php echo $value["nombre_materia"]  ?></td>
                    <td><?php echo $value["nrc"]  ?></td>

                    <td><?php echo $value["alfanumericos"]  ?></td>
                    <td><?php echo $value["semestre"]  ?></td>
                    <td><?php echo $value["numero_creditos"]  ?></td>
                    <td><?php echo $value["horas"]  ?></td>
                    <td><?php echo $value["notas"]  ?></td>








                </tr>





            <?php

            }

            ?>







                <!-- Resto de tu código HTML -->
            </tbody>
            <!-- editar-->

        </table>



    </div>
    <div class="card-footer">

    </div>

    <?php


// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los valores enviados por el formulario
    $idEstudiante = $_POST['id_seleccionaestudiante'];
    $idMateria = $_POST['id_seleccionamateria'];
    $nota = $_POST['notas'];

    // Realizar las validaciones necesarias
    if (empty($idEstudiante) || empty($idMateria) || empty($nota)) {
        // Al menos uno de los campos está vacío
        echo "Todos los campos son requeridos.";
    } else {
        try {
            // Llamar a la función del modelo para guardar la nota
            NotasModel::guardarNota($idEstudiante, $idMateria, $nota);

            // Redirigir al usuario a la página actual
           
            exit(); // Salir del script después de la redirección
        } catch (Exception $e) {
            echo "Error al guardar el registro: " . $e->getMessage();
        }
    }
} else {
    // El formulario no ha sido enviado correctamente
    echo "Error al procesar el formulario.";
}
?>
