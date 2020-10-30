<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$empresa->nombre}} </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="font-family: 'Krona One', sans-serif; font-size=80px; ">
                    {{$empresa->nombre}}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                                <a class="nav-link" href="{{ route('producto.index') }}">{{ __('Productos') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('marca.index') }}">{{ __('Marcas') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('categoria.index') }}">{{ __('Categorias') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('empresa.index') }}">{{ __('Empresa') }}</a>
                            </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!--MODALIMGPRODUCTO-->

    @isset($listados)
    @foreach($listados as $listado)
    <div id="modalProducto{{$listado->id}}" class="modal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 style="font-size: 25px; font-family: 'Bree Serif', serif;">{{$listado->nombre}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="row modal-body">
            <div class="col-6">
              <img src="{{asset('storage').'/'.$listado->foto}}" style="width:100%;" >
            </div>
            <div class="col-6">
              <b><p>{{$listado->categoria}}</p></b>
              <p>{{$listado->descripcioncorta}}</p>
              <b><p>${{$listado->valor}}</p></b>
    
            </div>
            <p>{{$listado->detalle}}</p>
          </div>
          
        </div>
      </div>
    </div>
    @endforeach
    @endisset
    <!--/MODALPRODUCTO-->

     <!--FOOTER-->
        <footer style=" width:100%; bottom: 0;"  class="page-footer footer-dark bg-dark pt-4 shadow-sm" >
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-8">
                        <h3 style="color:white; ">Información de contacto</h3>
                        <p style="color:white;  ">Email: <a>{{$empresa->emailcontacto}}</a></p>
                        <p style="color:white;  ">Télefono de contacto: <a>{{$empresa->telefonocontacto}}</a></p>
                        <p style="color:white; ">Direccion: <a>{{$empresa->direccion}}</a></p>
                    </div>
                    <div class="col-6 col-md-4 text-center pt-3">
                    <div class="d-inline">   
                        <a href="{{$empresa->facebook}}" target="_blank"><img style="width: 50px; height: 50px; border:0" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAaVBMVEU6VZ////81Up0yT5xgc61+jbsvTZyXo8hFXaOirM0nSJmlrs7O1OUkRpkfQ5c1UZ1oerKHlcDp6/M9WKHHzeHV2ulxgravt9Td4Ozl6PGDkb7ByN5YbatQZ6j29/q3v9h2hrhMY6aQnMSsAnKHAAAC70lEQVR4nO3caXLiMBRFYdoihhhsQ5jDlPT+F9mdqv7bRrYQ7z7XOQug9BUWHiQzmRARERERERERERERERERqVe0IZQPCtaDHFwo62Yz/VrP3jtbrH0Sy7rYH46/YtpV1oPtX6jCbBel+2npThjq/Taa51AYmrdTH583YdHsP/r5nAnLTa/j05+w+ezv8yRsq/MQoB9hmPeegb6E5eU2DOhFWK4G+rwIw3CgD2G4Dge6ELaboXPQi7CJu4nwK6zvKUAHwvCVBHQgrFMmoQdh4jGqL2wviUB5YRP/uMKnsJ2mAtWF9XLkwjblcs2FsDqMXZh6LpQXhn06UFtYpZ7t5YX1wEczboTF/AlAaWFYP0OovPZU9pmGt9194W79sIq/Jt2uqqrytwbcxJ4NT9e6tR7soEIk8N749E2K7zjgubEe6dAi75yOboGxwrnTQ/RvRZTwIHy6e1SccF5Yj3N4UcJjbT3MhKKEh9J6mAlFCZWvyR4WJXxDqBxChPohRKgfQoT6IUSoH0KE+iFEqB9ChPqNQ1h0vKJcxWwt/aofvelsDFzNOlpECO9dH/DT+8ZUWMYgErNdfXuB8Ga7RPwCofHy2wuE59EfpQvbH9MXCNejF65st2q8QPhtu5Mhv/BmfE2TX/hhvGMqv3BpvBslv/BuvGUqv3A2+nloff+YX3gx3rmYX2j9CCC78Ga9NzO78GS9dTG7cDv679B8c2Z24e/R/9LsRy+8Wm/kzy60nobZhdb3TvmF9u8e5hYaP0p8gfB99PPQ/l2F3MKp+StDuYXWvuxC60eJ+YXm907ZhQJ/NlA+4d9ZOrrbH6WTzbyjmL+D/Oz6BNsl/H8V/y9E7TYpOz7BGveoceyn6QohQv0QItQPIUL9ECLUDyFC/RAi1A8hQv0QItQPIUL9ECLUDyFC/RAi1A8hQv0QItQPIUL9ECLUDyFC/RAi1A8hQv0QItQPIUL9ECLUDyFC/RAi1A8hQv0QItQPIUL9ECLs0R8aFUYEFLSeAgAAAABJRU5ErkJggg==" alt="facebook"></a>
                        <a href="{{$empresa->twitter}}" target="_blank"><img style="width: 50px; height: 50px; border:0"  src="https://image.flaticon.com/icons/png/512/124/124021.png" alt="twitter"></a>
                        <a href="{{$empresa->instagram}}" target="_blank"><img style="width: 50px; height: 50px; border:0"  src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/1200px-Instagram_logo_2016.svg.png" alt="instagram"></a>      
                    </div>
                    <div class="pt-2">
                        <a class="btn btn-light" data-toggle="modal" data-target="#modal-btn-siguenos">Contactanos</a>
                    </div>   
                </div>
            </div>
            </div>
            <div style="color:white;" class="footer-copyright text-center py-3">© 2020 Copyright
  </div>
        </footer>
    <!--/FOOTER-->
</body>
</html>
