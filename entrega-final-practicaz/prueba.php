<!-- Modal -->



<h1>Estudiante estas son las materias que has visto con sus notas</h1>
<input type="text" style="width: 250px; height: 40px; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);" placeholder="Ingresa tu texto">
<div class="modal fade" id="verNotas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Asignaturas Vistas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>¿Está seguro que desea eliminar este supervisor?</p>
                <p><strong>N° Identidad: </strong><span id="identidad"></span></p>

                <p><strong>Nombres Completos: </strong><span id="nombrecompleto"></span></p>
                <p><strong>Dirección: </strong><span id="direccion"></span></p>
                <p><strong>Área: </strong><span id="area"></span></p>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                
            </div>
        </div>
    </div>
</div>
<script>
    $(".btnVerNotas").click(function() {
        fila = $(this).closest("tr");
        var identidad = fila.find('td:eq(1)').text();
        var nombrecompleto = fila.find('td:eq(2)').text();
        var direccion = fila.find('td:eq(3)').text();
        var area = fila.find('td:eq(4)').text();
        var id_supervisor = fila.find('td:eq(0)').text();
        $("#identidad").text(identidad);
        $("#nombrecompleto").text(nombrecompleto);
        $("#direccion").text(direccion);
        $("#area").text(area);
        $("#id_supervisor").val(id_supervisor);
        $("#modalCRUD5").trigger("reset");
        $(".modal-header").css("background-color", "#dc3545");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Eliminar supervisor");
        $("#modalCRUD5").modal("show");
    });