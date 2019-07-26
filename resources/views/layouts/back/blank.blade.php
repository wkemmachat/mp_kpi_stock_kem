<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
    @yield('title')
  </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminlte/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('adminlte/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{asset('adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminlte/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('adminlte/dist/css/skins/_all-skins.min.css')}}">

  <link rel="stylesheet" href="{{ asset('toastr.min.css') }}" type="text/css" />

  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('adminlte/bower_components/select2/dist/css/select2.min.css')}}">
  @yield('css')

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">



    <!-- jQuery 3 -->
    <script src="{{asset('adminlte/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- SlimScroll -->
    <script src="{{asset('adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('adminlte/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <!-- ChartJS -->
    <script src="{{asset('adminlte/bower_components/chart.js/Chart.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
    <!-- bootstrap datepicker -->
    <script src="{{asset('adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('adminlte/dist/js/demo.js')}}"></script>
    <script src="{{asset('adminlte/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
    <!-- InputMask -->
    <script src="{{asset('adminlte/plugins/input-mask/jquery.inputmask.js')}}"></script>
    <script src="{{asset('adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
    <script src="{{asset('adminlte/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>

    <script>

    $(document).ready(function () {
        $('.sidebar-menu').tree()
        $('.select2').select2()

        $('.datepicker').datepicker({
            format: 'dd-mm-yyyy',
            autoclose: true
        })

        $('[data-mask]').inputmask()


        $(".plus_and_minus").inputFilter(function(value) {
            return /^-?\d*$/.test(value); });

        $(".plus_only").inputFilter(function(value) {
            return /^\d*$/.test(value); });

    })

    (function($) {
        $.fn.inputFilter = function(inputFilter) {
          return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
            if (inputFilter(this.value)) {
              this.oldValue = this.value;
              this.oldSelectionStart = this.selectionStart;
              this.oldSelectionEnd = this.selectionEnd;
            } else if (this.hasOwnProperty("oldValue")) {
              this.value = this.oldValue;
              this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
            }
          });
        };
      }(jQuery));


    </script>

    <script src="{{asset('toastr.min.js')}}"></script>






</head>
<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
<!-- Site wrapper -->
<div class="wrapper">



  <!-- =============================================== -->
  @include('layouts.back.header')

  <!-- Left side column. contains the sidebar -->
  @include('layouts.back.sidebar')


  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  @yield('content')

  <!-- /.content-wrapper -->

  @include('layouts.back.footer')


  <!-- Control Sidebar -->
  @include('layouts.back.controlsidebar')

</div>
<!-- ./wrapper -->

@yield('js')

</body>
</html>
