
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/admin') }}">
                <img src="{{ URL::asset('img/logo/buildify_mini.png') }} " alt="" />
                {{ config('', 'Panel de Administracion') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

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
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{ route('admin') }}"><i class="fas fa-newspaper"></i>Listado de noticias</a>

                                <a class="dropdown-item" href="{{ route('users') }}"><i class="fas fa-users"></i>Usuarios</a>

                                <a class="dropdown-item" href="{{ route('mensajes') }}"><i class="fas fa-envelope"></i>Mensajes</a>

                                <a class="dropdown-item" href="{{ route('precalificaciones') }}"><i class="fas fa-clipboard-check"></i>Precalificaciones</a>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i>{{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>


                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>


</div>
