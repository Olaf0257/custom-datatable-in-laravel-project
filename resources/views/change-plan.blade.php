@extends('layouts.master')

@section('title')
    Chnage plan
@endsection

@section('header')
  @include('layouts.header')    
@endsection

@section('content')
<section class="change-plan py-5 px-3">
  <h2 class="title text-center mb-5">Cambiar campus o plan de estudio</h2>
  <div class="w-100 container-size-sm m-auto">
    <div class="w-100 form-group mb-2">
        <label for="base_location">Campus o sede</label> <br>
        <span>
          También podrás visitar otros campus o sedes luego
        </span>
        <select class="slim-select form-control" name="base_location" id="base_location" required>
            <option value="1">Please select</option>
            <option value="2">Ciudad de Guatemala</option>
            <option value="3">Ciudad de Guatemala</option>
        </select>
    </div>
    <div class="w-100 form-group mb-5">
        <label for="study_plan">Plan de Estudios (Pregrado / Posgrado)</label>
        <select class="slim-select form-control" name="study_plan" id="study_plan" required>
            <option value="1">Please select</option>
            <option value="2">Pregrado</option>
            <option value="3">Pregrado</option>
        </select>
    </div>
    <div class="w-100 text-center">
      <a href="" class="btn btn-primary">Guardar</a>
    </div>
  </div>  
</section>
@endsection


@section('footer')
  @include('layouts.footer')    
@endsection