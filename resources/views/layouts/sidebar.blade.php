<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="bg-header-dark">
      <div class="content-header bg-white-5">
        <!-- Logo -->
        <a class="fw-semibold text-white tracking-wide" href="/">
          <span class="smini-visible">
            H<span class="opacity-75">T</span>
          </span>
          <span class="smini-hidden">
            Heri<span class="opacity-75">Tech</span>
          </span>
        </a>
        <!-- END Logo -->

        <!-- Options -->
        <div>
          <!-- Toggle Sidebar Style -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
          <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');">
            <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
          </button>
          <!-- END Toggle Sidebar Style -->

          <!-- Dark Mode -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#dark-mode-toggler" data-class="far fa" onclick="Dashmix.layout('dark_mode_toggle');">
            <i class="far fa-moon" id="dark-mode-toggler"></i>
          </button>
          <!-- END Dark Mode -->

          <!-- Close Sidebar, Visible only on mobile screens -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_close">
            <i class="fa fa-times-circle"></i>
          </button>
          <!-- END Close Sidebar -->
        </div>
        <!-- END Options -->
      </div>
    </div>
    <!-- END Side Header -->

    <!-- Sidebar Scrolling -->
    <div class="js-sidebar-scroll">
      <!-- Side Navigation -->
      <div class="content-side content-side-full">
        <ul class="nav-main">
          <li class="nav-main-item">
            <a class="nav-main-link{{ request()->is('home') ? ' active' : '' }}" href="{{ route('home') }}">
              <i class="nav-main-link-icon fa fa-location-arrow"></i>
              <span class="nav-main-link-name">Inicio</span>
            </a>
          </li>
          <li class="nav-main-heading">Administración</li>
          <li class="nav-main-item">
            <a class="nav-main-link {{ str_contains(request()->url(), 'users') == true ? 'active' : ''}}" href="{{ url('users') }}">
              <i class="nav-main-link-icon fa fa-user"></i>
              <span class="nav-main-link-name">Usuarios</span>
            </a>
          </li>
          <li class="nav-main-item">
            <a class="nav-main-link {{ str_contains(request()->url(), 'roles') == true ? 'active' : '' }}" href="{{ url('roles') }}">
              <i class="nav-main-link-icon fa fa-key"></i>
              <span class="nav-main-link-name">Roles</span>
            </a>
          </li>
          <li class="nav-main-item">
            <a class="nav-main-link {{ str_contains(request()->url(), 'settings/1/edit') == true ? 'active' : '' }}" href="{{ url('settings/1/edit') }}">
              <i class="nav-main-link-icon fa fa-gear"></i>
              <span class="nav-main-link-name">Configurar Página</span>
            </a>
          </li>
          <li class="nav-main-heading">Eventos</li>
          @can('Gestor solicitud de eventos')
          <li class="nav-main-item">
            <a class="nav-main-link {{ Route::currentRouteName() == 'evento.ver_solicitudes' ? 'active' : '' }}" href="{{route('evento.ver_solicitudes')}}">
              <i class="nav-main-link-icon fa fa-calendar"></i>
              <span class="nav-main-link-name">Solicitudes de Eventos</span>
            </a>
          </li>
          @endcan
          @can('Crear solicitud de eventos') 
          <li class="nav-main-item">
            <a class="nav-main-link {{ Route::currentRouteName() == 'evento.crear_solicitudes' ? 'active' : '' }}" href="{{route('evento.crear_solicitudes')}}">
              <i class="nav-main-link-icon fa fa-pencil"></i>
              <span class="nav-main-link-name">Crear Solicitud de Eventos</span>
            </a>
          </li>
          @endcan
          <li class="nav-main-item">
            <a class="nav-main-link {{ str_contains(request()->url(), 'tipo-eventos') == true ? 'active' : '' }}" href="{{ url('tipo-eventos') }}">
              <i class="nav-main-link-icon fa fa-gear"></i>
              <span class="nav-main-link-name">Tipo de Eventos</span>
            </a>
          </li>
          <li class="nav-main-item">
            <a class="nav-main-link {{ str_starts_with(Route::currentRouteName(), 'eventos') == true ? 'active' : '' }}" href="{{ url('eventos') }}">
              <i class="nav-main-link-icon fa fa-location-dot"></i>
              <span class="nav-main-link-name">Eventos</span>
            </a>
          </li>
          <li class="nav-main-heading">Estudiante</li>
          <li class="nav-main-item">
            <a class="nav-main-link {{ str_contains(request()->url(), 'calendar') == true ? 'active' : '' }}" href="{{ route('calendar') }}">
              <i class="nav-main-link-icon fa fa-calendar"></i>
              <span class="nav-main-link-name">Calendario</span>
            </a>
          </li>
          <li class="nav-main-item">
            <a class="nav-main-link {{ str_contains(request()->url(), 'notes') == true ? 'active' : '' }}" href="{{ url('notes') }}">
              <i class="nav-main-link-icon fa fa-book"></i>
              <span class="nav-main-link-name">Apuntes</span>
            </a>
          </li>
          <li class="nav-main-item">
            <a class="nav-main-link {{ str_contains(request()->url(), 'map') == true ? 'active' : '' }}" href="{{ url('maptesting') }}">
              <i class="nav-main-link-icon fa fa-map"></i>
              <span class="nav-main-link-name">Mapa</span>
            </a>
          </li>
          <li class="nav-main-item">
            <a class="nav-main-link {{ str_contains(request()->url(), 'top') == true ? 'active' : '' }}" href="{{ url('top') }}">
              <i class="nav-main-link-icon fa fa-crown"></i>
              <span class="nav-main-link-name">Ranking</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- END Side Navigation -->
    </div>
    <!-- END Sidebar Scrolling -->
  </nav>