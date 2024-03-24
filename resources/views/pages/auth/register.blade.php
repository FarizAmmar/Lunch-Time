@extends('layouts.master_page.guest')

@push('styles')
@endpush

@section('main-content')
    <div>
        <main class="d-flex w-100">
            <div class="d-flex flex-column container">
                <div class="row vh-100">
                    <div class="col-sm-10 d-table h-100 mx-auto">
                        <div class="d-table-cell align-middle">

                            <div class="mt-4 text-center">
                                <h1 class="h2">Join Us Now !</h1>
                                <p class="lead">
                                    And start creating the best possible user experience for you customers.
                                </p>
                            </div>

                            {{-- Card --}}
                            <x-card class="w-100">
                                {{-- Registration Form --}}
                                <livewire:Auth.register-form>
                            </x-card>

                            <div class="mb-3 text-center">
                                Already have account? <a href="{{ route('login') }}" wire:navigate>Log In</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
{{-- <script>
    documen.addEventListener('livewire:initialized',()=>
    @this.on('swal',(event)=>{
        const data=event
        swal.fire({
            icon:data[0]['icon'],
            icon:data[1]['tittle'],
            icon:data[2]['text'],
        })
    }
    ))
</script> --}}
@endsection
