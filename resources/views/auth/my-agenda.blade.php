@extends('layouts.master')

@section('title')
    my agenda    
@endsection

@section('content')
<section class="agenda-section no-header vue-content">
    <div class="w-100 p-3 px-md-5">
        <div class="d-flex py-5 head">
            <div class="m-auto text-center container-size-md">
                <h2 class="title animated fadeIn">Mi agenda</h2>
                <p>Ve todos los eventos que tendremos a lo largo de la Expo y <span class="text-secondary">selecciona los que sean de tu interés</span>, para recibir recordatorios a tu email y celular.</p>
            </div>
        </div>
        <div class="body">
            <div class="comming-event-list">
                <div class="scrollbox" style="max-height: 433px;">
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
        <div class="footer">
            <div class="pt-4 text-center text-lg-end">
                <a href="{{ url('welcome') }}" class="btn btn-primary animated fadeInRight">Siguiente</a>
            </div>
        </div>
    </div>
</section>
@endsection
