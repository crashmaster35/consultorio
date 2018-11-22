<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Consultorio Dental">
    <meta name="author" content="Bruno Chavez">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>{{ config('app.name', 'Consultorio Dental') }} - @yield('title')</title>

    <!-- Custom CSS -->    
    {{ Html::style('/assets/css/bootstrap.min.css')}}
    {{ Html::style('/assets/css/bootstrap-responsive.min.css')}}
    {{ Html::style('/assets/css/fullcalendar.css')}}
    {{ Html::style('/assets/css/matrix-style.css')}}
    {{ Html::style('/assets/css/matrix-media.css')}}
    {{ Html::style('/assets/libs/font-awesome/css/font-awesome.css')}}
    {{ Html::style('/assets/css/jquery.gritter.css')}}
    {{ Html::style('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css') }}
    {{ Html::style('//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css')}}
    
    {{ Html::style('http://fonts.googleapis.com/css?family=Open+Sans:400,700,800')}}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    @yield('styles')
</head>
<body>
    @include('admin.layouts.header')
    @include('admin.layouts.topmenu')
    @include('admin.layouts.searchbar')
    @include('admin.layouts.sidemenu')

    @yield('content')

    @include('admin.layouts.footer')
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    {{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}
    {{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js')}}
    {{ Html::script('/assets/js/bootstrap.js')}}
    {{ Html::script('/assets/js/excanvas.min.js')}}
    {{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.min.js')}}
    {{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.resize.js')}}
    {{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/flot.tooltip/0.9.0/jquery.flot.tooltip.min.js')}}
    {{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/peity/3.3.0/jquery.peity.min.js')}}
    {{ Html::script('/assets/js/fullcalendar.min.js')}}
    {{ Html::script('/assets/js/matrix.js')}}
    {{ Html::script('/assets/js/matrix.dashboard.js')}}
    {{ Html::script('/assets/js/jquery.gritter.min.js')}}
    {{ Html::script('/assets/js/matrix.interface.js')}}
    {{ Html::script('/assets/js/matrix.chat.js')}}
    {{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.18.0/jquery.validate.min.js')}}
    {{ Html::script('/assets/js/matrix.form_validation.js')}}
    {{ Html::script('/assets/js/jquery.wizard.js')}}
    {{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/Uniform.js/4.2.2/js/jquery.uniform.standalone.js')}}
    {{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js')}}
    {{ Html::script('/assets/js/matrix.popover.js')}}
    {{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js')}}

    @yield('scripts')

    <script type="text/javascript">
      // This function is called from the pop-up menus to transfer to
      // a different page. Ignore if the value returned is a null string:
      function goPage (newURL) {

          // if url is empty, skip the menu dividers and reset the menu selection to default
          if (newURL != "") {
          
              // if url is "-", it is this page -- reset the menu:
              if (newURL == "-" ) {
                  resetMenu();            
              } 
              // else, send page to designated URL            
              else {  
                document.location.href = newURL;
              }
          }
      }

    // resets the menu selection upon entry to this page:
    function resetMenu() {
       document.gomenu.selector.selectedIndex = 2;
    }
    </script>

</body>
</html>