@extends('layouts.master')

@section('title')
success_password
@endsection

@section('header')
@include('layouts.header')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
		<i class="fas fa-check-circle fa-5x success-icon-color text-center mt-5"></i>
        <h1 class="text-center custom-color mt-2">¡Password guardado!</h1>
        <p class="h6 text-center mt-4 mb-3">Te recomendamos mantener tu password en un sitio seguro para que no lo olvides :)</p>
        <!-- <form method="POST" action="{{ route('login') }}"> -->
            @csrf
            <div class="row justify-content-center mt-4">
                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-7 col-9 d-flex">
                    <button type="submit" class="form-control btn-reset_password mx-5" onclick="gotologin()">Volver a login</button>
                </div>
            </div>
        <!-- </form> -->
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