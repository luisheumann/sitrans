	<div class="form-group">
		{!!Form::label('nombre','Nombre:')!!}
		{!!Form::text('first_name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
	</div>
		<div class="form-group">
		{!!Form::label('apellido','Apellido:')!!}
		{!!Form::text('last_name',null,['class'=>'form-control','placeholder'=>'Ingresa el Apellido del usuario'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('email','Correo:')!!}
		{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('password','Contraseña:')!!}
		{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
	</div>