<!-- Editar materia -->
<div class="modal fade" id="update_<?=$row->codigo?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Editar materia</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="editar.php">
				<!--Input para almacenar index de materia seleccionada-->
				<input type="text" class="form-control hidden" name="index" id="index" value="<?=$index?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="codigo">Codigo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="codigo" id="codigo" value="<?=$row->codigo?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="nombre">Nombre:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nombre" id="nombre" value="<?=$row->nombre?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="uvs">UVS:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" min="2" max="5" class="form-control" name="uvs" id="uvs" value="<?=$row->uvs?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="nota" >Nota:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" min="0" max="10" step="0.1" class="form-control" name="nota" id="nota" value="<?=$row->nota?>">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="add" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</a>
			</form>
            </div>
        </div>
    </div>
</div>
