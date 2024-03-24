{{-- Vendor JS --}}
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery/jquery.js') }}"></script>

<script src="{{ asset('assets/template/assets/js/sidebarmenu.js') }}"></script>
<script src="{{ asset('assets/template/assets/js/app.min.js') }}"></script>
<script src="{{ asset('assets/template/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/template/assets/libs/simplebar/dist/simplebar.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if ($title == 'Dashboard')
    <script src="{{ asset('assets/template/assets/js/dashboard.js') }}"></script>
@endif

{{-- Custom Scripts --}}
<script src="{{ asset('assets/js/scripts.js') }}"></script>
