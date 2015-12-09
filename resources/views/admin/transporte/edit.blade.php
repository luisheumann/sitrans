@extends('layouts.backend')


@section('title')
Usuarios
@endsection

   @section('sidebar')
          <h1>
            Administar Transports
            <small>Editar</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Transports</li>
          </ol>
     @endsection


	@section('content')
  {!! Toastr::render() !!}
		{!!Form::model($transporte,['route'=>['transporte.update',$transporte],'method'=>'PUT'])!!}
			@include('admin.transporte.forms.usr')
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		{!!Form::open(['route'=>['transporte.destroy', $transporte], 'method' => 'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
	@endsection