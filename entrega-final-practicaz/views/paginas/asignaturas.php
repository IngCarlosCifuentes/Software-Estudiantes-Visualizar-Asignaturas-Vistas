<div class="pagetitle">
    <h1>Administrador Asignaturas</h1>



    <!-- Button trigger modal -->
    <br><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-crear-materias">
        Registrar nueva asignatura
    </button><br><br>

</div><!-- End Page Title -->

<!-- Modal -->
<div class="modal fade" id="modal-crear-materias" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar materias</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="row mb-3">

                        <div class="col-6 px-md-1">
                            <div class="form-group">
                                <label>Nombre Asignatura</label>
                                <input id="nombre_materia" ype="text" name="nombre_materia" class="form-control" placeholder="Digite nombre materia" value="" required>
                            </div>
                        </div><!-- fin de nombre asignatura  -->

                        <div class="col-6 px-md-1">
                            <div class="form-group">

                                <label>NRC</label>
                                <input id="nrc" type="number" name="nrc" class="form-control" placeholder="Digite NRC" value="" required>
                            </div>
                        </div> <!-- fin de número de creditos  -->

                        <div class="col-6 px-md-1">
                            <div class="form-group">
                                <label>Alfanumericos</label>
                                <input id="alfanumericos" ype="text" name="alfanumericos" class="form-control" placeholder="Digite alfanumerico materia" value="" required>
                            </div>
                        </div><!-- fin de alfanumerico  -->

                        <div class="col-6 px-md-1">
                            <div class="form-group">

                                <label>Semestre de la Asignatura</label>
                                <input id="semestre" type="number" name="semestre" class="form-control" placeholder="Digite el semestre" value="" required>
                            </div>
                        </div> <!-- fin de número de creditos  -->

                        <div class="col-6 px-md-1">
                            <div class="form-group">

                                <label>Número de creditos</label>
                                <input id="numero_creditos" type="number" name="numero_creditos" class="form-control" placeholder="Digite número creditos" value="" required>
                            </div>
                        </div> <!-- fin de número de creditos  -->

                        <div class="col-6 px-md-1">
                            <div class="form-group">
                                <label>horas</label>
                                <input id="horas" type="number" name="horas" class="form-control" placeholder="Digite horas" value="" required>
                            </div>
                        </div> <!-- fin horas  -->







                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" value="ok" name="btnregistrarmateria" class="btn btn-primary">Registrar Asignatura</button>
                    </div>
                    <?php

                    $registrar_materias = new ctrMaterias();
                    $registrar_materias->ctrAgregarMaterias();
                    ?>

                </form>
            </div>
        </div>
    </div>
</div>



<div class="card-body">


    <table id="tablaregistrarmaterias" class="table table-striped" style="width:100%">

        <thead class="bg-info">

            <tr>

                <th style="width:10px">#</th>
                <th>Nombre Materia</th>
                <th>NRC</th>

                <th>Alfanumerico</th>
                <th>Semestre Asignatura</th>
                <th>Número Créditos</th>
                

                <th>Horas</th>

                <th>Opciones</th>






            </tr>
        </thead>


        <tbody>

            <?php  ?>



            <?php
            foreach ($materias as $key => $value) {


            ?>

                <tr>

                    <td><?php echo ($key + 1)  ?></td>
                    <td><?php echo $value["nombre_materia"]  ?></td>
                    <td><?php echo $value["nrc"]  ?></td>

                    <td><?php echo $value["alfanumericos"]  ?></td>
                    <td><?php echo $value["semestre"]  ?></td>

                    <td><?php echo $value["numero_creditos"]  ?></td>
                    <td><?php echo $value["horas"]  ?></td>



                    <td>

                        <div class='btn-group'>

                            <button type="button" class="btn btn-primary btnEditarMateria" data-bs-toggle="modal" data-bs-target="#editarEstudiante">
                                <i class="bi bi-pencil-square text-white "></i>
                            </button>


                            <button class="btn btn-danger btn-sm btnEliminarMateria" data-id="<?php echo $value['id']; ?>" data-toggle="modal" data-target="#deleteStudentModal">
                                <i class="bi bi-trash text-white"></i>
                            </button>







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