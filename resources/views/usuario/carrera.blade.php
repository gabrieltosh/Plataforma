@extends('usuario.layout')
@section('contenido')
      <section id="main-contenido">
          <section class="wrapper site-min-height">
          	<h3 class="centered"><i class="fa fa-angle-right"></i> ELIGE UNA CARRERA</h3>
          	<div class="row mt">
          		<div class="col-lg-14">
	<div class="row">
	@foreach($carreras as $carrera)
		
		<div class="col-lg-4 col-md-4 col-sm-4 mb">
		<div class="content-panel pn">
			<div id="spotify" style="background: url(../imagenes/{{$carrera->imagen}}) no-repeat center top;">
				<div class="col-xs-4 col-xs-offset-8">
					 <a href="{{route('opcion',$carrera->id)}}" class="btn btn-sm btn-clear-g"><i class="fa fa-pencil fa-2x"></i> SELECCIONAR</a>
				</div>
				<div class="sp-title">
					<h3>{{$carrera->nombre}}</h3>
				</div>
				<div class="play">
					<i class="fa fa-book-circle"></i>
				</div>
			</div>
			<p class="followers centered"><i class="fa fa-user"></i> {{$carrera->descripcion}}</p>
		</div>
	</div><! --/col-md-4-->

	@endforeach
	<div class="col-lg-4 col-md-4 col-sm-4 mb">
		<div class="content-panel pn">
			<div id="spotify" style="background: url(../imagenes/retroceder.jpg) no-repeat center top;">
				<div class="col-xs-4 col-xs-offset-8">
					 <a href="{{route('login')}}" class="btn btn-sm btn-clear-g"><i class="fa fa-pencil fa-2x "></i>RETROCEDER</a>
				</div>
				<div class="sp-title">
					<h3>Volver atras</h3>
				</div>
				<div class="play">
					<i class="fa fa-book-circle"></i>
				</div>
			</div>
			<p class="followers centered"><i class="fa fa-user"></i> Iniciar Session</p>
		</div>
</div>
</div>
</div>
</section>
</section>
@stop
