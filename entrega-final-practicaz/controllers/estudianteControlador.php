<?php

require_once "models/conexion.php";

class ctrEstudiantes
{

  public function eliminarEstudiante($idEstudiante) {
    // Crear conexión a la base de datos y preparar consulta SQL
    
    $stmt = Conexion::conectar()->prepare("DELETE FROM estudiantes WHERE id = :idEstudiante");
  
    // Asignar valor al parámetro y ejecutar consulta
    $stmt->bindParam(":idEstudiante", $idEstudiante, PDO::PARAM_INT);
    $stmt->execute();
  
    // Cerrar conexión a la base de datos
    $db = null;
  
    // Devolver respuesta al cliente
    echo "ok";
  }
  

  static public function ctrMostrarEstudiantes()
  {



    $tabla = "estudiantes";

    $respuesta = mdlEstudiantes::mdlMostrarEstudiantes($tabla);

    return $respuesta;
  }

  static public function ctrEditarEstudiante()
  {
    if (isset($_POST["nombreE"])) {
      if (preg_match('/^[a-zA-Z0-9\s.,ñÑáéíóúÁÉÍÓÚ?¿!¡]+$/', $_POST["nombreE"])) {
        $tabla = "estudiantes";
        $datos = array(
          "tipo_identidad" => $_POST["tipo_identidadE"],
          "numero_documento" => $_POST["numero_documentoE"],
          "id_estudiante" => $_POST["id_estudianteE"],
          "nombre" => $_POST["nombreE"],
      
          "email" => $_POST["emailE"],
          "semestres" => $_POST["semestresE"],
          "generos" => $_POST["generosE"],
          "id" => $_POST["idestudiante"],
          
        );
       // var_dump($datos); //verificar  si llegan los datos del formulario
        $respuesta = mdlEstudiantes::mdlEditarEstudiante($tabla, $datos);
        echo $respuesta;
        if ($respuesta == "ok") {
          echo '<script>

          swal({
                  type:"success",
                    title: "¡CORRECTO!",
                    text: "El estudiante ha sido creado correctamente",
                    showConfirmButton: true,
                  confirmButtonText: "Cerrar"
                
          }).then(function(result){

                  if(result.value){   
                      history.back();
                    } 
          });

      </script>';
        }
      } else {
        echo '<script>
            swal({
                type: "error",
                title: "¡El estudiante no puede ir vacío o llevar caracteres especiales!",
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
  static public function ctrAgregarEstudiantes()
  {

    if (isset($_POST["nombre"])) {
      
      if (preg_match('/^[a-zA-Z0-9\s.,ñÑáéíóúÁÉÍÓÚ?¿!¡]+$/', $_POST["nombre"])) {
        //$tabla = "estudiantes";

        $datos = array(
          "tipo_identidad" => $_POST["tipo_identidad"],
          "numero_documento" => $_POST["numero_documento"],
          "id_estudiante" => $_POST["id_estudiante"],
          "nombre" => $_POST["nombre"],
          "fecha_nacimiento" => $_POST["fecha_nacimiento"],
          "email" => $_POST["email"],
          "semestres" => $_POST["semestres"],
          "generos" => $_POST["generos"]
        );

     
        $tabla = "estudiantes";
        $respuesta = mdlEstudiantes::mdlAgregarEstudiantes($tabla, $datos);
        echo var_dump($datos);
        if ($respuesta == "ok") {
          echo '<script>

               swal({
                       type:"success",
                         title: "¡CORRECTO!",
                         text: "El estudiante ha sido creado correctamente",
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
