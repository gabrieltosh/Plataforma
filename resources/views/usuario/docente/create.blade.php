@extends('usuario.layout')

@section('contenido')

<div id="login-page">
	  
	  	<div class="container">
	  		{!! Form::open(['route' => 'docente.store','class'=>'form-login','files'=>true]) !!}
    			<h2 class="form-login-heading">Crear Cuenta Docente</h2>
		        @include('usuario.form.form')
		
		     {!! Form::close() !!}	  	  	
	  	</div>
	  </div>
@stop