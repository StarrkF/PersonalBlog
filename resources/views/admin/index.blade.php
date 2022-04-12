<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
  <!--favicon-->
  <link rel="icon" href="{{ asset('admin/assets/images/favicon.ico') }}" type="image/x-icon">
  <!-- Vector CSS -->
  {{-- <link href="{{ asset('admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/> --}}
  <!-- simplebar CSS-->
  <link href="{{ asset('admin/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{ asset('admin/assets/css/animate.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ asset('admin/assets/css/icons.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{ asset('admin/assets/css/sidebar-menu.css') }}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{ asset('admin/assets/css/app-style.css') }}" rel="stylesheet"/>

  <link href="{{ asset('admin/assets/css/tool.css') }}" rel="stylesheet"/>
  @yield('css')

</head>

<body class="bg-theme bg-theme2">

<!-- Start wrapper-->
 <div id="wrapper">

@include('admin.plugins.menu')

@include('admin.plugins.header')

  <div class="clearfix"></div>
  <div class="content-wrapper">
    <div class="container-fluid">
      @yield('content')
		  <div class="overlay toggle-menu"></div>
    </div>
  </div>
  <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>

	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2018 Dashtreme Admin
        </div>
      </div>
  </footer>
  @include('admin.plugins.color-switcher')
  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>

 <!-- simplebar js -->
  <script src="{{ asset('admin/assets/plugins/simplebar/js/simplebar.js') }}"></script>
  <!-- sidebar-menu js -->
  <script src="{{ asset('admin/assets/js/sidebar-menu.js') }}"></script>
  <!-- Custom scripts -->
  <script src="{{ asset('admin/assets/js/app-script.js') }}"></script>
  <!-- Chart js -->

  {{-- <script src="{{ asset('admin/assets/plugins/Chart.js/Chart.min.js') }}"></script> --}}

  <!-- Index js -->
  <script src="{{ asset('admin/assets/js/index.js') }}"></script>

  <script src="{{ asset('admin/assets/js/tool.js') }}"></script>

  <script src='https://cdn.tiny.cloud/1/vdqx2klew412up5bcbpwivg1th6nrh3murc6maz8bukgos4v/tinymce/5/tinymce.min.js' referrerpolicy="origin">
	</script>

<script>
tinymce.init({
  selector:'textarea',
  height: 600,
  });
</script>
  @yield('js')


</body>
</html>
