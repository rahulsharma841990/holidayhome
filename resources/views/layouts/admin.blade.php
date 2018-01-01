<!DOCTYPE html>
<html>
@include('admin.components.head')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper" id="app">

  @include('admin.components.header')
  <!-- Left side column. contains the logo and sidebar -->
  @include('admin.components.sidebar')

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->
  @include('admin.components.footer')

  @include('admin.components.control-sidebar')
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

  @include('admin.components.scripts')
</body>
</html>
