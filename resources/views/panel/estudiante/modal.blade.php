<div class="modal fade modal-slide-in-right" aria-hiddeen="true" role="dialog" tabindex="-1" id="modal-delete-{{$estudiante->id}}">
		{!!Form::open(['route'=>['estudiante.destroy', $estudiante], 'method' => 'DELETE'])!!}
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"></span>
					</button>
					<h4 class="modal-title">Eliminar Estudiante</h4>
				</div>
				<div class="modal-body">
					<p>¿ Quiere eliminar al Estudiante <strong> {!!ucfirst($estudiante->nombre)!!} {!!ucfirst($estudiante->apellido)!!}</strong> ?</p>
				</div>
				<div class="modal-footer">
					<button class="btn btn-primary btn-sm" type="button" data-dismiss="modal">Cerrar</button>
					<button type="submit" class="btn btn-danger btn-sm">Borrar</button>
				</div>
			</div>
		</div>
         {!!Form::close()!!}
</div>