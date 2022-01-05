@extends('layouts.master')

@section('title')
    home
@endsection

@php
    $histories = [
      "#00A99D",
      "#5CA6BF",
      "#D6495A"
    ];
    $smallhistories = [
      "#00A99D",
      "#5CA6BF",
      "#D6495A",
      "#662D91",
      "#F15A24",
      "#90B753",
      "#031B5E",
      "#A67C52",
      "#F9C50D"
    ];
@endphp

@section('header')
  @include('layouts.header')    
@endsection

@section('content')
<section class="py-5 px-3 hero-search-pan">
  <div class="text-center m-auto body">
    <h2 class="title mb-3">Expo 2021</h2>
    <span class="subtitle px-5 mb-4 d-none d-md-block">
      Encuentra información de tu campus, facultad o carrera de interés, a través de nuestro <br>
      buscador o ingresa a la sección directamente.
    </span>
    <div class="input-group search-input wow animated fadeInDown">
      <div class="input-group-prepend">
        <span class="input-group-text form-control"><i class="fa fa-search"></i></span>
      </div>
      <input type="text" class="form-control" name="search" placeholder="Lorem ipsum dolor sit amet..." >
    </div>
  </div>
</section>
<section class="history-section py-5 vue-content">
  <div class="container">
    <div class="contents_m mb-5">
      <div class="title mb-4">
        <h5>Tus carreras de interés Ver tod</h5>
        <div class="view-more">
          <a href=""><span>Ver todas</span></a>
        </div>
      </div>     
      <flickity class="history-carousel" ref="flickity" :options="flickityOptions">
        @foreach ($histories as $key => $item)
          <div class="col-md-4 mb-3 item carousel-cell">
            {{-- history card item --}}
            <history-card
              :title="'Ingenieria industrial'"
              :description="'Lorem ipsum dolor sit amet, c sed diam nonummy nibh euismod tincidunt ut.'"
              :barcolor="'{!! $item !!}'"
              :classname="'wow animated fadeInUp {{ 'delay-'.$key }}'"
            ></history-card>
            {{-- end history card item --}}
          </div>  
        @endforeach             
      </flickity>
    </div>
    <div class="contents_m">
      <div class="title mb-4">
        <h5>Facultades</h5>
        <div class="view-more">
          <a href=""><span>Ver todas</span></a>
        </div>
      </div>      
      <div class="row">
        <flickity class="history-carousel" ref="flickity" :options="flickityOptions">
        @foreach ($smallhistories as $key => $item)
          @php
              $delay = $key % 3;
          @endphp
          

          <div class="col-md-4 mb-5 carousel-cell">
            {{-- history card item --}}
            <history-card
                :title="'Ingeniería'"
                :barcolor="'{!! $item !!}'"
                :classname="'wow animated fadeInUp {{ 'delay-'.$delay }}'"
                :size="'sm'"
            ></history-card>
            {{-- end history card item --}}
          </div>            
          

          {{-- <div class="col-md-4 mb-5"> --}}
            {{-- history card item --}}
            {{-- <history-card
                :title="'Ingeniería'"
                :barcolor="'{!! $item !!}'"
                :classname="'wow animated fadeInUp {{ 'delay-'.$delay }}'"
                :size="'sm'"
            ></history-card> --}}
          {{-- </div> --}}
        @endforeach
      </flickity>
      </div>
    </div>
  </div>
</section>

<section class="middle-signup-section bg-primary">
  <div class="container">
    <div class="container-big d-flex justify-content-between py-4">
      <div>
        <h3 class="wow animated fadeInLeft">
          ¿Quieres saber tus siguientes pasos?
        </h3>
        <span class="text-description wow animated fadeInLeft delay-2 d-none d-lg-block">Entérate aquí de todo lo que necesitas.</span>
      </div>
      <div class="d-flex">
        <a href="" class="btn btn-signup wow animated fadeInRight text-nowrap">
          Siguientes pasos
        </a>
      </div>
    </div>
  </div>
</section>

<section class="central-section py-5 vue-content" >
  <div class="container">
    <div class="row">
      <div class="col-md-6 mb-5">
        <div class="contents_m mr-md-30">
          <div class="title mb-4">
            <h5>Próximos eventos</h5>
            <div class="view-more">
              <a href=""><span>Ver agenda</span></a>
            </div>
          </div>     
          <div class="comming-event-list  wow animated fadeInLeft">
            <div class="scrollbox" style="max-height: 319px;">

              @for ($i = 0; $i < 4; $i++)
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
      <div class="col-md-6 mb-5">
        <div class="contents_m ml-md-30">
          <div class="title mb-4">
            <h5>Unidades</h5>
            <div class="view-more">
              <a href=""><span>Ver más unidades</span></a>
            </div>
          </div>     
          <div class="unite-list wow animated fadeInRight">
            <div class="scrollbox" style="max-height: 319px;">
              @for ($i = 0; $i < 5; $i++)
              {{-- unite item --}}
              <unite-item
                :title="'Lorem ipsum dolor sit amet...'"
                :description="`
                Lorem ipsum dolor sit amet, c sed diam nonummy nibh euismod 
                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
                enim ad minim veniam.
                `"
                :phone="'(502) 2223-2536'"
                :email="'email@email.com'"
              ></unite-item>
              {{-- end unite item --}}                  
              @endfor              
            </div>
          </div>   
        </div>             
      </div>
    </div>
  </div>
</section>

<section class="history-section vue-content">
  <div class="container">
    <div class="contents_m mb-5">
      <div class="title mb-4">
        <h5>También te podría interesar</h5>
        <div class="view-more">
          <a href=""><span>Ver todas</span></a>
        </div>
      </div>      
      <flickity class="history-carousel" ref="flickity" :options="flickityOptions">
        @foreach ($histories as $key => $item)
          <div class="col-md-4 mb-3 item carousel-cell">
            {{-- history card item --}}
            <history-card
              :title="'Ingenieria industrial'"
              :description="'Lorem ipsum dolor sit amet, c sed diam nonummy nibh euismod tincidunt ut.'"
              :barcolor="'{!! $item !!}'"
              :classname="'wow animated fadeInUp {{ 'delay-'.$key }}'"
            ></history-card>
            {{-- end history card item --}}
          </div>  
        @endforeach             
      </flickity>
    </div>
  </div>
</section>
@endsection


@section('footer')
  @include('layouts.footer')    
@endsection

@section('script')
<script>
  // $(document).ready(function() {      
  //     $('.history-card-carousel').owlCarousel({
  //         items: 1,
  //         loop: true,
  //         navigation: false,
  //         dots: false,
  //         // autoplayTimeout: 3000,
  //         autoplay: true
  //     });
  // });
</script>    
@endsection