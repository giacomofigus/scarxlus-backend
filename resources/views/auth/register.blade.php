@extends('layouts.app')

@section('content')
    <div class="container-fluid text-white">
        <div class="row vh-100">

            <!-- Right Container -->
            <div class="right-container col-lg-5 col-md-4 col-12 bg-image "></div>
            
            <!-- Left Container -->
            <div class="left-container col-lg-7 col-md-8 col-12 d-flex flex-column  justify-content-center align-items-center pt-sm-3 ">
                <!-- Nav -->
                <div class="nav d-flex flex-row-reverse justify-content-between w-100 position-absolute top-0 mt-4 px-3">
                    <a href="http://localhost:5174/">
                        <img src="/storage/img/house-solid.svg" class="icon" alt="home-button">
                    </a>
                    <button onclick="history.back()">
                        <img src="/storage/img/chevron-right-solid.svg" class="icon rotate-180" alt="return-back-button">
                    </button>
                </div>

                <form method="POST" action="{{ route('register') }}" id="registrationForm" class="w-form ">
                    @csrf
            
                    <div class="row mb-3">
                        <h1 class="font-bebas text-uppercase">{{ __('Registrati') }}</h1>    
                    </div>
        
                    <!-- Nome -->
                    <div class="row mb-4 ">
                        <div class="col">
                            <input 
                            id="name" 
                            type="text" 
                            class="form-control @error('name') is-invalid @enderror custom-input" 
                            name="name" 
                            value="{{ old('name') }}" 
                            autocomplete="name" 
                            autofocus 
                            placeholder="Nome">
        
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
        
                    <!-- Cognome -->
                    <div class="row mb-4">
                        <div class="col">
                            <input 
                            id="surname" 
                            type="text" 
                            class="form-control @error('surname') is-invalid @enderror custom-input" name="surname" 
                            value="{{ old('surname') }}" 
                            
                            autocomplete="surname" 
                            autofocus 
                            placeholder="Cognome">
        
                            @error('surname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
        
                    <!-- Email -->
                    <div class="row mb-4">
                        <div class="col">
                            <input 
                            id="email" 
                            type="text" 
                            class="form-control @error('email') is-invalid @enderror custom-input" 
                            name="email" 
                            value="{{ old('email') }}" 
                            
                            autocomplete="email" 
                            autofocus 
                            placeholder="Email">
        
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
        
                    <!-- Password -->
                    <div class="row mb-4">
                        <div class="col">
                            <input 
                            id="password" 
                            type="text" 
                            class="form-control @error('password') is-invalid @enderror custom-input" 
                            name="password" 
                            value="{{ old('password') }}" 
                            
                            autocomplete="password" 
                            autofocus 
                            placeholder="Password">
        
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
        
                    <!-- Conferma Password -->
                    <div class="mb-4 row">
                        <div class="col">
                            <input 
                            id="password-confirm" 
                            type="password" 
                            class="form-control custom-input" 
                            name="password_confirmation" 
                            
                            autocomplete="new-password" 
                            placeholder="Confirm Password">
                        </div>
                    </div>

                    <!-- Termini e condizoni -->
                     <div class="row mb-4">
                        <div class="col">
                            <input 
                            type="checkbox" 
                            id="accepted_terms" 
                            name="accepted_terms" 
                            value="1"
                            class="@error('accepted_terms') is-invalid @enderror"
                            > 
                            <label for="accepted_terms">Accetto i <a href="">termini e le condizioni</a> e la <a href="">privacy policy</a> <span class="text-warning">*</span></label>

                            @error('accepted_terms')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                     </div>
        
                    <!-- Button -->
                    <div class="row">
                        <div class="">
                            <button type="submit" class="btn btn-custom w-100">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>

                    <div class="row d-flex text-center mt-4">
                        <p>Hai già un account? 
                            <a href="http://127.0.0.1:8000/login">Login</a>
                        </p>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
