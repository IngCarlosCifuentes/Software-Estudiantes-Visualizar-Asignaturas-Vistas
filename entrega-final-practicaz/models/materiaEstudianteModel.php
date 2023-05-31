<?php

require_once "conexion.php";
class MateriaEstudianteModel
{

    public static function mdlMostrarNotasEstudiante($id_estudiante)

    
    {
        
        

        $stmt = Conexion::conectar()->prepare("
            SELECT e.nombre AS nombre_estudiante, m.nombre_materia, m.nrc, m.alfanumericos, m.semestre, m.numero_creditos, m.horas, me.notas
            FROM materias_estudiantes me
            INNER JOIN estudiantes e ON me.estudiantes_id = e.id
            INNER JOIN materias m ON me.materias_id = m.id
            WHERE e.id = :id
            ORDER BY m.semestre ASC
        ");
        
        $stmt->bindParam("id", $id_estudiante, PDO::PARAM_INT);
        $stmt->execute();
        
        return $stmt->fetchAll();
        
    }        
   
    
    
    }

