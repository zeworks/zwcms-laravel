<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('img/zwlogo.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('img/zwlogo.png') }}" type="image/x-icon">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg"
        crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body class="content-collapse">
    <div id="app">
        <nav>
            <!-- zwcms logo -->
            <img src="{{ asset('img/zwlogo.png') }}" width="30" height="30" class="rounded" alt="zwlogo.png">
            <!-- end zwcms logo -->
            <a href="{{ url('/admin/home') }}">
                <h1>{{ config('app.name') }}</h1>
            </a>
            <!-- end website name -->
            @auth
            <a href class="menu active" title>
                <i class="fa fa-bars"></i>
            </a>
            <div class="user-top-bar">
                <div class="user-top-bar__info">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" v-pre>
                        <span>{{ Auth::user()->name }}</span>
                    </a>
                </div>
                <ul class="user-top-bar__links">
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out-alt"></i>
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
            @endif
        </nav>
        @auth
        <aside>
            <!-- aside items -->
            <ul>
                <!-- dashboard -->
                <li class="{{ Request::is('admin/home*') ? 'active' : '' }}">
                    <a href="{{ route('home') }}" class="aside__link" title="{{ __('Dashboard') }}">
                        <i class="fa fa-tachometer-alt"></i>
                        {{ __('Dashboard') }}
                    </a>
                </li>
                <!-- banners -->
                <li class="{{ Request::is('admin/banners*') ? 'active' : '' }}">
                    <a href="{{ route('banners') }}" class="aside__link" title="{{ __('Banners') }}">
                        <i class="fas fa-paint-brush"></i>
                        {{ __('Banners') }}
                    </a>
                </li>
                <!-- templates -->
                <li class="{{ Request::is('admin/templates*') ? 'active' : '' }}">
                    <a href="{{ route('templates') }}" class="aside__link" title="{{ __('Páginas') }}">
                        <i class="far fa-file-alt"></i>
                        {{ __('Páginas') }}
                    </a>
                </li>
                <!-- costumers -->
                <li class="{{ Request::is('admin/costumers*') ? 'active' : '' }}">
                    <a href="{{ route('costumers') }}" class="aside__link" title="{{ __('Clientes') }}">
                        <i class="fas fa-users"></i>
                        {{ __('Clientes') }}
                    </a>
                </li>
                <!-- products -->
                <li class="{{ Request::is('admin/products*') ? 'active' : '' }}">
                    <a href="{{ route('products') }}" class="aside__link" title="{{ __('Produtos') }}">
                        <i class="fas fa-dollar-sign"></i>
                        {{ __('Produtos') }}
                    </a>
                </li>
                 <!-- discounts -->
                 <li class="{{ Request::is('admin/discounts*') ? 'active' : '' }}">
                    <a href="{{ route('discounts') }}" class="aside__link" title="{{ __('Discontos') }}">
                        <i class="fas fa-percentage"></i>
                        {{ __('Discontos') }}
                    </a>
                </li>
                <!-- orders -->
                <li class="{{ Request::is('admin/orders*') ? 'active' : '' }}">
                    <a href="{{ route('orders') }}" class="aside__link" title="{{ __('Encomendas') }}">
                        <i class="fas fa-cubes"></i>
                        {{ __('Encomendas') }}
                    </a>
                </li>
                
            </ul>
            <!-- settings -->
            <a title="Definições" href="{{ route('settings') }}" class="aside__link aside__link--absolute-bottom {{ Request::is('admin/settings*') ? 'active' : '' }}">
                <i class="fas fa-cog"></i>Definições
            </a>
        </aside>
        @endif
        <main>
            @yield('content')
        </main>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.js"></script>
    <script src="{{ asset('js/matchHeight.js') }}"></script>
    <script src="{{ asset('js/functions.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>