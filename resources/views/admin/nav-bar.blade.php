<div class="row" style="background-color: #EDEDED;">
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="{{ url('/admin') }}">
            <img src="{{ URL::asset('img/logo/buildify_mini.png') }} " alt="" />
            {{ config('', 'Panel de Administracion') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          <ul class="navbar-nav mr-auto" >

            <li class="nav-item {{ Request::is( 'admin') ? 'activado' : '' }}">
              <a class="nav-link" href="{{ URL::to('admin') }}"><i class="fas fa-newspaper"></i>Listado de noticias</a>
            </li>

        </li>


            <li class="nav-item {{ Request::is( 'mensajes') ? 'activado' : '' }}">
              <a class="nav-link" href="{{ URL::to('mensajes') }}"><i class="fas fa-envelope"></i>Mensajes</a>
            </li>

            <li class="nav-item {{ Request::is( 'precalificaciones') ? 'activado' : '' }}">
              <a class="nav-link" href="{{ URL::to('precalificaciones') }}"><i class="fas fa-clipboard-check"></i>Precalificaciones</a>
            </li>

            <li class="nav-item">

            </li>


            <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('users') }}">
                  <i class="fas fa-users"></i>Usuarios</a>
                <div class="dropdown-divider"></div>
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
          </ul>

        </div>
      </nav>
    </div>
</div>