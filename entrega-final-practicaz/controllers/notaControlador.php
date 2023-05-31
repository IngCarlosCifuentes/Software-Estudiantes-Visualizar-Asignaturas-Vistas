<?php 
require_once "models/conexion.php";
class ctrNotas
{
static public function ctrMostrarNotas()
{



  $tabla = "materias_estudiantes";

  $respuesta = NotasModel::mdlMostrarNotas($tabla);

  return $respuesta;
}
}
?>