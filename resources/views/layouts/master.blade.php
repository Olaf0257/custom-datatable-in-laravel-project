<!DOCTYPE html>
<html lang="en">
  <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags-->
    <!-- Title-->
    <title>
        Bago | @yield('title')
    </title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">

    {{-- library --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <!-- Core Stylesheet-->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">    
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.1.1/css/dataTables.dateTime.min.css">
    <link rel="stylesheet" href="https://editor.datatables.net/extensions/Editor/css/editor.dataTables.min.css"> -->
    <link rel="stylesheet" href="{{ asset('js/DataTables/datatables.css') }}">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/global.js') }}"></script>
  </head>
  <body>
    <!-- Preloader-->
    <div class="preloader" id="preloader" style="display: none;">
      <div class="spinner-grow text-light" role="status"><span class="sr-only">Loading...</span></div>
    </div>
    <!-- Header Area-->
    @yield('header')

    {{-- Page Content Wrapper --}}
    <div class="content-wrapper animated fadeIn" id="content_wrapper">
        @yield('content')
        <!-- Footer Area-->
        <!-- @yield('footer') -->
    </div>    
    <!-- All JavaScript Files-->    
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>    
    <script src="{{ asset('js/default/classy-nav.min.js') }}"></script>
    <!-- <script src="{{ asset('js/waypoints.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/jquery.easing.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/default/jquery.scrollup.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/owl.carousel.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/default/isotope.pkgd.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/jquery.animatedheadline.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/jquery.counterup.min.js') }}"></script> -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!-- <script src="{{ asset('js/jarallax.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/jarallax-video.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/default/cookiealert.js') }}"></script> -->
    <!-- <script src="{{ asset('js/default/jquery.passwordstrength.js') }}"></script> -->
    <!-- <script src="{{ asset('js/default/mail.js') }}"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.27.0/slimselect.min.js"></script>     -->
    <script src="{{ asset('js/default/active.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
      $(function() {      
          $('.slim-select').each(function() {
              new SlimSelect({
                  select: this
              });
          });
      });
    </script>

    @yield('script')
  </body>
</html>