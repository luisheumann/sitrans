@extends('layouts.backend')
	

@section('title')
transporte
@endsection

   @section('sidebar')
          <h1>
            Administar Transporte
            <small>Crea</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Trasporte</li>
          </ol>
     @endsection


	@section('content')
    {!! Toastr::render() !!}
	{!!Form::open(['route'=>'transporte.store', 'method'=>'POST'])!!}
		@include('admin.transporte.forms.usr')
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}



  @include('admin.transporte.busqueda');

  
	@endsection  
