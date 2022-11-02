<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Hr-Management|@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{  asset('adminAsset') }}/assets/images/favicon.ico">

    <!-- Daterangepicker css -->
    <link rel="stylesheet" href="{{  asset('adminAsset') }}/assets/vendor/daterangepicker/daterangepicker.css">

    <!-- Vector Map css -->
    <link rel="stylesheet" href="{{  asset('adminAsset') }}/assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css">

    <!-- Theme Config Js -->
    <script src="{{  asset('adminAsset') }}/assets/js/hyper-config.js"></script>

    <!-- App css -->
    <link href="{{  asset('adminAsset') }}/assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{  asset('adminAsset') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- custom cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <!-- custom cdn -->
    <!-- data table -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <!-- data table -->

</head>

<body>
<!-- Begin page -->
<div class="wrapper">


    <!-- ========== Topbar Start ========== -->
   @include('admin.include.header')
    <!-- ========== Topbar End ========== -->

    <!-- ========== Left Sidebar Start ========== -->

   @include('admin.include.left-sidebar')
    <!-- ========== Left Sidebar End ========== -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- content -->
        <div class="content">

         @yield('content')

        </div>
        <!-- content -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->

<!-- Theme Settings -->

<!-- jQuery -->
<script src="{{  asset('adminAsset') }}/assets/js/jquery-3.6.1.min.js"></script>
<!-- end jquery -->

<!-- Vendor js -->
<script src="{{  asset('adminAsset') }}/assets/js/vendor.min.js"></script>

<!-- Daterangepicker js -->
<script src="{{  asset('adminAsset') }}/assets/vendor/daterangepicker/moment.min.js"></script>
<script src="{{  asset('adminAsset') }}/assets/vendor/daterangepicker/daterangepicker.js"></script>

<!-- Apex Charts js -->
<script src="{{  asset('adminAsset') }}/assets/vendor/apexcharts/apexcharts.min.js"></script>

<!-- Vector Map js -->
<script src="{{  asset('adminAsset') }}/assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{  asset('adminAsset') }}/assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

<!-- Dashboard App js -->
<script src="{{  asset('adminAsset') }}/assets/js/pages/demo.dashboard.js"></script>

<!-- App js -->
<script src="{{  asset('adminAsset') }}/assets/Fjs/app.js"></script>

<!-- custom cdn -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<!-- custom cdn -->

<!-- data table -->
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable({
            scrollX: true,
        });
    });
</script>
<!-- data table -->

</body>
</html>
