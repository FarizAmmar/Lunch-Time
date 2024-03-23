<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }} | {{ env('APP_NAME') }}</title>

    {{-- Styles --}}
    @include('layouts.sections.assets.auth.styles')

    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        {{-- Sidebar --}}
        @include('layouts.sections.components.auth.sidebar')

        <!--  Main wrapper -->
        <div class="body-wrapper">
            {{-- Header / Navbar --}}
            @include('layouts.sections.components.auth.navbar')

            <div class="container-fluid">
                {{-- Main-content --}}
                @yield('main-content')

                {{-- Footer --}}
                @include('layouts.sections.components.auth.footer')
            </div>
        </div>
    </div>

    {{-- Scripts --}}
    @livewireScripts
    @include('layouts.sections.assets.auth.scripts')
    @stack('scripts')
</body>

</html>
