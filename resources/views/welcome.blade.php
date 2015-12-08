@extends('layouts.frontend')
    

@section('title')
Inicio
@endsection

   @section('sidebar')
          
     @endsection


    @section('content')
    <style>
.login-box-body, .register-box-body {
margin-top: 20px;
    width: 350 !important;
    text-align: center;
    margin: auto;
  
}

body{
        background-color: slategray;
        margin-top: 20px;
}
    </style>

    {!! Toastr::render() !!}
   <div class="login-box-body">
    <p class="login-box-msg">Login</p>

{!!Form::open(['route'=>'login.store', 'method'=>'POST'])!!}
                    <div class="form-group">
                        {!!Form::label('correo','Correo:')!!}   
                        {!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu correo'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('contrasena','Contraseña:')!!}   
                        {!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu contraseña'])!!}
                    </div>
                    {!!Form::submit('Iniciar',['class'=>'btn btn-primary'])!!}
                {!!Form::close()!!}
   

   

  </div>
    @endsection
