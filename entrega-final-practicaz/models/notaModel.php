<?php
require_once 'conexion.php';

class NotasModel {



    static public function mdlMostrarNotas($tabla)
    {
        $stmt = Conexion::conectar()->prepare("SELECT estudiantes.nombre AS estudiante_nombre, materias.nombre_materia, materias.nrc, materias.alfanumericos, materias.semestre, materias.numero_creditos, materias.horas, materias_estudiantes.notas
        FROM estudiantes
        INNER JOIN materias_estudiantes ON estudiantes.id = materias_estudiantes.estudiantes_id
        INNER JOIN materias ON materias.id = materias_estudiantes.materias_id");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public static function guardarNota($idEstudiante, $idMateria, $nota) {
        try {
            $conexion = Conexion::conectar(); // Obtener la conexión usando el método estático de la clase Conexion

            // Preparar la consulta SQL
           // Preparar la consulta SQL
           $stmt = $conexion->prepare("INSERT INTO materias_estudiantes (estudiantes_id, materias_id, notas) VALUES (:estudiantes_id, :materias_id, :notas)");

           // Vincular los valores a los parámetros de la consulta
           $stmt->bindParam(':estudiantes_id', $idEstudiante);
           $stmt->bindParam(':materias_id', $idMateria);
           $stmt->bindParam(':notas', $nota);

           // Ejecutar la consulta
           $stmt->execute();
        } catch (PDOException $e) {
            throw new Exception("Error al guardar el registro: " . $e->getMessage());
        } finally {
            // Cerrar la conexión a la base de datos
            $conexion = null;
        }
    }

    

}



?>
