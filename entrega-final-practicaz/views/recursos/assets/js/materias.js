$(document).ready(function() {
    // Capturar el evento click del botón eliminar
    $('.btnEliminarMateria').click(function() {
        // Obtener el ID del registro a eliminar
        var idMateria = $(this).data('id');

        // Enviar la solicitud Ajax al archivo PHP
        $.ajax({
            url: 'ajax/eliminar_materia.php',
            method: 'POST',
            data: {
                id: idMateria
            },
            success: function(response) {
                // Si la eliminación fue exitosa, mostrar una notificación o realizar alguna otra acción necesaria
                alert(response);
                
                // Actualizar la tabla o realizar alguna otra acción necesaria para reflejar los cambios en la interfaz
                // ...

                // Opcionalmente, recargar la página para actualizar la tabla completa
                location.reload();
            },
            error: function(xhr, status, error) {
                // Si ocurrió algún error durante la solicitud Ajax, mostrar una notificación o realizar alguna otra acción necesaria
                alert('Error al eliminar el registro');
            }
        });
    });
});