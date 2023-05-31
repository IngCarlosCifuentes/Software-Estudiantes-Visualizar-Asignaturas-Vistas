<?php
require_once '../models/conexion.php';

// Verificar si se recibió un ID válido
if (isset($_POST['id'])) {
    // Obtener el ID del registro a eliminar
    $id = $_POST['id'];

    try {
        // Establecer conexión a la base de datos utilizando la clase de conexión
        $conexion = Conexion::conectar();

        // Realizar la consulta de eliminación en la base de datos
        // Reemplaza 'tabla' con el nombre de tu tabla
        $sql = "DELETE FROM materias WHERE id = :id";

        // Preparar la consulta
        $statement = $conexion->prepare($sql);

        // Asignar el valor del ID al parámetro
        $statement->bindParam(':id', $id, PDO::PARAM_INT);

        // Ejecutar la consulta
        $statement->execute();

        // Verificar si se eliminó algún registro
        if ($statement->rowCount() > 0) {
            // Si la eliminación fue exitosa, puedes enviar una respuesta de éxito
            echo "Materia eliminado correctamente";
        } else {
            // Si no se eliminó ningún registro, puedes enviar una respuesta indicando que el registro no existe
            echo "El registro no existe";
        }
    } catch (PDOException $e) {
        // Si ocurrió algún error durante la eliminación, puedes enviar una respuesta de error
        echo "Error al eliminar el registro: " . $e->getMessage();
    }
}
?>
