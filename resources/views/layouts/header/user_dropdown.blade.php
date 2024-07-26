<div class="dropdown d-inline-block">
    <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-fw fa-user d-sm-none"></i>
        <span class="d-none d-sm-inline-block">{{ ucfirst(Auth::user()->getRoleNames()[0]) }}</span>
        <i class="fa fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i>
    </button>
    <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
        <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
            Opciones
        </div>
        <div class="p-2">
            <a class="dropdown-item" href="{{ route('profile') }}">
                <i class="far fa-fw fa-user me-1"></i> Perfil
            </a>

            <!-- Toggle Side Overlay -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                <i class="fa fa-gear me-1"></i> Configuraciones
            </a>
            <!-- END Side Overlay -->

            <div role="separator" class="dropdown-divider"></div>

            <a class="dropdown-item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn" type="submit"><i
                            class="far fa-fw fa-arrow-alt-circle-left me-1"></i>Cerrar Sesión</button>
                </form>
            </a>
        </div>
    </div>
</div>
