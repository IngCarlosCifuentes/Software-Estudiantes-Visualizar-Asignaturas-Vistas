<?php

require_once "models/conexion.php";

class ctrMaterias
{

    static public function ctrMostrarMaterias()
    {
  
  
  
      $tabla = "materias";
  
      $respuesta = mdlMaterias::mdlMostrarMaterias($tabla);
  
      return $respuesta;
    }



    static public function ctrAgregarMaterias()
  {

    if (isset($_POST["nombre_materia"])) {
      
      if (preg_match('/^[a-zA-Z0-9\s.,ñÑáéíóúÁÉÍÓÚ?¿!¡]+$/', $_POST["nombre_materia"])) {
        //$tabla = "estudiantes";

        $datos = array(
          "nombre_materia" => $_POST["nombre_materia"],
          "nrc" => $_POST["nrc"],

          "alfanumericos" => $_POST["alfanumericos"],
          "semestre" => $_POST["semestre"],
          "numero_creditos" => $_POST["numero_creditos"],
          "horas" => $_POST["horas"]
        );

     
        $tabla = "materias";
        $respuesta = mdlMaterias::mdlAgregarMaterias($tabla, $datos);
        echo var_dump($datos);
        if ($respuesta == "ok") {
          echo '<script>

               swal({
                       type:"success",
                         title: "¡CORRECTO!",
                         text: "La asignatura ha sido creado correctamente",
                         showConfirmButton: true,
                       confirmButtonText: "Cerrar"
                     
               }).then(function(result){

                       if(result.value){   
                           history.back();
                         } 
               });

           </script>';
        } else {

          echo '<script>
          swal({
              type: "error",
              title: "¡El estudiante no se ha registrado!",
              showConfirmButton: true,
              confirmButtonText: "Cerrar"
              }).then(function(result){
              if (result.value) {
                window.location = "estudiantes";
              }
            })
          </script>';
        }
      }
    }
  }

}