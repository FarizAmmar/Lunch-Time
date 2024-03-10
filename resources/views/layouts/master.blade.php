<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('assets/') }}" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title> {{ $title . ' | ' . env('APP_NAME') }}</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />

    {{-- Styles --}}
    @include('layouts.sections.styles')
</head>

<body>
    {{-- Layout wrapper  --}}
    @auth
        <div class="layout-wrapper layout-content-navbar">
            @include('layouts.sections.sidebar')
            <div class="layout-container">
                {{-- Layout container --}}
                <div class="layout-page">
                    {{-- Navbar --}}
                    @include('layouts.sections.navbar')
                    {{-- Content wrapper --}}
                    <div class="content-wrapper">
                        @yield('main-content')

                        @include('layouts.sections.footer')
                    </div>
                </div>
            </div>
        </div>
    @endauth

    @guest
        @yield('main-content')
    @endguest

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
    {{-- Scripts --}}
    @include('layouts.sections.scripts')
</body>

</html>
