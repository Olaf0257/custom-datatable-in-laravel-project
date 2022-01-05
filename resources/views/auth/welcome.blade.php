@extends('layouts.master')

@section('title')
    welcome    
@endsection

@section('content')
<section class="agenda-section no-header">
    <div class="w-100 p-3 px-md-5">
        <div class="d-flex py-5 head">
            <div class="m-auto text-center container-size-md">
                <h2 class="title animated fadeIn">¡Bienvenidos!</h2>
                <p>
                    Estamos muy emocionados de tenerlos con nosotros. <br>
                    Queremos mostrarles todo lo que tenemos preparado para ustedes.
                </p>
            </div>
        </div>
        <div class="d-flex body">
            <div class="m-auto d-flex container-size-lg w-100">
                <div class="video-bg d-flex animated fadeIn" style="height: 500px;">   
                    <a href="" class="m-auto btn-video-circle">
                        <div class="bg-btn-circle">
                            <span class="btn-circle-text"><i class="fa fa-caret-right"></i></span>                        
                        </div>       
                    </a>              
                </div>           
            </div>             
        </div>
        <div class="footer">
            <div class="pt-4 text-center text-lg-end">
                <a href="{{ url('registcomp') }}" class="btn btn-primary animated fadeInRight">Siguiente</a>
            </div>
        </div>
    </div>
</section>
@endsection
