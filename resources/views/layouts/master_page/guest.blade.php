<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }} | {{ env('APP_NAME') }}</title>

    <link rel="shortcut icon" href="{{ asset('assets/images/RonaldCodesLogo.png') }}" />

    {{-- Styles --}}
    @include('layouts.sections.assets.guest.styles')

    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="wrapper">
        <div class="main">

            <main class="content">
                @yield('main-content')
            </main>

        </div>
    </div>

    {{-- Scripts --}}
    @livewireScripts
    @include('layouts.sections.assets.guest.scripts')
</body>

</html>
