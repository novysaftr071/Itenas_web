<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
    @yield('style')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .warna {
            background-color: rgb(255, 174, 0);
        }
    </style>
    <title>Itenas</title>
</head>

<body>

    @include('layouts.includes.navbars')

    <section class="content">
        <div class="container-fluid">
            @yield('content')
        </div><!-- /.container-fluid -->
    </section>

    <!-- <center class="text-3xl">
        <div class="container">
            <table class="mt-5">
                <tbody>
                    <tr>
                        <th><u>Dosen</u></th>
                    </tr>

                    <tr>
                        <td><i class="bi bi-person-circle"></i> Winaz</td>
                    </tr>

                    <tr>
                        <th><u>Mahasiswa</u></th>
                    </tr>

                    <tr>
                        <td><i class="bi bi-person-circle"></i> NRP MAHASISWA</td>
                    </tr>

                    <tr>
                        <td><i class="bi bi-person-circle"></i> NRP MAHASISWA</td>

                    </tr>

                    <tr>
                        <td><i class="bi bi-person-circle"></i> NRP MAHASISWA</td>
                    </tr>
                </tbody>

        </div>
    </center> -->

</body>

</html>
