 <div class="modal fade modal-slide-in-right" aria-hiddeen="true" role="dialog" tabindex="-1" id="modal-delete-{{$materia->id}}">
		{!!Form::open(['route'=>['materia.destroy', $materia->id], 'method' => 'DELETE'])!!}
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"></span>
					</button>
					<h4 class="modal-title">Borrar materia</h4>
				</div>
				<div class="modal-body">
					<p>¿ Quieres eliminar la materia <strong> {!!ucfirst($materia->nombre)!!}</strong> ?</p>
				</div>
				<div class="modal-footer">
					<button class="btn btn-primary btn-sm" type="button" data-dismiss="modal">Cerrar</button>
					<button type="submit" class="btn btn-danger btn-sm">Borrar</button>
				</div>
			</div>
		</div>
         {!!Form::close()!!}
</div>