{{-- Vendor CSS --}}
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
{{-- Custom Style --}}
@if ($title == 'Dashboard')
    <link rel="stylesheet" href="{{ asset('assets/template/assets/css/styles.min.css') }}">
@else
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
@endif
