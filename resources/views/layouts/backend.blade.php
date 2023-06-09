<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>{{ config('app.name') }}</title>

    <meta name="description"
        content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Icons -->
    <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
    <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">

    <!-- Fonts and Styles -->
    @yield('css_before')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ asset('/css/oneui.css') }}">


    <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="{{ asset('/css/themes/amethyst.css') }}"> -->
    @yield('css_after')

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};
        window.userId = {{ auth()->user()->id }};
    </script>

    @livewireStyles


</head>

<body>
    <!-- Page Container -->
    <!--
            Available classes for #page-container:

        GENERIC

            'remember-theme'                            Remembers active color theme between pages using localStorage (when set through color theme helper Template._uiHandleTheme())

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

        HEADER STYLE

            ''                                          Light themed Header
            'page-header-dark'                          Dark themed Header

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)

        DARK MODE

            'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)
        -->
    <div id="page-container" class="sidebar-o enable-page-overlay sidebar-dark side-scroll page-header-fixed ">
        <!-- Side Overlay-->
        <aside id="side-overlay" class="fs-sm">
            <!-- Side Header -->
            <div class="content-header border-bottom">
                <!-- User Avatar -->
                <a class="img-link me-1" href="javascript:void(0)">
                    <img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar10.jpg') }}" alt="">
                </a>
                <!-- END User Avatar -->

                <!-- User Info -->
                <div class="ms-2">
                    <a class="text-dark fw-semibold fs-sm" href="javascript:void(0)">{{ auth()->user()->name }}</a>
                </div>
                <!-- END User Info -->

                <!-- Close Side Overlay -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                {{-- <a class="ms-auto btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
                        <i class="fa fa-fw fa-times"></i>
                    </a> --}}
                <!-- END Close Side Overlay -->
            </div>
            <!-- END Side Header -->

            <!-- Side Content -->
            <div class="content-side">
                <p>
                    Content..
                </p>
            </div>
            <!-- END Side Content -->
        </aside>
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
        <nav id="sidebar" aria-label="Main Navigation">
            <!-- Side Header -->
            <div class="content-header">
                <!-- Logo -->
                <a class="font-semibold text-dual" href="/">
                    <span class="smini-visible">
                        <i class="fa fa-circle-notch text-primary"></i>
                    </span>
                    <span class="smini-hide fs-5 tracking-wider">{{ config('app.name') }}</span>
                </a>
                <!-- END Logo -->


            </div>
            <!-- END Side Header -->

            <!-- Sidebar Scrolling -->
            <div class="js-sidebar-scroll">
                <!-- Side Navigation -->
                <div class="content-side">
                    <ul class="nav-main">
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('/') ? ' active' : '' }}"
                                href="{{ route('dashboard.index') }}">
                                <i class="nav-main-link-icon si si-cursor"></i>
                                <span class="nav-main-link-name">Dashboard</span>
                            </a>
                        </li>

                        @if (auth()->user()->hasRole('super admin') ||
                                auth()->user()->can('view users'))
                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->segment(1) == 'users' ? ' active' : '' }}"
                                    href="{{ route('users.index') }}">

                                    <i class=" nav-main-link-icon fa fa-users"></i>
                                    <span class="nav-main-link-name">Users</span>
                                </a>
                            </li>
                        @endif

                        @if (auth()->user()->hasRole('super admin') ||
                                auth()->user()->can('view roles'))
                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->segment(1) == 'roles' ? ' active' : '' }}"
                                    href="{{ route('roles.index') }}">

                                    <i class="nav-main-link-icon fas fa-user-tag"></i>

                                    <span class="nav-main-link-name">Role Management</span>
                                </a>
                            </li>
                        @endif

                        @if (auth()->user()->hasRole('super admin') ||
                                auth()->user()->can('view advertising companies'))
                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->segment(1) == 'advertising-companies' ? ' active' : '' }}"
                                    href="{{ route('advertising-companies.index') }}">

                                    <i class="fas fa-building nav-main-link-icon"></i>
                                    <span class="nav-main-link-name">Advertising Companies</span>
                                </a>
                            </li>
                        @endif


                        @if (auth()->user()->hasRole('super admin') ||
                                auth()->user()->can('view advertising companies'))
                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->segment(1) == 'crms' ? ' active' : '' }}"
                                    href="{{ route('crms.index') }}">

                                    <i class="fas fa-tasks nav-main-link-icon"></i>
                                    <span class="nav-main-link-name">CRMs</span>
                                </a>
                            </li>
                        @endif

                        @if (auth()->user()->hasRole('super admin') ||
                                auth()->user()->can('view advertising companies'))
                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->segment(1) == 'ftps' ? ' active' : '' }}"
                                    href="{{ route('ftps.index') }}">

                                    <i class="fas fa-plug nav-main-link-icon"></i>
                                    <span class="nav-main-link-name">FTPs</span>
                                </a>
                            </li>
                        @endif



                        @if (auth()->user()->hasRole('super admin') ||
                                auth()->user()->can('view categories'))
                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->segment(1) == 'product-categories' ? ' active' : '' }}"
                                    href="{{ route('product-categories.index') }}">

                                    <i class="nav-main-link-icon fas fa-list"></i>
                                    <span class="nav-main-link-name">Product Categories</span>
                                </a>
                            </li>
                        @endif

                        @if (auth()->user()->hasRole('super admin') ||
                                auth()->user()->can('view products'))
                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->segment(1) == 'products' ? ' active' : '' }}"
                                    href="{{ route('products.index') }}">

                                    <i class="nav-main-link-icon fas fa-tags"></i>

                                    <span class="nav-main-link-name">Products</span>
                                </a>
                            </li>
                        @endif

                        @if (auth()->user()->hasRole('super admin') ||
                                auth()->user()->can('view shop options'))
                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->segment(1) == 'shop-options' ? ' active' : '' }}"
                                    href="{{ route('shop-options.index') }}">

                                    <i class="nav-main-link-icon fas fa-tags"></i>

                                    <span class="nav-main-link-name">Shop Options</span>
                                </a>
                            </li>
                        @endif

                        @if (auth()->user()->hasRole('super admin') ||
                                auth()->user()->can('view sites'))
                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->segment(1) == 'sites' ? ' active' : '' }}"
                                    href="{{ route('sites.index') }}">
                                    <i class="nav-main-link-icon si si-link"></i>
                                    <span class="nav-main-link-name">Sites</span>
                                </a>
                            </li>
                        @endif



                        <li
                            class="nav-main-item {{ request()->segment(1) == 'templates' || request()->segment(1) == 'pages' ? ' open' : '' }}">
                            <a class="nav-main-link {{ request()->segment(1) == 'templates' || request()->segment(1) == 'pages' ? ' active' : '' }} nav-main-link-submenu"
                                data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-energy"></i>
                                <span class="nav-main-link-name">Templates</span>
                            </a>
                            <ul class="nav-main-submenu">

                                @if (auth()->user()->hasRole('super admin') ||
                                        auth()->user()->can('view headers') ||
                                        auth()->user()->can('view footers') ||
                                        auth()->user()->can('view hero sections') ||
                                        auth()->user()->can('view about sections') ||
                                        auth()->user()->can('view contact sections') ||
                                        auth()->user()->can('view product sections') ||
                                        auth()->user()->can('view related product sections') ||
                                        auth()->user()->can('view popular product sections') ||
                                        auth()->user()->can('view cta sections') ||
                                        auth()->user()->can('view feature sections'))
                                    <li
                                        class="nav-main-item {{ request()->segment(1) == 'templates' ? ' open' : '' }}">
                                        <a class="nav-main-link {{ request()->segment(1) == 'templates' ? ' active' : '' }} nav-main-link-submenu"
                                            data-toggle="submenu" aria-haspopup="true" aria-expanded="false"
                                            href="#">

                                            <span class="nav-main-link-name">Landing Pages</span>
                                        </a>
                                        <ul class="nav-main-submenu">
                                            @can('view headers')
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link {{ request()->segment(2) == 'headers' ? ' active' : '' }}"
                                                        href="{{ route('headers.index') }}">
                                                        <span class="nav-main-link-name">Headers</span>
                                                    </a>
                                                </li>
                                            @endcan
                                            @can('view footers')
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link {{ request()->segment(2) == 'footers' ? ' active' : '' }}"
                                                        href="{{ route('footers.index') }}">
                                                        <span class="nav-main-link-name">Footers</span>
                                                    </a>
                                                </li>
                                            @endcan
                                            @can('view hero sections')
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link {{ request()->segment(2) == 'hero-sections' ? ' active' : '' }}"
                                                        href="{{ route('hero-sections.index') }}">
                                                        <span class="nav-main-link-name">Hero Section</span>
                                                    </a>
                                                </li>
                                            @endcan
                                            @can('view about sections')
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link {{ request()->segment(2) == 'about-sections' ? ' active' : '' }}"
                                                        href="{{ route('about-sections.index') }}">
                                                        <span class="nav-main-link-name">About Section</span>
                                                    </a>
                                                </li>
                                            @endcan
                                            @can('view product sections')
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link {{ request()->segment(2) == 'product-sections' ? ' active' : '' }}"
                                                        href="{{ route('product-sections.index') }}">
                                                        <span class="nav-main-link-name">Product Section</span>
                                                    </a>
                                                </li>
                                            @endcan
                                            @can('view related product sections')
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link {{ request()->segment(2) == 'related-product-sections' ? ' active' : '' }}"
                                                        href="{{ route('related-product-sections.index') }}">
                                                        <span class="nav-main-link-name">Related Product Section</span>
                                                    </a>
                                                </li>
                                            @endcan
                                            @can('view popular product sections')
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link {{ request()->segment(2) == 'popular-product-sections' ? ' active' : '' }}"
                                                        href="{{ route('popular-product-sections.index') }}">
                                                        <span class="nav-main-link-name">Popular Product Section</span>
                                                    </a>
                                                </li>
                                            @endcan
                                            @can('view cta sections')
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link {{ request()->segment(2) == 'cta-sections' ? ' active' : '' }}"
                                                        href="{{ route('cta-sections.index') }}">
                                                        <span class="nav-main-link-name">CTA Section</span>
                                                    </a>
                                                </li>
                                            @endcan
                                            @can('view contact sections')
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link {{ request()->segment(2) == 'contact-sections' ? ' active' : '' }}"
                                                        href="{{ route('contact-sections.index') }}">
                                                        <span class="nav-main-link-name">Contact Section</span>
                                                    </a>
                                                </li>
                                            @endcan
                                            @can('view feature sections')
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link {{ request()->segment(2) == 'feature-sections' ? ' active' : '' }}"
                                                        href="{{ route('feature-sections.index') }}">
                                                        <span class="nav-main-link-name">Feature Section</span>
                                                    </a>
                                                </li>
                                            @endcan
                                        </ul>

                                    </li>
                                @endif

                                @can('view product pages')
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->segment(2) == 'product-pages' ? ' active' : '' }}"
                                            href="{{ route('product-pages.index') }}">
                                            <span class="nav-main-link-name">Product Page</span>
                                        </a>
                                    </li>
                                @endcan

                                @can('view checkout pages')
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->segment(2) == 'checkout-pages' ? ' active' : '' }}"
                                            href="{{ route('checkout-pages.index') }}">
                                            <span class="nav-main-link-name">Checkout Page</span>
                                        </a>
                                    </li>
                                @endcan
                                @can('view checkout pages')
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->segment(2) == 'contact-pages' ? ' active' : '' }}"
                                            href="{{ route('contact-pages.index') }}">
                                            <span class="nav-main-link-name">Contact Page</span>
                                        </a>
                                    </li>
                                @endcan

                                @can('view checkout pages')
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->segment(2) == 'cart-pages' ? ' active' : '' }}"
                                            href="{{ route('cart-pages.index') }}">
                                            <span class="nav-main-link-name">Cart Page</span>
                                        </a>
                                    </li>
                                @endcan

                                @can('view checkout pages')
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->segment(2) == 'navigation-pages' ? ' active' : '' }}"
                                            href="{{ route('navigation-pages.index') }}">
                                            <span class="nav-main-link-name">Navigation Page</span>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>



                        @if (auth()->user()->hasRole('super admin') ||
                                auth()->user()->can('view slogans') ||
                                auth()->user()->can('view taglines') ||
                                auth()->user()->can('view aboutus titles') ||
                                auth()->user()->can('view aboutus descriptions') ||
                                auth()->user()->can('view shop titles') ||
                                auth()->user()->can('view button titles') ||
                                auth()->user()->can('view popular titles') ||
                                auth()->user()->can('view contact titles') ||
                                auth()->user()->can('view contact descriptions'))
                            <li class="nav-main-item {{ request()->segment(1) == 'content' ? ' open' : '' }}">
                                <a class="nav-main-link {{ request()->segment(1) == 'content' ? ' active' : '' }} nav-main-link-submenu"
                                    data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">

                                    <i class="nav-main-link-icon far fa-file-alt"></i>
                                    <span class="nav-main-link-name">Content</span>
                                </a>
                                <ul class="nav-main-submenu">

                                    @can('view slogans')
                                        <li class="nav-main-item">
                                            <a class="nav-main-link {{ request()->segment(2) == 'slogans' ? ' active' : '' }}"
                                                href="{{ route('slogans.index') }}">
                                                <span class="nav-main-link-name">Slogans</span>
                                            </a>
                                        </li>
                                    @endcan

                                    @can('view taglines')
                                        <li class="nav-main-item">
                                            <a class="nav-main-link {{ request()->segment(2) == 'tag-lines' ? ' active' : '' }}"
                                                href="{{ route('tag-lines.index') }}">
                                                <span class="nav-main-link-name">Tag Lines</span>
                                            </a>
                                        </li>
                                    @endcan

                                    @can('view aboutus titles')
                                        <li class="nav-main-item">
                                            <a class="nav-main-link {{ request()->segment(2) == 'about-us-titles' ? ' active' : '' }}"
                                                href="{{ route('about-us-titles.index') }}">
                                                <span class="nav-main-link-name">About Us Titles</span>
                                            </a>
                                        </li>
                                    @endcan

                                    @can('view aboutus descriptions')
                                        <li class="nav-main-item">
                                            <a class="nav-main-link {{ request()->segment(2) == 'about-us-descriptions' ? ' active' : '' }}"
                                                href="{{ route('about-us-descriptions.index') }}">
                                                <span class="nav-main-link-name">About Us Descriptions</span>
                                            </a>
                                        </li>
                                    @endcan

                                    @can('view shop titles')
                                        <li class="nav-main-item">
                                            <a class="nav-main-link {{ request()->segment(2) == 'shop-titles' ? ' active' : '' }}"
                                                href="{{ route('shop-titles.index') }}">
                                                <span class="nav-main-link-name">Shop Titles</span>
                                            </a>
                                        </li>
                                    @endcan

                                    @can('view button titles')
                                        <li class="nav-main-item">
                                            <a class="nav-main-link {{ request()->segment(2) == 'button-titles' ? ' active' : '' }}"
                                                href="{{ route('button-titles.index') }}">
                                                <span class="nav-main-link-name">Button Titles</span>
                                            </a>
                                        </li>
                                    @endcan

                                    @can('view popular titles')
                                        <li class="nav-main-item">
                                            <a class="nav-main-link {{ request()->segment(2) == 'popular-titles' ? ' active' : '' }}"
                                                href="{{ route('popular-titles.index') }}">
                                                <span class="nav-main-link-name">Popular Titles</span>
                                            </a>
                                        </li>
                                    @endcan

                                    @can('view contact titles')
                                        <li class="nav-main-item">
                                            <a class="nav-main-link {{ request()->segment(2) == 'contact-titles' ? ' active' : '' }}"
                                                href="{{ route('contact-titles.index') }}">
                                                <span class="nav-main-link-name">Contact Titles</span>
                                            </a>
                                        </li>
                                    @endcan

                                    @can('view contact descriptions')
                                        <li class="nav-main-item">
                                            <a class="nav-main-link {{ request()->segment(2) == 'contact-descriptions' ? ' active' : '' }}"
                                                href="{{ route('contact-descriptions.index') }}">
                                                <span class="nav-main-link-name">Contact Description</span>
                                            </a>
                                        </li>
                                    @endcan


                                </ul>

                            </li>
                        @endif


                    </ul>
                </div>
                <!-- END Side Navigation -->
            </div>
            <!-- END Sidebar Scrolling -->
        </nav>
        <!-- END Sidebar -->

        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
                <!-- Left Section -->
                <div class="d-flex align-items-center">
                    <!-- Toggle Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                    <button type="button" class="btn btn-sm btn-alt-secondary me-2 d-lg-none" data-toggle="layout"
                        data-action="sidebar_toggle">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                    <!-- END Toggle Sidebar -->

                    <!-- Toggle Mini Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                    <button type="button" class="btn btn-sm btn-alt-secondary me-2 d-none d-lg-inline-block"
                        data-toggle="layout" data-action="sidebar_mini_toggle">
                        <i class="fa fa-fw fa-ellipsis-v"></i>
                    </button>
                    <!-- END Toggle Mini Sidebar -->

                    <!-- Open Search Section (visible on smaller screens) -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    {{-- <button type="button" class="btn btn-sm btn-alt-secondary d-md-none" data-toggle="layout"
                        data-action="header_search_on">
                        <i class="fa fa-fw fa-search"></i>
                    </button> --}}
                    <!-- END Open Search Section -->

                    <!-- Search Form (visible on larger screens) -->
                    {{-- <form class="d-none d-md-inline-block" action="/dashboard" method="POST">
                        @csrf
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control form-control-alt" placeholder="Search.."
                                id="page-header-search-input2" name="page-header-search-input2">
                            <span class="input-group-text border-0">
                                <i class="fa fa-fw fa-search"></i>
                            </span>
                        </div>
                    </form> --}}
                    <!-- END Search Form -->
                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div class="d-flex align-items-center">
                    <!-- User Dropdown -->
                    <div class="dropdown d-inline-block ms-2">
                        <button type="button" class="btn btn-sm btn-alt-secondary d-flex align-items-center show"
                            id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="rounded-circle" src="{{ asset('media/avatars/avatar10.jpg') }}"
                                alt="Header Avatar" style="width: 21px;">
                            <span class="d-none d-sm-inline-block ms-2">{{ auth()->user()->name }}</span>
                            <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block ms-1 mt-1"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0 border-0 "
                            aria-labelledby="page-header-user-dropdown">
                            <div class="p-3 text-center bg-body-light border-bottom rounded-top">
                                <img class="img-avatar img-avatar48 img-avatar-thumb"
                                    src="{{ asset('media/avatars/avatar10.jpg') }}" alt="">
                                <p class="mt-2 mb-0 fw-medium">{{ auth()->user()->name }}</p>
                            </div>

                            <div role="separator" class="dropdown-divider m-0"></div>
                            <div class="p-2">

                                <a href="{{ route('profile.index') }}"
                                    class="dropdown-item d-flex align-items-center justify-content-between">
                                    <span class="fs-sm fw-medium">Profile</span>
                                </a>
                                <form action="{{ route('logout') }}" id="logout-form" method="POST">
                                    @csrf

                                </form>


                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    onclick="document.getElementById('logout-form').submit()">
                                    <span class="fs-sm fw-medium">Log Out</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END User Dropdown -->

                    <!-- Notifications Dropdown -->
                    <div class="dropdown d-inline-block ms-2">
                        <button type="button" onclick="getNotifications()" class="btn btn-sm btn-alt-secondary"
                            id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fa fa-fw fa-bell"></i>

                            @php
                                $notifications = auth()->user()->unreadNotifications;

                                $totalNotifications = $notifications->count();

                            @endphp

                            @if ($totalNotifications > 0)
                                <span id="notificationCountBadge"
                                    class="badge bg-danger rounded-pill">{{ $totalNotifications }}</span>
                            @endif

                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0 border-0 fs-sm"
                            aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-2 bg-body-light border-bottom text-center rounded-top">
                                <h5 class="dropdown-header text-uppercase">Notifications</h5>
                            </div>
                            <ul class="nav-items mb-0" id="notificationsContainer">

                                {{-- first 5 notifications --}}

                                @forelse ($notifications->take(5) as $notification)
                                    <li>
                                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                            <div class="flex-shrink-0 me-2 ms-3">
                                                <i class="fa fa-fw fa-info text-info"></i>
                                            </div>
                                            <div class="flex-grow-1 pe-2">
                                                <div class="fw-semibold">{{ $notification->data['message'] }}</div>
                                                <span class="fw-medium text-muted">
                                                    {{ $notification->created_at->diffForHumans() }}
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                @empty
                                    <li>
                                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                            <div class="flex-shrink-0 me-2 ms-3">
                                                <i class="fa fa-fw fa-info text-info"></i>
                                            </div>
                                            <div class="flex-grow-1 pe-2">
                                                <div class="fw-semibold">No New Notifications</div>
                                                <span class="fw-medium text-muted">
                                                    No New Notifications
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                @endforelse


                            </ul>
                            <div class="p-2 border-top text-center d-flex justify-content-around">

                                @if ($totalNotifications > 0)
                                    <a class="d-inline-block fw-medium" style="cursor: pointer"
                                        onclick="markReadAllNotifications(this)">
                                        <i class="fa fa-fw fa-check me-1 opacity-50"></i> Mark All As Read
                                    </a>
                                @endif
                                <a class="d-inline-block fw-medium" style="cursor: pointer"
                                    href="{{ route('notifications.index') }}">
                                    <i class="fa fa-fw fa-eye me-1 opacity-50"></i> View All
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END Notifications Dropdown -->

                    <!-- Toggle Side Overlay -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    {{-- <button type="button" class="btn btn-sm btn-alt-secondary ms-2" data-toggle="layout"
                        data-action="side_overlay_toggle">
                        <i class="fa fa-fw fa-list-ul fa-flip-horizontal"></i>
                    </button> --}}
                    <!-- END Toggle Side Overlay -->
                </div>


                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->

            <!-- Header Search -->
            {{-- <div id="page-header-search" class="overlay-header bg-body-extra-light">
                <div class="content-header">
                    <form class="w-100" action="/dashboard" method="POST">
                        @csrf
                        <div class="input-group">
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-alt-danger" data-toggle="layout"
                                data-action="header_search_off">
                                <i class="fa fa-fw fa-times-circle"></i>
                            </button>
                            <input type="text" class="form-control" placeholder="Search or hit ESC.."
                                id="page-header-search-input" name="page-header-search-input">
                        </div>
                    </form>
                </div>
            </div> --}}
            <!-- END Header Search -->

            <!-- Header Loader -->
            <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
            <div id="page-header-loader" class="overlay-header bg-body-extra-light">
                <div class="content-header">
                    <div class="w-100 text-center">
                        <i class="fa fa-fw fa-circle-notch fa-spin"></i>
                    </div>
                </div>
            </div>
            <!-- END Header Loader -->
        </header>
        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">
            @yield('content')
        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        <footer id="page-footer" class="bg-body-light">
            <div class="content py-3">
                <div class="row fs-sm">
                    {{-- <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
                        Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold"
                            href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                    </div> --}}
                    <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
                        <a class="fw-semibold" href="https://1.envato.market/AVD6j"
                            target="_blank">{{ config('app.name') }}</a> &copy;
                        <span data-toggle="year-copy"></span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!--
            OneUI JS

            Core libraries and functionality
        -->

    <!-- Laravel Scaffolding JS -->
    <!-- <script src="{{ asset('/js/laravel.app.js') }}"></script> -->

    <script src="{{ asset('js/lib/jquery.min.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-bs5/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/buttons.colVis.min.js') }}"></script>
    {{-- <script src="assets/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js"></script> --}}
    <script src="{{ asset('js/plugins/jquery.maskedinput/jquery.maskedinput.min.js') }}"></script>


    <!-- Page JS Code -->
    <script src="{{ asset('js/pages/tables_datatables.js') }}"></script>


    <script src="{{ asset('js/plugins/select2/js/select2.full.min.js') }}"></script>

    <script src="{{ asset('js/plugins/dropzone/min/dropzone.min.js') }}"></script>


    <script src="{{ asset('js/plugins/datatables/edit.js') }}"></script>

    <script src="{{ mix('js/app.js') }}"></script>


    <script src="{{ asset('js/oneui.app.js') }}"></script>


    <!-- Page JS Helpers (Flatpickr + BS Datepicker + BS Maxlength + Select2 + Masked Inputs + Ion Range Slider + BS Colorpicker plugins) -->
    <script>
        // One.helpersOnLoad(['js-flatpickr', 'jq-datepicker', 'jq-maxlength', 'jq-select2', 'jq-masked-inputs',
        //     'jq-rangeslider', 'jq-colorpicker'
        // ]);
        // $(".drp0select2").select2({
        //     dropdownParent: $(".modal")
        // });
    </script>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('sweetalert::alert')


    @livewireScripts


    @yield('js_after')

    <script>
        function showStatus(message, type = 'success', toast = true) {

            if (type == "success") {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                if (toast) {
                    Toast.fire({
                        icon: type,
                        title: message,
                    })
                } else {
                    Swal.fire({
                        icon: type,
                        title: message,
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        allowEnterKey: false,
                    })
                }
            } else if (type == "error") {

                Swal.fire({
                    icon: type,
                    title: message,
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                })


            }

        }

        function confirmDelete(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $("#form-" + id).submit();
                    // Swal.fire(
                    //     'Deleted!',
                    //     'Your file has been deleted.',
                    //     'success'
                    // )
                }
            })
        }

        function getNotifications() {

            $.ajax({
                url: "{{ route('notifications.index') }}",
                type: "GET",
                success: function(data) {
                    console.log(data);
                    // $("#notifications").html(data);
                }
            });

        }

        function markReadAllNotifications(element) {

            $.ajax({
                url: "{{ route('notifications.mark-all-as-read') }}",
                type: "GET",
                success: function(data) {
                    console.log(data);
                    $("#notificationCountBadge").remove();
                    $("#notificationsContainer").html('');
                }
            });

        }
    </script>


</body>

</html>
