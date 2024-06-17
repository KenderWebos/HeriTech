<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs fixed-start" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('home') }}">
            <center>
                <img src="{{ asset('images/heritech/ht_logo.png') }}" class="navbar-brand-img" alt="main_logo">
            </center>
        </a>
    </div>

    <hr class="horizontal dark mt-0">

    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-home text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Inicio</span>
                </a>
            </li>

            <hr>

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6"><i class="ni ni-app"></i> Estudiante</h6>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ str_contains(request()->url(), 'notes') == true ? 'active' : '' }}" href="{{ url('notes') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        📝
                    </div>
                    <span class="nav-link-text ms-1">Apuntes</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ str_contains(request()->url(), 'eventos') == true ? 'active' : '' }}" href="{{ url('eventos') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        📍
                    </div>
                    <span class="nav-link-text ms-1">Eventos</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ str_contains(request()->url(), 'data') == true ? 'active' : '' }}" href="{{ url('data') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        🔮
                    </div>
                    <span class="nav-link-text ms-1">Facts</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ str_contains(request()->url(), 'calendar') == true ? 'active' : '' }}" href="{{ route('calendar') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        📅
                    </div>
                    <span class="nav-link-text ms-1">Calendario</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ str_contains(request()->url(), 'top') == true ? 'active' : '' }}" href="{{ url('top') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        ⚔️
                    </div>
                    <span class="nav-link-text ms-1">TOP Estudiantes</span>
                </a>
            </li>

            <!-- <li class="nav-item">
                <a class="nav-link {{ str_contains(request()->url(), 'proposito') == true ? 'active' : '' }}" href="{{ route('proposito') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-curved-next text-secondary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Proposito</span>
                </a>
            </li> -->

            <!-- <li class="nav-item">
                <a class="nav-link {{ str_contains(request()->url(), 'gametesting') == true ? 'active' : '' }}" href="{{ route('gametesting') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-controller text-secondary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Game Testing</span>
                </a>
            </li> -->

            <!-- <li class="nav-item">
                <a class="nav-link {{ str_contains(request()->url(), 'radiorowdie') == true ? 'active' : '' }}" href="{{ route('page', ['page' => 'partials.radiorowdie'] ) }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-curved-next text-secondary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">RadioRowdie</span>
                </a>
            </li> -->

            <!-- <li class="nav-item">
                <a class="nav-link {{ str_contains(request()->url(), 'wsp_direct') == true ? 'active' : '' }}" href="{{ route('page', ['page' => 'partials.wsp_direct'] ) }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-curved-next text-secondary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">WSP -> direct</span>
                </a>
            </li> -->

            <!-- <li class="nav-item">
                <a class="nav-link {{ str_contains(request()->url(), 'wsp_direct') == true ? 'active' : '' }}" href="{{ route('page', ['page' => 'informe'] ) }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-curved-next text-secondary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Informes</span>
                </a>
            </li> -->


            <li class="nav-item">
                <a class="nav-link {{ str_contains(request()->url(), 'flashcard') == true ? 'active' : '' }}" href="{{ route('page', ['page' => 'flashcards'] ) }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        🧠
                    </div>
                    <span class="nav-link-text ms-1">Flashcards</span>
                </a>
            </li>



            <hr>

            @role('administrador')

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6"><i class="ni ni-app"></i> Administrador</h6>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ str_contains(request()->url(), 'tipo-eventos') == true ? 'active' : '' }}" href="{{ url('tipo-eventos') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        🗃️
                    </div>
                    <span class="nav-link-text ms-1">tipo-eventos</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ str_contains(request()->url(), 'settings/1/edit') == true ? 'active' : '' }}" href="{{ url('settings/1/edit') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        ⚙️
                    </div>
                    <span class="nav-link-text ms-1">Configurar Pagina</span>
                </a>
            </li>

            @endrole

        </ul>
    </div>


</aside>