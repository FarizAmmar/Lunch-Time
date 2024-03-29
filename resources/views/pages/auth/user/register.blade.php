@extends('layouts.master_page.guest')

@section('main-content')
    <div>
        <main class="d-flex w-100">
            <div class="d-flex flex-column container">
                <div class="row vh-100">
                    <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 d-table h-100 mx-auto">
                        <div class="d-table-cell align-middle">

                            <div class="mt-4 text-center">
                                <h1 class="h2">Register Now</h1>
                                <p class="lead">
                                    And find out what's today's special menu !
                                </p>
                            </div>

                            {{-- Card --}}
                            <x-card>
                                {{-- Registration Form --}}
                                <livewire:register-form>
                            </x-card>

                            <div class="mb-3 text-center">
                                Already have account? <a href="{{ route('login_user') }}" wire:navigate>Log In</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
