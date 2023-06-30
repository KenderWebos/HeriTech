<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('home') }}">
            <center>
                <img src="{{ asset('images/heritech/ht_logo.png') }}" class="navbar-brand-img" alt="main_logo">
                <!-- <span style="font-size: 20px" class="ms-1 font-weight-bold">{{ config('app.name') }}</span> -->
            </center>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>

            <hr>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6"><i class="ni ni-app"></i> Aplicaciones</h6>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ str_contains(request()->url(), 'wsp_direct') == true ? 'active' : '' }}" href="{{ route('page', ['page' => 'partials.wsp_direct'] ) }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-curved-next text-secondary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">WSP -> direct</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ str_contains(request()->url(), 'radiorowdie') == true ? 'active' : '' }}" href="{{ route('page', ['page' => 'partials.radiorowdie'] ) }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-curved-next text-secondary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">RadioRowdie</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ str_contains(request()->url(), 'kcalendar') == true ? 'active' : '' }}" href="{{ route('kcalendar') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-curved-next text-secondary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">kCalendar</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ str_contains(request()->url(), 'knotes') == true ? 'active' : '' }}" href="{{ route('knotes') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-curved-next text-secondary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">kNotes</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ str_contains(request()->url(), 'kTerminal') == true ? 'active' : '' }}" href="{{ route('page', ['page' => 'partials.kTerminal'] ) }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-curved-next text-secondary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">kTerminal</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
        <hr>
        <a href="{{ route('home') }}" class="btn btn-dark btn-sm w-100 mb-3">Get back to reality</a>
    </div>
</aside>