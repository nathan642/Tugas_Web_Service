<?php
session_start();
include_once 'controller/SiswaController.php';
include_once 'controller/SiswaUpdateController.php';
include_once 'util/ApiService.php';
include_once 'util/Utility.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Nathanael Liman (1872014)">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
          integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css"
          integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
            integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
            crossorigin="anonymous"></script>
    <title>Client</title>
    <!--script untuk table-->
    <link rel="stylesheet" type="text/css"
          href="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.21/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.21/datatables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>

    <link rel="stylesheet" href="styles/login_style.css" type="text/css">
    <link rel="stylesheet" href="styles/style.css" type="text/css">
    <script src="scripts/command_script.js"></script>

</head>
<body>
<div class="container">
    <div class="jumbotron text-center header ">
        <img src="images/marnat.jpg" class="rounded" alt="Maranatha" width="500px">
    </div>
    <br>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Brand/logo -->
            <a class="navbar-brand size-navbar" href="index.php">
                <img src="images/logo.jpeg" alt="logo" style="width:100px;">
            </a>
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="?menu=fac">Siswa</a>
                </li>
            </ul>
        </nav>
        <div>
            <?php
            $menu = filter_input(INPUT_GET, 'menu');
            switch ($menu) {
                case 'fac':
                    $siswaController= new SiswaController();
                    $siswaController->index();
                    break;
                case 'facu':
                    $siswaUpdateController= new SiswaUpdateController();
                    $siswaUpdateController->index();
                    break;
                default:
                    include_once 'pages/siswa_page.php';
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>