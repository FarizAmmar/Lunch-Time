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
</head>

<body>
    <div class="wrapper">
        {{-- Sidebar --}}
        @include('layouts.sections.components.auth.side-navigation')

        <div class="main">
            {{-- Navbar --}}
            @include('layouts.sections.components.auth.top-navigation')

            <main class="content">
                @yield('main-content')
            </main>

            {{-- Footer --}}
            @include('layouts.sections.components.auth.footer-navigation')
        </div>
    </div>

    {{-- Scripts --}}
    @livewireScripts
    @include('layouts.sections.assets.auth.scripts')
</body>

</html>
