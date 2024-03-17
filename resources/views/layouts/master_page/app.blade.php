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
    <style>
        .wrapper {
            display: flex;
            gap: 2;
        }

        .main-wrapper {
            flex-grow: 1;
        }

        .side-navigation {
            height: 100vh;
            width: 250px;
            border-right: 2px solid rgb(201, 201, 201);
            background-color: rgb(226, 226, 226);
            transition: 1s;
        }

        .sidebar-header {
            display: flex;
            align-items: center;
            border-bottom: 2px solid rgb(201, 201, 201);
            padding: 10px;
            height: 6vh;
        }

        .sidebar-body {
            padding: 10px;
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <div class="side-navigation">
            {{-- Sidebar --}}
            @include('layouts.sections.components.auth.sidebar')
        </div>
        <div class="main-wrapper">
            {{-- Navbar --}}
            @include('layouts.sections.components.auth.navbar')

            {{-- Main Content --}}
            <main class="p-2">
                @yield('main-content')
            </main>
        </div>
    </div>

    {{-- Scripts --}}
    @livewireScripts
    @include('layouts.sections.assets.auth.scripts')
</body>

</html>
