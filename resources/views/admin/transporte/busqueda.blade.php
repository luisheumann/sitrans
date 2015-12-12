{!! Form::open(['method'=>'GET','url'=>'busqueda','class'=>'navbar-form navbar-left','role'=>'search'])  !!}

 
{!!Form::text('search',null,['class'=>'form-control','placeholder'=>'Ingresa de la busqueda'])!!}
		{!!Form::submit('Buscar',['class'=>'btn btn-primary'])!!}

{!! Form::close() !!}

<div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>nombre</th>
                    <th>marca</th>
                    <th>modelo</th>
                  
                  </tr>
                  </thead>
                  <tbody>

                  @foreach ($busquedas as $busqueda)
                  <tr>
                    <td>{{$busqueda->nombre}}</td>
                    <td>@foreach ($busqueda->clase as $marca)
                         {{$marca->marcatipo->tipo}}
                         @endforeach</td>
                    <td> @foreach ($busqueda->clase as $modelo)
                         {{$modelo->modelotipo->tipo}}
                         @endforeach</td>
                    <td>
                     </div>
                    </td>
                  </tr>
                  @endforeach
               
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>