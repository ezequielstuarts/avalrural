<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
    <div class="container">
          <a class="navbar-brand" href="{{ url('admin') }}">
            <img src="{{ URL::asset('img/logo/buildify_mini.png') }} ">
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
                  <li class="nav-item {{ Request::is( 'admin/noticias') ? 'activado' : '' }}">
                    <a class="nav-link" href="{{ URL::to('admin/noticias') }}"><i class="fas fa-newspaper"></i>Listado de noticias</a>
                  </li>

                  <li class="nav-item {{ Request::is( 'admin/mensajes') ? 'activado' : '' }}">
                    <a class="nav-link" href="{{ URL::to('admin/mensajes') }}"><i class="fas fa-envelope"></i>Mensajes</a>
                  </li>

                  <li class="nav-item {{ Request::is( 'admin/precalificaciones') ? 'activado' : '' }}">
                    <a class="nav-link" href="{{ URL::to('admin/precalificaciones') }}"><i class="fas fa-clipboard-check"></i>Precalificaciones</a>
                  </li>
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('admin.users') }}">
                                <i class="fas fa-users"></i>Usuarios
                              </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                          </div>
                      </li>
              </ul>
          </div>
      </div>
  </nav>
</div>