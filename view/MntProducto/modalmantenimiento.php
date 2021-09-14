<div id="modalmantenimiento" class="modal fade bd-example-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" id="producto_form">
                <div class="modal-header">
                    <h4 class="modal-title" id="mdltitulo"></h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="prod_id" name="prod_id">

                    <div class="form-group">
                        <label class="form-label" for="prod_nom">Nombres</label>
                        <input type="text" class="form-control" id="contac_nombre" name="contac_nombre" placeholder="Ingrese Nombres" required>
                        <label class="form-label" for="prod_nom">Apellidos</label>
                        <input type="text" class="form-control" id="contac_apellido" name="contac_apellido" placeholder="Ingrese Apellidos" required>
                        <label class="form-label" for="prod_nom">Puesto de trabajo</label>
                        <input type="text" class="form-control" id="contac_puesto_trabajo" name="contac_puesto_trabajo" placeholder="Ingrese Puesto de trabajo" required>
                        <label class="form-label" for="prod_nom">Pais de procedencia</label>
                        <input type="text" class="form-control" id="contact_pais_procedencia" name="contact_pais_procedencia" placeholder="Ingrese Pais " required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="action" id="#" value="add" class="btn btn-rounded btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
