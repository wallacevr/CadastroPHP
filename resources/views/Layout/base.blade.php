
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}} :: @yield('titulo') </title>
 
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
    @include('sweetalert::alert')
    <div class="logo" align='center'>
        <img src="{{ asset('img/logo.png')}}" alt="Wally" class="img-fluid mt-3 mb-3 ">
    </div>   
    <div class="container">
        
        @yield('conteudo')
    </div>
    <footer>
            <p class="text-center">Criado por Wallace Aguiar</p>
            <Example-Component></Example-Component>
    </footer>

    <script src="{{asset('js/app.js')}}></script>
  
</body>
</html>