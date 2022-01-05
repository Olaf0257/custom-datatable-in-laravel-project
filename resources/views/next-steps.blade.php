@extends('layouts.master')

@section('title')
  next steps
@endsection

@section('header')
  @include('layouts.header')    
@endsection

@section('content')
<section class="next-steps py-5">
  <h2 class="title text-center mb-5">Siguientes pasos</h2>
  <div class="container">
      {{-- step item --}}
      <div class="step-item mb-4">
        <h5 class="mb-3">1. Confirma el Campus/Sede y Plan de Estudios del cual deseas recibir información</h5>
        <div class="body">
          <div class="row">
            <div class="col-12 col-md-6 col-lg-5 col-xl-4 mb-3">
              <div class="w-100 form-group mb-2">
                <label for="base_location">Campus o sede</label>
                <select class="slim-select form-control" name="base_location" id="base_location" required>
                    <option value="1">Please select</option>
                    <option value="2">Pregrado</option>
                    <option value="3">Pregrado</option>
                </select>
              </div>
              <div class="w-100 form-group mb-2">
                <label for="study_plan">Plan de Estudios (Pregrado / Posgrado)</label>
                <select class="slim-select form-control" name="study_plan" id="study_plan" required>
                    <option value="1">Please select</option>
                    <option value="2">Pregrado</option>
                    <option value="3">Pregrado</option>
                </select>
              </div>              
            </div>
            <div class="col-12 col-md-6 col-lg-7 col-xl-8">
              <div class="offset-md-1">
                <p>
                  sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                </p>
                <p>
                  sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla cilisi.
                </p>
                <p class="text-primary">
                  *Duis autem %30 descuento dolor in hendrerit in: email@email.com
                </p>
              </div>              
            </div>
          </div>
        </div>
      </div>
      {{-- end step item --}}
      <div class="step-item mb-4">
        <h5 class="mb-3">2. Responde las siguientes preguntas y presiona “enviar” para recibir la información en tu correo</h5>
        <div class="body">
          <div class="no-data">
            <p>Embeded Typeform</p>
          </div>
        </div>
      </div>
      <div class="w-100 text-center text-md-end">
        <a href="" class="btn btn-primary">Enviar info</a>
      </div>
  </div>  
</section>
@endsection


@section('footer')
  @include('layouts.footer')    
@endsection