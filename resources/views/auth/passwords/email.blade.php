@extends('layouts.master')

@section('title')
reset_password
@endsection

@section('header')
  @include('layouts.header')    
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1 class="text-center mt-5 custom-color">Recuperar password</h1>
        <p class="h6 text-center mt-1">Por favor ingresa el email con el que te registraste y luego presiona recuperar.</p>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="row justify-content-center mt-4">
                <div class="form-group col-xl-4 col-lg-5 col-md-6 col-sm-8 col-10">
                    <label class="label custom-color" for="email">Correo electrónico</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row justify-content-center mt-2">
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 col-10 d-flex">
                    <button type="button" class="form-control btn-cancel mr-2" onclick="gotologin()">Cancelar</button>
                    <button type="submit" class="form-control btn-reset_password ml-2">Recuperar</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')
    <script>
        function gotologin() {
            location.href = "/login";
        }
    </script>
@endsection
