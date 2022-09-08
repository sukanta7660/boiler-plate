<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title') || Doctorino</title>
  <link href="{{asset('admin_asset')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="{{asset('admin_asset')}}/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="{{ asset('admin_asset/css/custom.css') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <style>
.dtHorizontalExampleWrapper {
max-width: 600px;
margin: 0 auto;
}
#recordTable th, td {
white-space: nowrap;
}

    .table td, .table th {
        padding: 5px !important;
    }
    .table>:not(caption)>*>* {
    padding: 7px 5px !important;
}
  </style>
  @stack('css')

</head>

<body id="page-top">

  <div id="wrapper">
        @include('shared.admin.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">

        @include('shared.admin.header')

        <div class="container-fluid">

          @yield('content')
          @yield('box')

        </div>

      </div>

      @include('shared.admin.footer')

    </div>

  </div>

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  @include('sweetalert::alert')

  <script src="{{asset('admin_asset')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('admin_asset')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="{{asset('admin_asset')}}/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <!-- Custom scripts for all pages-->
  <script src="{{asset('admin_asset')}}/js/sb-admin-2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
  <script>
      $(document).ready( function () {
        $('#myTable').DataTable();
        $('#myTable').removeClass('dataTable');
        $('#recordTable').removeClass('dataTable');
    });
  </script>
  @stack('js')
</body>

</html>
