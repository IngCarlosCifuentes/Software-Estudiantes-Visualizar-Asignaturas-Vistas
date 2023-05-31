<!DOCTYPE html>
<div class="pagetitle">
    <h1>Administrador Estudiante</h1>

    <!-- Button trigger modal -->
    <br><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#crear-estudiantes">
        Registrar Estudiante
    </button>
    <!-- Button trigger modal -->


</div><!-- End Page Title -->

<!-- modal notas -->








<!-- Modal crear -->
<div class="modal fade" id="crear-estudiantes" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar Estudiante</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="row mb-3">
                        <div class="col-6 px-md-1">
                            <div class="form-group">
                                <label>Tipo de documento</label>
                                <select id="tipo_identidad" class="form-control" name="tipo_identidad" aria-label="Default select example" required>
                                    <option selected></option>
                                    <option value="TI">Tarjeta de Identidad</option>
                                    <option value="CC">Cedula de Ciudadania</option>
                                    <option value="TE">Tarjeta de Extranjeria</option>
                                    <option value="CE">Cedula de Extranjeria</option>


                                </select>
                            </div>
                        </div> <!-- fin de tipo de documento  -->


                        <div class="col-6 px-md-1">
                            <div class="form-group">

                                <label>Número del documento</label>
                                <input id="numero_documento" type="number" name="numero_documento" class="form-control" placeholder="Digite número documento" value="" required>
                            </div>
                        </div> <!-- fin de número de documento  -->

                        <div class="col-6 px-md-1">
                            <div class="form-group">
                                <label>Número ID del estudiante</label>
                                <input id="id_estudiante" type="number" name="id_estudiante" class="form-control" placeholder="Digite ID del estudiante" value="" required>
                            </div>
                        </div> <!-- fin de ID de documento  -->



                        <div class="col-6 px-md-1">
                            <div class="form-group">
                                <label>Nombre Completo</label>
                                <input id="nombre" type="text" name="nombre" class="form-control" placeholder="Digite nombre completo" value="" required>
                            </div>
                        </div><!-- fin de nombres  -->



                        <div class="col-6 px-md-1">
                            <div class="form-group">
                                <label>Fecha Nacimiento</label>
                                <input id="fecha_nacimiento" type="date" name="fecha_nacimiento" class="form-control" placeholder="fecha" value="" required>
                            </div>
                        </div> <!-- fin de fecha de nacimiento -->

                        <div class="col-6 px-md-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Correo electronico</label>
                                <input id="email" type="email" name="email" class="form-control" placeholder="pepe@uniminuto.edu.co" required>
                            </div>
                        </div> <!-- fin de correo electronico  -->

                        <div class="col-6 px-md-1">
                            <div class="form-group">
                                <label>Selecciona el semestre</label>
                                <select id="semestres" class="form-control" name="semestres" aria-label="Default select example" required>
                                    <option selected></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                        </div> <!-- fin de selecciona el semestre-->

                        <div class="col-6 px-md-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Genero</label>
                                <select id="generos" class="form-control" name="generos" aria-label="Default select example" required>
                                    <option selected></option>
                                    <option value="1">Masculino</option>
                                    <option value="2">Femenino</option>
                                    <option value="3">Otro</option>
                                </select>
                            </div>
                        </div> <!-- fin de genero-->

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="btnregistrar" value="ok" class="btn btn-primary">Registrar</button>
                    </div>
                    <?php

                    $registrar_estudiantes = new ctrEstudiantes();
                    $registrar_estudiantes->ctrAgregarEstudiantes();
                    ?>

                </form>

            </div>
        </div>
    </div>
</div>






<div class="card-body">


    <table id="tablaregistrarestudiantes" class="table table-striped" style="width:100%">

        <thead class="bg-info">

            <tr>

                <th style="width:10px">#</th>
                <th>Tipo documento</th>
                <th>Numero documento</th>
                <th>Id estudiante</th>
                <th>Nombre</th>
                <th>Fecha nacimiento</th>
                <th>Email</th>
                <th>Semestre</th>
                <th>Genero</th>
                <th>Opciones</th>




            </tr>
        </thead>


        <tbody>

            <?php  ?>



            <?php
            foreach ($estudiantes as $key => $value) {


            ?>

                <tr>

                    <td><?php echo ($key + 1)  ?></td>
                    <td><?php echo $value["tipo_identidad"]  ?></td>
                    <td><?php echo $value["numero_documento"]  ?></td>
                    <td><?php echo $value["id_estudiante"]  ?></td>
                    <td><?php echo $value["nombre"]  ?></td>
                    <td><?php echo $value["fecha_nacimiento"]  ?></td>
                    <td><?php echo $value["email"]  ?></td>
                    <td><?php echo $value["semestres"]  ?></td>
                    <td><?php echo $value["generos"]  ?></td>

                    <td>
                    <div class='btn-group'>
    <button type="button" class="btn btn-primary btn-sm btnEditarEstudiante" data-bs-toggle="modal" data-bs-target="#editarEstudiante">
        <i class="bi bi-pencil-square text-white"></i> 
    </button>
    <button class="btn btn-danger btn-sm btnEliminarEstudiante" data-toggle="modal" data-target="#deleteStudentModal" data-id="<?php echo $value['id_estudiante']; ?>">
        <i class="bi bi-trash text-white"></i> 
    </button>
    <form id="formVerNotas" method="post" action="./materias-estudiantes">
        <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
        <button type="submit" class="btn btn-primary btn-sm btnVerNotas" data-bs-toggle="modal" data-bs-target="">
            <i class="bi bi-eye text-white"></i> 
        </button>
    </form>
</div>

                </td>
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
<!-- /.card-footer-->







<div class="modal fade" id="modalCRUD5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Estas son las asignaturas que has visto con sus notas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre Estudiante</th>
                            <th>Nombre Materia</th>
                            <th>Alfanumericos</th>
                            <th>Semestre</th>
                            <th>Horas</th>
                            <th>Notas</th>
                            <th>Numero Creditos</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
    try {
        $conexion = Conexion::conectar();
        $consulta = "SELECT e.nombre AS nombre_estudiante, m.nombre_materia, m.alfanumericos, m.semestre, m.numero_creditos, m.horas, me.notas
        FROM materias_estudiantes me
        INNER JOIN estudiantes e ON me.estudiantes_id = e.id
        INNER JOIN materias m ON me.materias_id = m.id
        WHERE e.id = estudiantes_id";
        $resultado = $conexion->query($consulta);

        if ($resultado) {
            while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
                echo '<tr>';
                echo '<td>' . $row['nombre_estudiante'] . '</td>';
                echo '<td>' . $row['nombre_materia'] . '</td>';
                echo '<td>' . $row['alfanumericos'] . '</td>';
                echo '<td>' . $row['semestre'] . '</td>';
                echo '<td>' . $row['horas'] . '</td>';
                echo '<td>' . $row['notas'] . '</td>';
                echo '<td>' . $row['numero_creditos'] . '</td>';
                echo '</tr>';
            }
        }
    } catch (PDOException $e) {
        echo "Error de conexión: " . $e->getMessage();
    }
    ?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(".btneliminar").click(function() {
        var fila = $(this).closest("tr");
        var nombre = fila.find('td:eq(4)').text();
        var nombre_materia = fila.find('td:eq(1)').text();
        var alfanumericos = fila.find('td:eq(2)').text();
        var semestre = fila.find('td:eq(7)').text();
        var horas = fila.find('td:eq(8)').text();
        var notas = fila.find('td:eq(5)').text();
        var numero_creditos = fila.find('td:eq(6)').text();

        $("#nombre").text(nombre);
        $("#nombre_materia").text(nombre_materia);
        $("#alfanumericos").text(alfanumericos);
        $("#semestre").text(semestre);
        $("#horas").text(horas);
        $("#notas").text(notas);
        $("#numero_creditos").text(numero_creditos);

        $("#modalCRUD5").modal("show");
    });
</script>










<div class="modal fade" id="editarEstudiante" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabell" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Estudiante</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form method="POST">
                    <input type="hidden" name="idestudiante" id="idestudiante" required>

                    <div class="row mb-3">
                        <div class="col-6 px-md-1">
                            <div class="form-group">
                                <label>Tipo de documento</label>
                                <select id="tipo_identidadE" class="form-control" name="tipo_identidadE" aria-label="Default select example" required>
                                    <option value="TI">Tarjeta de Identidad</option>
                                    <option value="CC">Cedula de Ciudadania</option>
                                    <option value="TE">Tarjeta de Extranjeria</option>
                                    <option value="CE">Cedula de Extranjeria</option>
                                </select>
                            </div>
                        </div> <!-- fin de tipo de documento  -->

                        <div class="col-6 px-md-1">
                            <div class="form-group">

                                <label>Número del documento</label>
                                <input id="numero_documentoE" type="number" name="numero_documentoE" class="form-control" placeholder="Digite número documento" required>
                            </div>
                        </div> <!-- fin de número de documento  -->

                        <div class="col-6 px-md-1">
                            <div class="form-group">
                                <label>Número ID del estudiante</label>
                                <input id="id_estudianteE" type="number" name="id_estudianteE" class="form-control" placeholder="Digite ID del estudiante" required>
                            </div>
                        </div> <!-- fin de ID de documento  -->

                        <div class="col-6 px-md-1">
                            <div class="form-group">
                                <label>Nombre Completo</label>
                                <input id="nombreE" type="text" name="nombreE" class="form-control" placeholder="Digite nombre completo" required>
                            </div>
                        </div><!-- fin de nombres  -->

                        <div class="col-6 px-md-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Correo electronico</label>
                                <input id="emailE" type="email" name="emailE" class="form-control" required>
                            </div>
                        </div> <!-- fin de correo electronico  -->

                        <div class="col-6 px-md-1">
                            <div class="form-group">
                                <label>Semestres</label>
                                <select id="semestresE" class="form-control" name="semestresE" aria-label="Default select example" required>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                        </div><!-- fin de género  -->

                        <div class="col-6 px-md-1">
                            <div class="form-group">
                                <label>Género</label>
                                <select id="generosE" class="form-control" name="generosE" aria-label="Default select example" required>
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                    <option value="O">Otro</option>
                                </select>
                            </div>
                        </div><!-- fin de género  -->
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="" value="" class="btn btn-primary">Actualizar</button>
                    </div>

                    <?php
                    $estudiante = new ctrEstudiantes();
                    $estudiante->ctrEditarEstudiante();
                    ?>
                </form>

            </div>
        </div>
    </div>

</div>


<script>
    // Capturar el evento de clic en el botón "Eliminar"
    $('.btnEliminarEstudiante').click(function() {
        // Obtener el ID del estudiante a eliminar
        var id = $(this).data('id');

        // Enviar una solicitud AJAX al servidor para eliminar el estudiante
        $.ajax({
            type: 'POST',
            url: 'eliminar_estudiante.php',
            data: {
                id: id
            },
            success: function(response) {
                // Mostrar un mensaje de éxito en caso de que el estudiante haya sido eliminado
                alert(response);

                // Recargar la página para actualizar la lista de estudiantes
                location.reload();
            },
            error: function(xhr, status, error) {
                // Mostrar un mensaje de error en caso de que haya ocurrido un problema al eliminar el estudiante
                alert('Error al eliminar el estudiante: ' + error);
            }
        });
    });
</script>