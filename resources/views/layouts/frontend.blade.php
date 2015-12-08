<html>
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FrontEnd - @yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    @include('includes.head-frontend')
  
   </head>


<body>



          @yield('content')






 @section('script')

 {!!Html::script('plugins/bootstrap/js/bootstrap.min.js')!!}
 {!!Html::script('js/app.js')!!}

@show


</body>



</html>

