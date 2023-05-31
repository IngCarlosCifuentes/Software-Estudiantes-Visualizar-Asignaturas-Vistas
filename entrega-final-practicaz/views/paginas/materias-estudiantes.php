<?php
require_once './controllers/materiaEstudianteControlador.php'; // Reemplaza 'ruta_de_tu_controlador.php' con la ubicación y el nombre del archivo de tu controlador

ctrMateriaEstudiante::MateriaEstudianteControlador();
?>
<div class="pagetitle">
    <h1>Materias que has cursado.</h1>
</div><!-- End Page Title -->






<div class="card-body">



<table id="tablamaterias-estudiantes" class="table table-striped" style="width:100%">

    <thead class="bg-info">

        <tr>
            <th style="width:10px">#</th>
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
        <?php
        if (isset($_POST['id'])) {
            $id_estudiante = $_POST['id'];
           

            // Llamar a la función para obtener las materias y notas del estudiante específico
            $notaz = MateriaEstudianteModel::mdlMostrarNotasEstudiante($id_estudiante);
          
  
           echo '<div style="text-align: center; padding: 5px;">';
echo '<input type="text" style="width: 200px; height: 40px; padding: 10px; font-size: 16px; font-weight: bold; border: 1px solid #ccc; border-radius: 5px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); background-color: #56C1C8; text-align: center;" placeholder="Ingresa tu texto" value="' . (isset($notaz[0]['nombre_estudiante']) ? $notaz[0]['nombre_estudiante'] : '') . '" readonly>';



echo '</div>';



            


            

            // Verificar si hay registros para mostrar
           
            if ($notaz) 
            
            {
                // Recorrer los resultados y mostrarlos en la tabla
                foreach ($notaz as $key => $value) {
                    echo "<tr>";
                    echo "<td>" . ($key + 1) . "</td>";
                    
                    echo "<td>" . $value['nombre_materia'] . "</td>";
                    echo "<td>" . $value['nrc'] . "</td>";

                    echo "<td>" . $value['alfanumericos'] . "</td>";
                    echo "<td>" . $value['semestre'] . "</td>";
                    echo "<td>" . $value['numero_creditos'] . "</td>";
                    echo "<td>" . $value['horas'] . "</td>";
                    echo "<td>" . $value['notas'] . "</td>";
                    echo "</tr>";
                    
                }

            } else {
                // Mostrar mensaje si no hay registros
                echo "<tr><td colspan='8'>No se encontraron registros.</td></tr>";
            }
        }
        ?>
        
    </tbody>
</table>





</div>
<div class="card-footer">

</div>



















 

