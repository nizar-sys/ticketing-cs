@php
    $user = Auth::user();
@endphp

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

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
    @stack('styles')
  </head>

  <body>
    <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">

      <nav id="sidebar">
        <div class="sidebar-content">
          <div class="content-header justify-content-lg-center">
            <div>
              <span class="smini-visible fw-bold tracking-wide fs-lg">
                {!! initialAppName() !!}
              </span>
              <a class="link-fx fw-bold tracking-wide mx-auto" href="index.html">
                <span class="smini-hidden">
                  <i class="fa fa-fire text-primary"></i>
                  {!! splitAndWrapAppName() !!}
                </span>
              </a>
            </div>

            <div>
              <button type="button" class="btn btn-sm btn-alt-danger d-lg-none" data-toggle="layout" data-action="sidebar_close">
                <i class="fa fa-fw fa-times"></i>
              </button>
            </div>
          </div>

          <div class="js-sidebar-scroll">
            <div class="content-side content-side-user px-0 py-0">
              <div class="smini-visible-block animated fadeIn px-2">
                <img class="img-avatar img-avatar32" src="{{ asset('/') }}/assets/media/avatars/avatar15.jpg" alt="">
              </div>

              <div class="smini-hidden text-center mx-auto">
                <a class="img-link" href="be_pages_generic_profile.html">
                  <img class="img-avatar" src="{{ asset('/') }}/assets/media/avatars/avatar15.jpg" alt="">
                </a>
                <ul class="list-inline mt-3 mb-0">
                  <li class="list-inline-item">
                    <a class="link-fx text-dual fs-sm fw-semibold text-uppercase" href="be_pages_generic_profile.html">{{ $user->name }}</a>
                  </li>
                  <li class="list-inline-item">
                    <a class="link-fx text-dual" data-toggle="layout" data-action="dark_mode_toggle" href="javascript:void(0)">
                      <i class="fa fa-burn"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="content-side content-side-full">
              <ul class="nav-main">
                <li class="nav-main-item">
                  <a class="nav-main-link active" href="gs_backend.html">
                    <i class="nav-main-link-icon fa fa-house-user"></i>
                    <span class="nav-main-link-name">Dashboard</span>
                  </a>
                </li>
                <li class="nav-main-heading">Heading</li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon fa fa-puzzle-piece"></i>
                    <span class="nav-main-link-name">Dropdown</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="javascript:void(0)">
                        <span class="nav-main-link-name">Link #1</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="javascript:void(0)">
                        <span class="nav-main-link-name">Link #2</span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

      <header id="page-header">
        <div class="content-header">
          <div class="space-x-1">
            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
              <i class="fa fa-fw fa-bars"></i>
            </button>

            <div class="dropdown d-inline-block">
              <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-themes-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-paint-brush"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-lg p-0" aria-labelledby="page-header-themes-dropdown">
                <div class="p-3 bg-body-light rounded-top">
                  <h5 class="h6 text-center mb-0">
                    Color Themes
                  </h5>
                </div>
                <div class="p-3">
                  <div class="row g-0 text-center">
                    <div class="col-2">
                      <a class="text-default" data-toggle="theme" data-theme="default" href="javascript:void(0)">
                        <i class="fa fa-2x fa-circle"></i>
                      </a>
                    </div>
                    <div class="col-2">
                      <a class="text-elegance" data-toggle="theme" data-theme="{{ asset('/') }}/assets/css/themes/elegance.min.css" href="javascript:void(0)">
                        <i class="fa fa-2x fa-circle"></i>
                      </a>
                    </div>
                    <div class="col-2">
                      <a class="text-pulse" data-toggle="theme" data-theme="{{ asset('/') }}/assets/css/themes/pulse.min.css" href="javascript:void(0)">
                        <i class="fa fa-2x fa-circle"></i>
                      </a>
                    </div>
                    <div class="col-2">
                      <a class="text-flat" data-toggle="theme" data-theme="{{ asset('/') }}/assets/css/themes/flat.min.css" href="javascript:void(0)">
                        <i class="fa fa-2x fa-circle"></i>
                      </a>
                    </div>
                    <div class="col-2">
                      <a class="text-corporate" data-toggle="theme" data-theme="{{ asset('/') }}/assets/css/themes/corporate.min.css" href="javascript:void(0)">
                        <i class="fa fa-2x fa-circle"></i>
                      </a>
                    </div>
                    <div class="col-2">
                      <a class="text-earth" data-toggle="theme" data-theme="{{ asset('/') }}/assets/css/themes/earth.min.css" href="javascript:void(0)">
                        <i class="fa fa-2x fa-circle"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="space-x-1">
            <div class="dropdown d-inline-block">
              <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user d-sm-none"></i>
                <span class="d-none d-sm-inline-block fw-semibold">{{ $user->name }}</span>
                <i class="fa fa-angle-down opacity-50 ms-1"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
                <div class="px-2 py-3 bg-body-light rounded-top">
                  <h5 class="h6 text-center mb-0">
                    {{ $user->name }}
                  </h5>
                </div>
                <div class="p-2">
                  <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1" href="be_pages_generic_profile.html">
                    <span>Profile</span>
                    <i class="fa fa-fw fa-user opacity-25"></i>
                  </a>
                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                    <span>Inbox</span>
                    <i class="fa fa-fw fa-envelope-open opacity-25"></i>
                  </a>
                  <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1" href="be_pages_generic_invoice.html">
                    <span>Invoices</span>
                    <i class="fa fa-fw fa-file opacity-25"></i>
                  </a>
                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                    <span>Settings</span>
                    <i class="fa fa-fw fa-wrench opacity-25"></i>
                  </a>

                  <div class="dropdown-divider"></div>
                  <form action="{{ route('logout') }}" method="post">
                    @csrf

                    <button class="dropdown-item d-flex align-items-center justify-content-between space-x-1" type="submit">
                      <span>Sign Out</span>
                      <i class="fa fa-fw fa-sign-out-alt opacity-25"></i>
                    </button>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div id="page-header-loader" class="overlay-header bg-primary">
          <div class="content-header">
            <div class="w-100 text-center">
              <i class="far fa-sun fa-spin text-white"></i>
            </div>
          </div>
        </div>
      </header>

      <main id="main-container">
        @yield('content')
      </main>

      <footer id="page-footer">
        <div class="content py-3">
          <div class="row fs-sm">
            <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
              Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
            </div>
            <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
              <a class="fw-semibold" href="https://1.envato.market/95j" style="font-size: 0.4rem!important" target="_blank">{!! splitAndWrapAppName() !!}</a> &copy; <span data-toggle="year-copy"></span>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <script src="{{ asset('/') }}/assets/_js/main/app.js"></script>
    <script src="{{ asset('/') }}/assets/js/codebase.app.min.js"></script>
    @stack('scripts')
  </body>
</html>
