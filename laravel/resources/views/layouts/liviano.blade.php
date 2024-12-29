
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Web Master César Cancino Zapata | yo@cesarcancino.com" />
        <meta name="keywords" content=""
        />
        <meta name="description" content="" />
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />

        <title> MVP - @yield('title')</title> 
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
        <script src="{{asset('js/modernizr.min.js')}}"></script>
        @stack('css')
    </head>
    <body>

        <!--contenido-->
      @yield('content')
      <!--/contenido-->

       <!-- jQuery  -->
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/popper.min.js') }}"></script><!-- Popper for Bootstrap -->
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('js/waves.js') }}"></script>
      <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
      <script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>

      <script src="{{ asset('plugins/sweet-alert2/sweetalert2.min.js') }}"></script>
      
      <!-- App js -->
      <script src="{{ asset('js/jquery.core.js') }}"></script>
      <script src="{{ asset('js/jquery.app.js') }}"></script>
      <script src="{{ asset('js/funciones.js') }}"></script>
      @stack('scripts')
	</body>
</html>