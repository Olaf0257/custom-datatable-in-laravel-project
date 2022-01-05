@extends('layouts.master')

@section('title')
    settings
@endsection

@section('header')
@include('layouts.header')
@endsection

@section('content')
@include('settings.layouts.searchbar')
<div class="setting-mainsection py-0 py-md-5">
    {{-- sidebar --}}
    @include('settings.layouts.sidebar')
    {{-- end sidebar --}}
    <div class="main-wrapper">
        <div class="w-100 d-none d-lg-flex">
            <a href="#" id="toggle_sidebar" class="toggle-sidebar-wrap sidebar-toggler">
                <div class="toggle-sidebar">
                    <i class="fa fa-caret-left"></i>
                </div>
            </a>
        </div>
        <div class="px-3 px-md-5">
            <div class="w-100 header d-flex flex-wrap flex-md-nowrap">
                <div class="title-wrap w-100">
                    <h2 class="title">Unidad 1</h2>
                    <div class="py-3 text-gray">
                        <span><i class="fa fa-calendar-o"></i></span>
                        <span class="pl-1">Updated on 18 Nov 2020</span>
                    </div>
                </div>
                
                {{-- toolbar --}}
                @include('settings.layouts.toolbar')
                {{-- end toolbar --}}
            </div>
            <div class="body py-5">
                <div class="mb-5">
                    <h3 class="subtitle">Sesión Zoom de preguntas y respuestas</h3>
                    <div class="d-flex w-100">
                        <div class="w-100">
                            <p>
                                <span>Fecha: Viernes 26 de febrero</span> <br>
                                <span>Horario: 09:00 AM  a  4:00 PM</span>
                            </p>
                        </div>
                        <div class="article-plus d-flex">
                            <i class="fa fa-plus-square-o mt-auto"></i>
                        </div>
                    </div>
                    <a href="" class="btn btn-primary">Unirse a sesión</a>
                </div>
                <div class="mb-5">
                    <h3 class="subtitle">Sobre Unidad 1</h3>
                    <div class="d-flex w-100">
                        <div class="w-100">
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliqua erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.  
                            </p>
                        </div>
                        <div class="article-plus d-flex">
                            <i class="fa fa-plus-square-o mt-auto"></i>
                        </div>
                    </div>                                        
                </div>
                <div class="bg-title mb-3">
                    <span>Lorem ipsum dolor sit ame</span>            
                    <a href="" class="text-secondary">Descargar</a>        
                </div>
                <div class="bg-title mb-5">
                    <span>Lorem ipsum dolor sit ame</span>            
                    <a href="" class="text-secondary">Descargar</a>        
                </div>
                <div class="footer">
                    <div class="mb-4">
                        <h3 class="subtitle">Contacto</h3>
                        <p>
                            <span>(502) 2223-2536</span>
                            <span class="pl-3">email@email.com</span>
                        </p>
                    </div>
                </div>                
            </div>            
        </div>
    </div>
</div>
@endsection


@section('footer')
@include('layouts.footer')
@endsection
