$(document).ready(function(){
	$(".btn-estudiante").on('click',function(e)
	{
		e.preventDefault();
		var estudiante = $(this).data('id');
		var nombre = $(this).data('nombre');
		var path=$(this).data('path');
		var modal_title=$(".modal-title");
		var modal_body=$("modal-body");
		var loading='<p><i class="fa fa-circle-o-notch fa-spin"></i> Cargando Datos</p>';
		modal_title.html('Detalle de Pedido ' + nombre);
	});
});
