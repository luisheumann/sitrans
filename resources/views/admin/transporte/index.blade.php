@extends('layouts.backend')


@section('title')
Usuarios
@endsection

   @section('sidebar')
          <h1>
            Administar Transporte
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Transporte</li>
          </ol>
     @endsection


	@section('content')

	{!! Toastr::render() !!}


	<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Lista Transportes</h3>

             
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              {!!link_to_route('transporte.create', $title = 'Crear', $parameters = null, $attributes = ['class'=>'btn pull-right btn-success btn-sm'])!!}
                <table class="table no-margin">
                  <thead>
                  <tr>
                   <th>usuario</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Repuestos</th>
                    <th>Operacion</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                 

                 @foreach($transporte as $transport)
 					<tr>
            <td>{{$transport->usuario->username}}</td>
                    <td>{{$transport->nombre}}</td>
                    <td>
                        @foreach ($transport->clase as $marca)
                         {{$marca->marcatipo->tipo}}
                         @endforeach
                   </td>
                    <td>

                       @foreach ($transport->clase as $modelo)
                         {{$modelo->modelotipo->tipo}}
                         @endforeach

                  </td>
                    <td>
                        @if (!$transporte == null)
                      @foreach ($transport->repuesto as $repuesto)
                     {{$repuesto->nombre}} <br>
                      @endforeach
                      @endif
                    </td>
                    <td>
                     {!!link_to_route('transporte.edit', $title = 'Editar', $parameters = $transport, $attributes = ['class'=>'btn btn-primary'])!!}
                    </td>
                  </tr>



                 @endforeach

                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
          
          </div>





	@endsection