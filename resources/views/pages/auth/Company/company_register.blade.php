@extends('layouts.master_page.guest')

@push('styles')
    <style>
        ul {
            border: 1px solid black;
          }
    </style>
@endpush

<script>
    //For phone Number formatted input
    var cardNum = document.getElementById('comp_telp');
    cardNum.onkeyup = function (e) {
        if (this.value == this.lastValue) return;
        var caretPosition = this.selectionStart;
        var sanitizedValue = this.value.replace(/[^0-9]/gi, '');
        var parts = [];
        
        for (var i = 0, len = sanitizedValue.length; i < len; i += 4) {
            parts.push(sanitizedValue.substring(i, i + 4));
        }
        
        for (var i = caretPosition - 1; i >= 0; i--) {
            var c = this.value[i];
            if (c < '0' || c > '9') {
                caretPosition--;
            }
        }
        caretPosition += Math.floor(caretPosition / 4);
        
        this.value = this.lastValue = parts.join('-');
        this.selectionStart = this.selectionEnd = caretPosition;
    }
</script>
    
@section('main-content')
    <div>
        <main class="d-flex w-100">
            <div class="d-flex flex-column container">
                <div class="row vh-100">
                    <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 d-table h-100 mx-auto">
                        <div class="d-table-cell align-middle">

                            <div class="mt-4 text-center">
                                <h1 class="h2">Join Us Now !</h1>
                                <p class="lead">
                                    And start creating the best possible user experience for you customers.
                                </p>
                            </div>

                            {{-- Card --}}
                            <x-card>
                                {{-- Registration Form --}}
                                <livewire:Company.company_register-form>
                            </x-card>

                            <div class="mb-3 text-center">
                                Already have account? <a href="{{ route('login_company') }}" wire:navigate>Log In</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection