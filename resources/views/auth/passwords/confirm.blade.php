@extends('layouts.master')

@section('title')
email_verify
@endsection

@section('header')
  @include('layouts.header')    
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
		<i class="fas fa-check-circle fa-5x success-icon-color text-center mt-5"></i>
        <h1 class="text-center custom-color mt-2">Recuperación iniciada</h1>
        <p class="h6 text-center mt-3">Te hemos enviado un enlace de recuperación a:</p>
        <p class="h6 text-center custom-color font-weight-800" role="button">u*******@gmail.com</p>
        <p class="h6 text-center">Por favor revisa la bandeja de entrada o spam de tu email y verifica tu cuenta.</p>

        <!-- <form method="POST" action="{{ route('login') }}"> -->
            @csrf
            <div class="row justify-content-center mt-4">
                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-7 col-9 d-flex">
                    <button type="submit" class="form-control btn-reset_password mx-5" onclick="gotologin()">Volver a login</button>
                </div>
            </div>
        <!-- </form> -->
        <p class="h6 text-center mt-4">¿No recibiste tu email de recuperación? <a href="/password/reset" class="text-decoration-underline custom-color font-weight-800"> Haz clic aquí para solicitar otro</a></p>
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