	
	<div class="login-wrap">
		{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre'])!!}
	    <br>
	    {!!Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Apellido'])!!}
	    <br>
	    {!!Form::text('celular',null,['class'=>'form-control','placeholder'=>'Celular'])!!}
	    <br>
	    {!!Form::text('codigo',null,['class'=>'form-control','placeholder'=>'Codigo'])!!}
	    <br>
	    {!!Form::file('imagen',null,['class'=>'form-control','placeholder'=>'Selecciona una Imagen'])!!}
	    <br>
		{!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Email'])!!}
	    <br>
	    {!!Form::password('password',['class'=>'form-control','placeholder'=>'Contraseña'])!!}
		<br>
		{!!Form::password('confirmation_password',['class'=>'form-control','placeholder'=>'Repita la Contraseña'])!!}
		<br>
	    {!!Form::submit('Registrar!',['class'=>'btn btn-theme btn-block'])!!}
	</div>
	  <!-- Modal -->

	  <!-- modal -->