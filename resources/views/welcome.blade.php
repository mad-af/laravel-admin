<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <script src="https://kit.fontawesome.com/2c968ed82e.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ URL::asset('sbadmin/css/sb-admin-2.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">
  <div id="wrapper">
    <x-sidebar />
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <x-navbar /> 
        @yield('continer')
      </div>
      <x-footer />
    </div>
  </div>

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <x-modal-logout/>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ URL::asset('sbadmin/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{ URL::asset('sbadmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <!-- Custom scripts for all pages-->
  <script src="{{ URL::asset('sbadmin/js/sb-admin-2.min.js') }}"></script>
  <!-- Page level plugins -->
  <script src="{{ URL::asset('sbadmin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ URL::asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ URL::asset('sbadmin/vendor/chart.js/Chart.min.js') }}"></script>
  <!-- Page level custom scripts -->
  <script src="{{ URL::asset('sbadmin/js/demo/chart-area-demo.js') }}"></script>
  <script src="{{ URL::asset('sbadmin/js/demo/chart-pie-demo.js') }}"></script>
</body>

</html>
