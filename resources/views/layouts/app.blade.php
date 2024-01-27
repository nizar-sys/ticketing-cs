@php
    $user = Auth::user();
@endphp

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>{{ config('app.name') }} | @yield('title')</title>

    <meta name="description" content="{{ config('app.name') }} created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <meta property="og:title" content="{{ config('app.name') }}">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description" content="{{ config('app.name') }} created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="shortcut icon" href="{{ asset('/') }}/assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('/') }}/assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/') }}/assets/media/favicons/apple-touch-icon-180x180.png">

    <link rel="stylesheet" id="css-main" href="{{ asset('/') }}/assets/css/codebase.min.css">
    <script src="{{ asset('/') }}/assets/js/lib/jquery.min.js"></script>
    @stack('styles')
  </head>

  <body>
    <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">

      @include('_partials.sidebar')

      @include('_partials.header')

      <main id="main-container">
        @yield('content')
      </main>

      @include('_partials.footer')
    </div>

    <script src="{{ asset('/') }}/assets/_js/main/app.js"></script>
    <script src="{{ asset('/') }}/assets/js/codebase.app.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('/') }}/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('/') }}/assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset('/') }}/assets/js/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('/') }}/assets/js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
    <script src="{{ asset('/') }}/assets/js/plugins/datatables-buttons/dataTables.buttons.min.js"></script>
    <script src="{{ asset('/') }}/assets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
    <script src="{{ asset('/') }}/assets/js/plugins/datatables-buttons-jszip/jszip.min.js"></script>
    <script src="{{ asset('/') }}/assets/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js"></script>
    <script src="{{ asset('/') }}/assets/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js"></script>
    <script src="{{ asset('/') }}/assets/js/plugins/datatables-buttons/buttons.print.min.js"></script>
    <script src="{{ asset('/') }}/assets/js/plugins/datatables-buttons/buttons.html5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('/') }}/assets/js/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
    <script>
        Codebase.helpersOnLoad(['jq-notify']);

        function notify(type, message) {
            var icon;
            switch (true) {
                case (type == 'error'):
                    type = 'danger';
                    icon = 'fa fa-times';
                    break;
                case (type == 'warning'):
                    icon = 'fa fa-exclamation';
                    break;
                case (type == 'info'):
                    icon = 'fa fa-info';
                    break;
                default:
                    icon = 'fa fa-check';
                    break;
            }

            Codebase.helpers('jq-notify', {
                align: 'right',
                from: 'top',
                type,
                icon: `${icon} me-3`,
                message: `${message}`,
            });
        }
    </script>

    @stack('scripts')
  </body>
</html>
