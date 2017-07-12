<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('pagina/css/bootstrap.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('pagina/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="{{asset('pagina/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('pagina/css/style-responsive.css')}}" rel="stylesheet">
    <script src="{{asset('pagina/js/chart-master/Chart.js')}}"></script>
  </head>

  <body>
    @yield('menu')
    @yield('contenido')
	  

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{asset('pagina/js/jquery.js')}}"></script>
    <script src="{{asset('pagina/js/bootstrap.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{asset('pagina/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{asset('pagina/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('pagina/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <script src="{{asset('pagina/js/jquery.sparkline.js')}}"></script>

    <!--common script for all pages-->
    <script src="{{asset('pagina/js/common-scripts.js')}}"></script>

    <!--script for this page-->
    <script src="{{asset('pagina/js/sparkline-chart.js')}}"></script>    
    
    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="{{asset('pagina/js/jquery.backstretch.min.js')}}"></script>
    <script>
        $.backstretch("{{asset('pagina/img/login.jpg')}}", {speed: 500});
    </script>


  </body>
</html>
