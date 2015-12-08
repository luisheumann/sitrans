@extends('layouts.backend')


@section('title')
Usuarios
@endsection

   @section('sidebar')
          <h1>
            Administar Usuario
            <small>Editar</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Usuario</li>
          </ol>
     @endsection

{!! Toastr::render() !!}
	@section('content')
		{!!Form::model($user,['route'=>['usuario.update',$user],'method'=>'PUT'])!!}
			@include('admin.usuario.forms.usr')
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		{!!Form::open(['route'=>['usuario.destroy', $user], 'method' => 'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
	@endsection