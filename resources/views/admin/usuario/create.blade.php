@extends('layouts.backend')
	

@section('title')
Usuarios
@endsection

   @section('sidebar')
          <h1>
            Administar Usuario
            <small>Crea</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Usuario</li>
          </ol>
     @endsection


	@section('content')
	{!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}
		@include('admin.usuario.forms.usr')
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	@endsection