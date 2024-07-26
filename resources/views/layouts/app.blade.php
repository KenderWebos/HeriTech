<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>{{ $title_html ?? '' }}{{ isset($title_html) ? ' - ' : '' }}HeriTech</title>

    <meta name="description" content="HeriTech">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="index, follow">

    <!-- Icons -->
    <link rel="shortcut icon" href="{{ asset('images/heritech/logo/heritech_logo_white.png') }}">
    <link rel="icon" sizes="192x192" type="image/png"
        href="{{ asset('images/heritech/logo/heritech_logo_white.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">

    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />

    <!-- Modules -->
    @yield('css')
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
    @vite(['resources/sass/main.scss', 'resources/js/dashmix/app.js'])

    <!-- Alternatively, you can also include a specific color theme after the main stylesheet to alter the default color theme of the template -->
    {{-- @vite(['resources/sass/main.scss', 'resources/sass/dashmix/themes/xwork.scss', 'resources/js/dashmix/app.js']) --}}
    @yield('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/buttons.html5.min.js') }}"></script>
    @vite(['resources/js/pages/datatables.js'])
    <!-- Enriquecer el texto -->
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <style>
        .card {
            color: inherit;
            --bs-card-cap-bg: inherit;
            --bs-card-border-color: inherit;
        }
    </style>
</head>
@guest

    <body>
        <div id="page-container">
            <!-- Main Container -->
            <main id="main-container">
                <div class="hero">
                    <div class="hero-inner">
                        @yield('content')
                    </div>
                </div>
            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->
    </body>
@endguest
@auth

    <body>
        <!-- Page Container -->
        <!--
                                            Available classes for #page-container:

                                            SIDEBAR & SIDE OVERLAY

                                              'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
                                              'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
                                              'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
                                              'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
                                              'sidebar-dark'                              Dark themed sidebar

                                              'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
                                              'side-overlay-o'                            Visible Side Overlay by default

                                              'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

                                              'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

                                            HEADER

                                              ''                                          Static Header if no class is added
                                              'page-header-fixed'                         Fixed Header


                                            FOOTER

                                              ''                                          Static Footer if no class is added
                                              'page-footer-fixed'                         Fixed Footer (please have in mind that the footer has a specific height when is fixed)

                                            HEADER STYLE

                                              ''                                          Classic Header style if no class is added
                                              'page-header-dark'                          Dark themed Header
                                              'page-header-glass'                         Light themed Header with transparency by default
                                                                                          (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
                        'page-header-glass page-header-dark'         Dark themed Header with transparency by default
                                                                                          (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

                                            MAIN CONTENT LAYOUT

                                              ''                                          Full width Main Content if no class is added
                                              'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
                                              'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
                                                
                                            DARK MODE

                                              'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)
                                          -->
        <div id="page-container"
            class="sidebar-o enable-page-overlay sidebar-dark side-scroll page-header-fixed remember-theme">
            <!-- Side Overlay-->
            @include('layouts.sideoverlay')
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <!--
              Sidebar Mini Mode - Display Helper classes

              Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
              Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                  If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

              Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
              Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
              Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
            -->
            @include('layouts.sidebar')
            <!-- END Sidebar -->

            <!-- Header -->
            @include('layouts.header')
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <!-- Hero -->
                <div class="bg-body-light">
                    <div class="content content-full">
                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">
                                @if (isset($title))
                                    {{ $title }}
                                @endif
                            </h1>
                            <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item" href="{{ route('dashboard') }}"><a
                                            href="{{ route('dashboard') }}">Inicio</a></li>
                                    @isset($breadcrumbs)
                                        @for ($i = 0; $i < sizeof($breadcrumbs); $i++)
                                            <li class="breadcrumb-item @if ($i == sizeof($breadcrumbs) - 1) active @endif"
                                                aria-current="page">
                                                @if ($i == sizeof($breadcrumbs) - 1)
                                                    {{ $breadcrumbs[$i]['nombre'] }}
                                                @else
                                                    <a
                                                        href="{{ route($breadcrumbs[$i]['ruta']) }}">{{ $breadcrumbs[$i]['nombre'] }}</a>
                                                @endif
                                            </li>
                                        @endfor
                                    @endisset

                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->
                <div class="content">
                    @yield('content')
                </div>
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            @include('layouts.footer.footer')
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->
    </body>
    <!-- news -->
@endauth

<!-- jQuery (Needed only if you would like to use a jQuery based plugin in your page) -->
<script src="{{ asset('js/lib/jquery.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#datatable').DataTable({
            language: {
                // Aquí puedes agregar las opciones de idioma que necesites
            },
            responsive: true,
            dom: 'Bfrtilp',
            buttons: [{
                    extend: 'excelHtml5',
                    text: '<i class="fas fa-file-excel"></i>',
                    titleAttr: 'Exportar a Excel',
                    className: 'btn btn-success'
                },
                {
                    extend: 'pdfHtml5',
                    text: '<i class="fas fa-file-pdf"></i>',
                    titleAttr: 'Exportar a PDF',
                    className: 'btn btn-danger'
                },
                {
                    extend: 'print',
                    text: '<i class="fa fa-print"></i>',
                    titleAttr: 'Imprimir',
                    className: 'btn btn-info'
                }
            ]
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var clipboardBtns = document.querySelectorAll('.clipboard-btn');
        var clipboard = new ClipboardJS(clipboardBtns);

        clipboard.on('success', function(e) {
            e.clearSelection();
            showAlert('Texto copiado al portapapeles', 'success');
        });

        function showAlert(message, type) {
            var alert = document.createElement('div');
            alert.className = 'alert alert-' + type + ' alert-dismissible fade show';
            alert.setAttribute('role', 'alert');
            alert.innerHTML = message +
                '<button type="button" class="close" data-dismiss="alert" aria-label="Cerrar">' +
                '<span aria-hidden="true">&times;</span>' +
                '</button>';
            document.getElementById('alerts-container').appendChild(alert);

            setTimeout(function() {
                alert.remove();
            }, 3000);
        }
    });
</script>
@yield('scripts')

@stack('js')

</html>
