<nav id="sidebar">
    <div class="sidebar-content">
        <div class="content-header justify-content-lg-center">
            <div>
                <span class="smini-visible fw-bold tracking-wide fs-lg">
                    {!! initialAppName() !!}
                </span>
                <a class="link-fx fw-bold tracking-wide mx-auto" href="{{ url('/dashboard') }}">
                    <span class="smini-hidden">
                        <i class="fa fa-fire text-primary"></i>
                        {!! splitAndWrapAppName() !!}
                    </span>
                </a>
            </div>

            <div>
                <button type="button" class="btn btn-sm btn-alt-danger d-lg-none" data-toggle="layout"
                    data-action="sidebar_close">
                    <i class="fa fa-fw fa-times"></i>
                </button>
            </div>
        </div>

        <div class="js-sidebar-scroll">
            <div class="content-side content-side-user px-0 py-0">
                <div class="smini-visible-block animated fadeIn px-2">
                    <img class="img-avatar img-avatar32" src="{{ asset('/') }}/assets/media/avatars/avatar15.jpg"
                        alt="">
                </div>

                <div class="smini-hidden text-center mx-auto">
                    <a class="img-link" href="{{ url('/dashboard') }}">
                        <img class="img-avatar" src="{{ asset('/') }}/assets/media/avatars/avatar15.jpg"
                            alt="">
                    </a>
                    <ul class="list-inline mt-3 mb-0">
                        <li class="list-inline-item">
                            <a class="link-fx text-dual fs-sm fw-semibold text-uppercase"
                                href="{{ url('/dashboard') }}">{{ $user->name }}</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="link-fx text-dual" data-toggle="layout" data-action="dark_mode_toggle"
                                href="javascript:void(0)">
                                <i class="fa fa-burn"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="content-side content-side-full">
                <ul class="nav-main">
                    @php
                        switch (true) {
                            case Auth::user()->hasRole('administrator'):
                                $menus = \App\Models\Menu::forAdministrator();
                                break;

                            default:
                                $menus = config('console-menu');
                        }
                    @endphp

                    @foreach ($menus as $menu)
                        @can($menu['permission'])
                            @if ($menu['have_heading'])
                                <li class="nav-main-heading">{{ $menu['heading_label'] }}</li>
                            @endif

                            @if (!empty($menu['childs']))
                                <li class="nav-main-item {{ $menu['hasActiveChild'] ? 'open' : '' }}">
                                    <a class="nav-main-link {{ $menu['active'] ? 'active' : '' }} nav-main-link-submenu"
                                        data-toggle="submenu" aria-haspopup="true" aria-expanded="true"
                                        href="{{ $menu['link'] }}">
                                        <i class="nav-main-link-icon fa fa-grip-vertical"></i>
                                        <span class="nav-main-link-name">{{ $menu['label'] }}</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        @foreach ($menu['childs'] as $child)
                                            @can($child['permission'])
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link {{ $child['active'] ? 'active' : '' }}"
                                                        href="{{ $child['link'] }}">
                                                        <span class="nav-main-link-name">{{ $child['label'] }}</span>
                                                    </a>
                                                </li>
                                            @endcan
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li class="nav-main-item">
                                    <a class="nav-main-link {{ $menu['active'] ? 'active' : '' }}"
                                        href="{{ $menu['link'] }}">
                                        <i class="nav-main-link-icon fa fa-grip-vertical"></i>
                                        <span class="nav-main-link-name">{{ $menu['label'] }}</span>
                                    </a>
                                </li>
                            @endif
                        @endcan
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</nav>
