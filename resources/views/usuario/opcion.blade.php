@extends('usuario.layout')
@section('contenido')


 <section id="main-contenido">
          <section class="wrapper site-min-height">
					<h3 class="centered"><i class="fa fa-angle-right"></i> ELIGE UNA OPCION</h3>
          	<div class="row mt">
          		<div class="col-lg-13">
	<div class="row">

	<div class="col-lg-4 col-md-6 col-sm-4 mb">
		<div class="content-panel pn">
			<div id="profile-docente" style="background: url({{asset('../pagina/img/docente.jpg')}}) no-repeat center top;">
			</div>
			<div class="profile-docente centered">
				<a href="{{route('cdocente.create')}}"><p>CREAR CUENTA COMO DOCENTE</p></a>
			</div>
			<div class="centered">
				<h4>Enseña de un manera diferente</h4>
			</div>
		</div><! --/content-panel -->
	</div><! --/col-md-4 -->

	<div class="col-lg-4 col-md-6 col-sm-4 mb">
		<div class="content-panel pn">
			<div id="profile-estudiante" style=" background: url({{asset('../pagina/img/estudiante.jpg')}}) no-repeat center top; ">
		
			</div>
			<div class="profile-estudiante centered">
				<a href="{{route('cestudiante.create')}}"><p>CREAR CUENTA COMO ESTUDIANTE</p></a>
			</div>
			<div class="centered">
				<h4>Aprende de una manera diferente</h4>
			</div>
		</div><! --/content-panel -->
	</div><! --/col-md-4 -->


	<div class="col-lg-4 col-md-6 col-sm-4 mb">
		<div class="content-panel pn">
			<div id="profile-estudiante" style=" background: url({{asset('../imagenes/retroceder.jpg')}}) no-repeat center top; ">
		
			</div>
			<div class="profile-estudiante centered">
				<a href="{{route('carrera')}}"><p>ELEGIR OTRA CARRERA</p></a>
			</div>
			<div class="centered">
				<h4>Retroceder</h4>
			</div>
		</div><! --/content-panel -->
	</div><! --/col-md-4 -->
</div>

</div>
</div>
</section>
</section>

@stop
