<?php 
require_once "models/conexion.php";
class ctrMateriaEstudiante{
   

    static public function MateriaEstudianteControlador() {
        if (isset($_POST['id'])) {
            $id_estudiante = $_POST['id'];
        
            $notas = MateriaEstudianteModel::mdlMostrarNotasEstudiante($id_estudiante);
        
            // Llamar a la vista correspondiente para mostrar los resultados
           
         


 // Reemplaza 'ruta_de_tu_vista.php' con la ubicación y el nombre del archivo de tu vista
        }
    }
    
    



}

?>