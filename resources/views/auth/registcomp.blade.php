@extends('layouts.master')

@section('title')
    regist completed  
@endsection

@php
    $MONTH = [
        '',
        'enero',
        'febrero',
        'marzo',
        'abril',
        'Mayo',
        'junio',
        'julio',
        'agosto',
        'septiembre',
        'octubre',
        'noviembre',
        'diciembre'
    ];
    $now = \Carbon\Carbon::now();
    $start_time = \Carbon\Carbon::create($event->start_time);   
    $left_seconds = $now->diffInSeconds($start_time);
    // dd($start_time->format('g:i A'));
@endphp

@section('content')
<section class="registcomp-section no-header py-5 px-md-5 px-3 vue-content">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 d-flex py-5 align-items-center">
            <div class="w-100 thanks-wrapper">
                <div class="w-100 mb-3 mb-lg-5">
                    <a href="{{ url('/') }}">
                        <img width="300" src="{{ asset('img/logo-2.png') }}" alt="Logo">
                    </a>
                </div> 
                <h2 class="w-100 title">¡Gracias por registrarte!</h2>
                <p class="w-100 mb-3 subtitle">Este evento empieza el {!! $start_time->day !!} de {!! $MONTH[$start_time->month] !!} {!! $start_time->year !!} a las {!! $start_time->format('g:i A') !!}</p>
                {{-- countdown --}}
                <p class="w-100 mb-3 mb-lg-5 time">
                    <span id="evt_left_hours">00</span>
                    <span class="time-flicker">:</span>
                    <span id="evt_left_minutes">00</span>
                    <span class="time-flicker">:</span>
                    <span id="evt_left_seconds">00</span>
                </p>
                {{-- end countdown --}}
                <p>Ve todos los eventos que tendremos a lo largo de la Expo y <span class="text-secondary"> selecciona los que sean de tu interés</span>, para recibir recordatorios a tu email y celular.</p>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6">
            <div class="w-100">
                <h5 class="px-3">Mi agenda</h5>
            <div class="comming-event-list ss">
                <div class="scrollbox" style="max-height: 650px;">
                    @for ($i = 0; $i < 6; $i++)
                        {{-- comming event item --}}
                        <event-item 
                            :name="'Lorem ipsum dolor sit amet...'" 
                            :description="`Lorem ipsum dolor sit amet, c sed diam nonummy nibh euismod 
                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
                            enim ad minim veniam.`" 
                            :date="'18 Nov'" 
                            :time="'10:00 AM'"
                            :interested="true"
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

@section('script')
<script>
    let left_seconds = "{{ $left_seconds }}";

    let lefttime_minute_interval = setInterval(() => {
        if(left_seconds % 2 == 0) {
            $('.time-flicker').css('color', "var(--secondary-color)");
        } else {
            $('.time-flicker').css('color', "transparent");
        }
        const { days, hours, minutes, seconds } = getDateTimeAttrFromSeconds(left_seconds);
        $('#evt_left_hours').text(hours);
        $('#evt_left_minutes').text(minutes);
        $('#evt_left_seconds').text(seconds);
        left_seconds --;      
    }, 1000);
</script>
@endsection
