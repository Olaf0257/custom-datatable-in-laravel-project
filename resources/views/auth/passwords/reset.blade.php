@extends('layouts.master')

@section('title')
new_password
@endsection

@section('header')
  @include('layouts.header')    
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1 class="text-center mt-5 custom-color">Nuevo password</h1>
        <p class="h6 text-center mt-1">Por favor ingresa un nuevo password y luego selecciona guardar.</p>
        <!-- <form> -->
            <!-- @csrf -->
            <div class="row justify-content-center mt-4">
                <div class="form-group col-xl-4 col-lg-5 col-md-6 col-sm-8 col-10">
                    <label class="label custom-color" for="email">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="new_password" required
                            autocomplete="current-password" id="new_password">
                    <i class="far fa-eye text-black password" id="toggleNewPassword" style="color: #B3B3B3"></i>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row justify-content-center mt-2">
                <div class="form-group col-xl-4 col-lg-5 col-md-6 col-sm-8 col-10">
                    <label class="label custom-color" for="email">Confirma tu password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="confirm_password" required
                            autocomplete="current-password" id="confirm_password">
                    <i class="far fa-eye password" id="toggleConfirmPassword" style="color: #B3B3B3"></i>
                    <span class="invalid-feedback" role="alert" id="none_password_error" style="display: none !important">
                        porfavor ingrese una contraseña
                    </span>
                    <span class="invalid-feedback" role="alert" id="matching_password_error" style="display: none !important">
                        Este password no coincide con el anterior
                    </span>
                </div>
            </div>
            <div class="row justify-content-center mt-2">
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 col-10 d-flex">
                    <button type="button" class="form-control btn-cancel mr-2" onclick="gotologin()">Cancelar</button>
                    <button type="submit" class="form-control btn-reset_password ml-2" onclick="resetPassword()">Guardar</button>
                </div>
            </div>
        <!-- </form> -->
    </div>
</div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            const toggleNewPassword = document.querySelector('#toggleNewPassword');
            const toggleConfirmPassword = document.querySelector('#toggleConfirmPassword');
            const newPassword = document.querySelector('#new_password');
            const confirmPassword = document.querySelector('#confirm_password');
            toggleNewPassword.addEventListener('click', function(e) {
                // toggle the type attribute
                const type = newPassword.getAttribute('type') === 'password' ? 'text' : 'password';
                newPassword.setAttribute('type', type);
                // toggle the eye / eye slash icon
                this.classList.toggle('fa-eye-slash');
                newPassword.focus();
            });

            toggleConfirmPassword.addEventListener('click', function(e) {
                // toggle the type attribute
                const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
                confirmPassword.setAttribute('type', type);
                // toggle the eye / eye slash icon
                this.classList.toggle('fa-eye-slash');
                confirmPassword.focus();
            });
        });
        function gotologin() {
            location.href = "/login";
        }
        function resetPassword() {
            let newPassword = $('#new_password').val();
            let confirmPassword = $('#confirm_password').val();
            if(newPassword == "" && confirmPassword == "") {
                $('#none_password_error').css("display", "block");
                $('#new_password').css("border", "1px solid red");
                $('#confirm_password').css("border", "1px solid red");
                return;
            }
            if(newPassword != confirmPassword) {
                $('#new_password').css("border", "none");
                $('#none_password_error').css("display", "none");
                $('#confirm_password').css("border", "1px solid red");
                $('#matching_password_error').css("display", "block");
                return;
            }else{
                $('#new_password').css("border", "none");
                $('#none_password_error').css("display", "none");
                $('#confirm_password').css("border", "none");
                $('#matching_password_error').css("display", "none");
            }
        }
    </script>
@endsection
