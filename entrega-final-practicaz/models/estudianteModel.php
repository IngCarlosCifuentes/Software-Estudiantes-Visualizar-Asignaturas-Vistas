<?php

require_once "conexion.php";
class mdlEstudiantes
{

 



    static public function mdlMostrarEstudiantes($tabla)
    {


        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();

        return $stmt->fetchAll();



        //$stmt->close();

        //$stmt =null;


    }

    static public function mdlAgregarEstudiantes($tabla, $datos)

    {

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(tipo_identidad, numero_documento, id_estudiante, nombre, fecha_nacimiento, email, semestres, generos) VALUES (:tipo_identidad, :numero_documento, :id_estudiante, :nombre, :fecha_nacimiento, :email, :semestres, :generos )");
        $stmt->bindParam(":tipo_identidad", $datos["tipo_identidad"], PDO::PARAM_STR);
        $stmt->bindParam(":numero_documento", $datos["numero_documento"], PDO::PARAM_INT);
        $stmt->bindParam(":id_estudiante", $datos["id_estudiante"], PDO::PARAM_INT);
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":fecha_nacimiento", $datos["fecha_nacimiento"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":semestres", $datos["semestres"], PDO::PARAM_STR);
        $stmt->bindParam(":generos", $datos["generos"], PDO::PARAM_STR);




        if ($stmt->execute()) {
            return "ok";
            // $estudiantes = ctrEstudiantes::ctrMostrarEstudiantes();

        } else {
            return "error";
        }
        //$stmt->close();


    }

    static public function mdlEditarEstudiante($tabla, $datos)
    {
        echo var_dump($datos);
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET 
        tipo_identidad = :tipo_identidadE,
        numero_documento = :numero_documentoE,
        id_estudiante = :id_estudianteE,
        nombre = :nombreE,
       
        email = :emailE,
        semestres = :semestresE,
        generos = :generosE
         WHERE id = :id");
        
        $stmt->bindParam(":tipo_identidadE", $datos["tipo_identidad"], PDO::PARAM_STR);
        $stmt->bindParam(":numero_documentoE", $datos["numero_documento"], PDO::PARAM_INT);
        $stmt->bindParam(":id_estudianteE", $datos["id_estudiante"], PDO::PARAM_INT);
        $stmt->bindParam(":nombreE", $datos["nombre"], PDO::PARAM_STR);
    
        $stmt->bindParam(":emailE", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":semestresE", $datos["semestres"], PDO::PARAM_STR);
        $stmt->bindParam(":generosE", $datos["generos"], PDO::PARAM_STR);
     
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
        
        echo var_dump($datos);
        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }
        //$stmt->close();
        $stmt = null;
    }
}
