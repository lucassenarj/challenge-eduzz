<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Eduzz Challenge - Lucas Sena</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="{{ URL::asset('css/mdb.min.css') }}" rel="stylesheet">

    <!-- Template styles -->
    <style>
        /* TEMPLATE STYLES */
        .flex-center {
            color: #fff;
        }
        .intro-1 {
            background: url("https://mdbootstrap.com/img/Photos/Horizontal/Work/full page/img%20(2).jpg")no-repeat center center;
            background-size: cover;
        }
        .navbar .btn-group .dropdown-menu a:hover {
            color: #000 !important;
        }

        .navbar .btn-group .dropdown-menu a:active {
            color: #fff !important;
        }

    </style>

</head>

<body>

    <header>

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark elegant-color-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ URL::to('/') }}/home?access_token={{ $_GET['access_token'] }}">Eduzz Challenge</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ URL::to('/') }}/home?access_token={{ $_GET['access_token'] }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ URL::to('/') }}/candidate?access_token={{ $_GET['access_token'] }}">Add Candidate</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <!-- Main container-->
    <div class="container">
        @yield('content')
    </div>
    <!--/ Main container-->
    
    
    <!--Footer-->
    <div style="clear:both;"></div>
    <footer class="page-footer center-on-small-only elegant-color-dark">
        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2017 Copyright: <a href="https://github.com/lucassenarj">Lucas Sena</a> | Theme: <a href="https://www.MDBootstrap.com">Material Design for Bootstrap</a>
            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>

    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="{{ URL::asset('js/popper.min.js') }}"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ URL::asset('js/mdb.min.js') }}"></script>

    <!-- Animations init-->
    <script>
        new WOW().init();
    </script>


</body>

</html>