@extends('layouts.master_page.guest')

@push('styles')
    <style>
        
    </style>
@endpush

@section('main-content')
    <div>
        <main class="d-flex w-100">
            <div class="d-flex flex-column container">
                <div class="row vh-100">
                    <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 d-table h-100 mx-auto">
                        <div class="d-table-cell align-middle">

                            @if (session('success'))
                                <div class="alert text-center alert-warning alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>                                
                            @endif

                            <div class="mt-4 text-center">
                                <h1 class="h2">Welcome back!</h1>
                                <p class="lead">
                                    Sign in to your account to continue
                                </p>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="m-sm-3">
                                        {{-- Login Form --}}
                                        <livewire:login-form>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 text-center">
                                Don't have an account? <a href="{{ route('register') }}" wire:navigate>Sign up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>
@endsection
