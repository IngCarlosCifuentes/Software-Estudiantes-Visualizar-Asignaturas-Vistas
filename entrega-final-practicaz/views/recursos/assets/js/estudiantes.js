$(".tablaregistrarestudiantes").on("click", ".btnEditarEstudiante", function () {
	var idEstudiante = $(this).attr("idEstudiante");
	var datos = new FormData();
	datos.append("idEstudiante", idEstudiante);

	

	$.ajax({
		url: "ajax/estudiantesAjax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function (respuesta) {
			
			$("#tipo_identidadE").val(respuesta["tipo_identidad"]);
			$("#numero_documentoE").val(respuesta["numero_documento"]);
			$("#id_estudianteE").val(respuesta["id_estudiante"]);
			$("#nombreE").val(respuesta["nombre"]);

			$("#emailE").val(respuesta["email"]);
			$("#semestresE").val(respuesta["semestres"]);
			$("#generosE").val(respuesta["generos"]);
			$("#idestudiante").val(respuesta["id"]);
		}
	})
})


$(document).ready(function() {
    // Capturar el evento click del botón eliminar
    $('.btnEliminarEstudiante').click(function() {
        // Obtener el ID del registro a eliminar
        var idEstudiante = $(this).data('id');

        // Enviar la solicitud Ajax al archivo PHP
        $.ajax({
            url: 'ajax/eliminar_estudiante.php',
            method: 'POST',
            data: {
                id: idEstudiante
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


