@extends('layouts.master')

@section('title')
    event completed    
@endsection

@section('content')
<section class="eventcomp-section no-header py-5 px-md-5 px-3 vue-content">
    <div class="row my-auto">
        <div class="col-12 col-sm-12 col-md-6 d-flex py-5 align-items-center">
            <div class="w-100 thanks-wrapper">
                <div class="w-100 mb-5">
                    <img width="300" src="{{ asset('img/logo-2.png') }}" alt="Logo">
                </div> 
                <h2 class="w-100 title">Este evento ya terminó</h2>
                <p class="w-100 ">Contáctanos a: <br class="d-block d-lg-none"> {!! $session->agenda_email !!} - tel: +{!! $session->agenda_phone !!}</p>
                <p class="w-100 mb-3">O ve el contenido que preparamos para ti.</p>
                <div class="w-100">
                    <a href="{{ url('home') }}" class="btn btn-primary">Ir a contenido</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6">
            <div class="w-100">
                <h5 class="px-3">Mi agenda</h5>
            <div class="comming-event-list ss">
                <div class="scrollbox" style="max-height: 650px;">
                    @foreach ($event_list as $event)
                        {{-- comming event item --}}
                        <event-item 
                            :name="'{!! $event->title !!}'" 
                            :description="'{{ $event->description }}'" 
                            :date="'{{ date("d M", strtotime($event->start_time)) }}'" 
                            :time="'{{ date("g:i A", strtotime($event->start_time)) }}'"
                            {{-- :plusbutton="true" --}}
                            :eventended="true"
                        ></event-item>
                        {{-- end comming event item --}} 
                    @endforeach
                    @for ($i = 0; $i < 6; $i++)
                        {{-- comming event item --}}
                        <event-item 
                            :name="'Lorem ipsum dolor sit amet...'" 
                            :description="`Lorem ipsum dolor sit amet, c sed diam nonummy nibh euismod 
                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
                            enim ad minim veniam.`" 
                            :date="'18 Nov'" 
                            :time="'10:00 AM'"
                            {{-- :plusbutton="false" --}}
                            :eventended="true"
                        ></event-item>
                        {{-- end comming event item --}}
                    @endfor       
                </div>
            </div>   
            </div>
        </div>
    </div>
</section>
@endsection
