@extends('layouts.master')

@section('title')
login
@endsection

@section('content')
<section class="d-flex login-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 text no-padding center-flex bg-custom">
                <form method="POST" action="{{ route('login') }}" class="signin-form col-lg-8">
                    @csrf
                    <div class="form-group mb-5 text-center">
                        <a href="/"><img src="{{ asset('img/logo.svg') }}" alt="logo" width="50%" height="70vh"></a>
                    </div>

                    <div class="form-group mb-3">
                        <label class="label " for="email">Email</label>
                        <input id="email" type="email" class="form-control custom-login @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autofocus>
                        @error('email')
                        <span class="" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label class="label" for="password">Contraseña</label>
                        <input id="password" type="password"
                            class="form-control custom-login @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">
                        <i class="far fa-eye" id="togglePassword"></i>

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-login-custom submit px-3 mt-4">
                        Iniciar sesión
                        </button>
                    </div>

                    <div class="form-group text-white text-center">
                        @if (Route::has('password.request'))
                            ¿Olvidaste tu contraseña? <a class="text-white text-decoration-underline" href="{{ route('password.request') }}"> Haz clic aquí</a>
                        @endif
                    </div>
                </form>
            </div>
            <div class="col-sm-6 image no-padding">
                <div class="full-width">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');
        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye / eye slash icon
            this.classList.toggle('fa-eye-slash');
            password.focus();
        });

        $( "#email, #password" ).focusout(function() {
            $( "#email" ).css( "color", "white" );
            $( "#password" ).css( "color", "white" );
        });
    });
</script>
@endsection
