@extends('layouts.backend')


@section('title')
Usuarios
@endsection

   @section('sidebar')
          <h1>
            Contacto
            <small>Email</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Contacto</li>
          </ol>
     @endsection


	@section('content')

	{!! Toastr::render() !!}



				{!!Form::open(['route'=>'mail.store','method'=>'POST'])!!}
				<div class="form-group">
					{!!Form::label('Email','Email:')!!}
					{!!Form::text('name',null,['placeholder' => 'Nombre','class'=>'form-control'])!!}

				</div>

				<div class="form-group">
					{!!Form::label('Email','Email:')!!}

					{!!Form::text('email',null,['placeholder' => 'Email','class'=>'form-control'])!!}

				</div>

				<div class="form-group">
					{!!Form::label('MENSAJE','MENSAJE:')!!}

					{!!Form::textarea('mensaje',null,['placeholder' => 'Mensaje','class'=>'form-control'])!!}

				</div>
						{!!Form::submit('ENVIAR',['class'=>'btn btn-primary'])!!}
			
				{!!Form::close()!!}
		
		
	








	@endsection