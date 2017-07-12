@extends('login.layout')

@section('contenido')

<div id="login-page">
	  	<div class="container">
	  		{!! Form::open(['route' => 'logueo','class'=>'form-login','method'=>'POST']) !!}
		        <h2 class="form-login-heading"> Inicia Sesion </h2>
		        <div class="login-wrap">
		        	{!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Email'])!!}
		            <br>
		            {!!Form::password('password',['class'=>'form-control','placeholder'=>'Contraseña'])!!}
		            <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> Olvidaste tu Contraseña?</a>
		                </span>
		            </label>
		            {!!Form::submit('Iniciar Sesion!',['class'=>'btn btn-theme btn-block'])!!}
		            <hr>
		            <div class="registration">
		                ¿ No tienes una cuenta ?<br/>
		                <a class="" href="{{route('carrera')}}">
		                   Crear Cuenta
		                </a>
		            </div>
		        </div>
		   	{!! Form::close() !!}	 
		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
		
 	  	
	  	</div>
	  </div>
@stop