<!DOCTYPE html>
<html lang="vi">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">

<base href="{{ asset('') }}">


<!-- Custom fonts for this template-->
<link href="acsset/Admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


<!-- Custom styles for this template-->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="acsset/Admin/css/sb-admin-2.min.css" rel="stylesheet">
<link href="acsset/Admin/css/fonts.css" rel="stylesheet">
<link href="acsset/Admin/css/toastr.css" rel="stylesheet">
<script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>


</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

<!-- Sidebar -->
@include('admin.layouts.menu')
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column" style="width:100%;">

    <!-- Main Content -->
    <div id="content">

    <!-- Topbar -->
    @include('admin.layouts.header')
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid" style="clear:both;">

        <!-- Page Heading -->
        @yield('content')

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    @include('admin.layouts.footer')

</body>

</html>
