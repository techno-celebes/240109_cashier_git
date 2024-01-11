<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Favicons -->
    <link href="../../theme/home/assets/img/favicon.png" rel="icon">
    <link href="../../theme/home/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../theme/home/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../../theme/home/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../theme/home/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../theme/home/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../theme/home/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../theme/home/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="../../theme/home/style.css" rel="stylesheet">
    <link href="../../theme/home/assets/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../../theme/home/assets/css/style.css" rel="stylesheet">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../theme/home/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../../theme/home/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../theme/home/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../../theme/home/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../theme/home/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../theme/home/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../theme/home/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../../theme/home/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="../../public/theme/home/style.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../../theme/home/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>
        @include('master.layout_panel.header_admin')
        @include('master.layout_panel.sidebar_admin')
        @yield('content')
        @include('master.layout_panel.footer_admin')

    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../theme/home/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../../theme/home/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="../../theme/home/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../../theme/home/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../../theme/home/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="../../theme/home/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../../theme/home/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../../theme/home/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../../theme/home/plugins/moment/moment.min.js"></script>
    <script src="../../theme/home/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../../theme/home/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../../theme/home/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../../theme/home/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../theme/home/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../theme/home/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../../theme/home/dist/js/pages/dashboard.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Vendor JS Files -->
    <script src="theme/home/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../../theme/home/assets/vendor/aos/aos.js"></script>
    <script src="../../theme/home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../theme/home/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../../theme/home/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../../theme/home/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../../theme/home/assets/vendor/php-email-form/validate.js"></script>
    <!-- Template Main JS File -->
    <script src="../../theme/home/assets/js/main.js"></script>
    <script src="../../theme/home/main.js"></script>
</body>

</html>