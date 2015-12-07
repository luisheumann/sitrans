@extends('layouts.backend')


@section('title')
Usuarios
@endsection

   @section('sidebar')
          <h1>
            Administar Usuario
            <small>Crea/Modifica/Elimina</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Usuario</li>
          </ol>
     @endsection


	@section('content')

	{!! Toastr::render() !!}


	<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Lista Usuarios</h3>

             
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              {!!link_to_route('usuario.create', $title = 'Crear', $parameters = null, $attributes = ['class'=>'btn pull-right btn-success btn-sm'])!!}
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Fecha</th>
                    <th>Operacion</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                 

                 @foreach($users as $user)
 					<tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td><span class="label label-success">{{$user->created_at}}</span></td>
                    <td>
                     {!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
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