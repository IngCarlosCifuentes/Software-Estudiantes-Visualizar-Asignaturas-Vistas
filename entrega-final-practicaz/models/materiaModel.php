<?php

require_once "conexion.php";
class mdlMaterias
{

 



    static public function mdlMostrarMaterias($tabla)
    {


        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();

        return $stmt->fetchAll();



        //$stmt->close();

        //$stmt =null;


    }

    static public function mdlAgregarMaterias($tabla, $datos)

    {

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre_materia, nrc, alfanumericos, semestre, numero_creditos, horas) VALUES (:nombre_materia, :nrc, :alfanumericos, :semestre, :numero_creditos, :horas )");
        $stmt->bindParam(":nombre_materia", $datos["nombre_materia"], PDO::PARAM_STR);
        $stmt->bindParam(":nrc", $datos["nrc"], PDO::PARAM_INT);

        $stmt->bindParam(":alfanumericos", $datos["alfanumericos"], PDO::PARAM_STR);
        $stmt->bindParam(":semestre", $datos["semestre"], PDO::PARAM_INT);

        $stmt->bindParam(":numero_creditos", $datos["numero_creditos"], PDO::PARAM_INT);
        $stmt->bindParam(":horas", $datos["horas"], PDO::PARAM_STR);
        
   




        if ($stmt->execute()) {
            return "ok";
            // $estudiantes = ctrEstudiantes::ctrMostrarEstudiantes();

        } else {
            return "error";
        }
        //$stmt->close();


    }

}