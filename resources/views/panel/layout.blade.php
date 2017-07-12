<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, panel, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - FREE Bootstrap Admin panel</title>

    <!-- Bootstrap core CSS -->
      <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-+ENW/yibaokMnme+vBLnHMphUYxHs34h9lpdbSLuAwGkOKFRl4C34WkjazBtb7eT" crossorigin="anonymous">
    <!--external css-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="stylesheet" type="text/css" href="{{asset('pagina/css/zabuto_calendar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('pagina/js/gritter/css/jquery.gritter.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('pagina/lineicons/style.css')}}">    
    
    <!-- Custom styles for this panel -->
    <link href="{{asset('pagina/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('pagina/css/style-responsive.css')}}" rel="stylesheet">

    <script src="{{asset('pagina/js/chart-master/Chart.js')}}"></script>
    
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      @include('panel.partes.nav')
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      @include('panel.partes.menu')
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            @yield('contenido')
          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      @include('panel.partes.footer')
      <!--footer end-->
  </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="{{asset('pagina/js/bootstrap.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{asset('pagina/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{asset('pagina/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('pagina/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <script src="{{asset('pagina/js/jquery.sparkline.js')}}"></script>
    <!--common script for all pages-->
    <script src="{{asset('pagina/js/common-scripts.js')}}"></script>
    <script type="text/javascript" src="{{asset('pagina/js/gritter/js/jquery.gritter.js')}}"></script>
    <script type="text/javascript" src="{{asset('pagina/js/gritter-conf.js')}}"></script>
    <!--script for this page-->
    <script src="{{asset('pagina/js/sparkline-chart.js')}}"></script>    
	  <script src="{{asset('pagina/js/zabuto_calendar.js')}}"></script>	
    <script src="{{asset('js/main.js')}}"></script> 
		
		 @if(\Session::has('message'))
     @include('panel.alerts.message')
 @endif  
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  </body>
</html>
