<!DOCTYPE html>
<html lang="en" class="full-height">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Material Design Bootstrap</title>

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
                            <a class="nav-link" href="{{ URL::to('/') }}/candidates?access_token={{ $_GET['access_token'] }}">Candidates</a>
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
        <footer class="page-footer center-on-small-only elegant-color-dark">
    
            <!--Footer Links-->
            <div class="container-fluid">
                <div class="row">
    
                    <!--First column-->
                    <div class="col-lg-3 col-md-6 ml-auto">
                        <h5 class="titles font-bold mt-3 mb-4">ABOUT MATERIAL DESIGN</h5>
                        <p>Material Design (codenamed Quantum Paper) is a design language developed by Google. </p>
    
                        <p>Material Design for Bootstrap (MDB) is a powerful Material Design UI KIT for most popular HTML, CSS, and JS framework - Bootstrap.</p>
                    </div>
                    <!--/.First column-->
    
                    <hr class="w-100 clearfix d-sm-none">
    
                    <!--Second column-->
                    <div class="col-lg-2 col-md-6 ml-auto">
                        <h5 class="title font-bold mt-3 mb-4">Our Projects</h5>
                        <ul>
                            <li><a href="#!">Jeffs Bike Shop</a></li>
                            <li><a href="#!">Main Street Restaurant</a></li>
                            <li><a href="#!">Connect Groceries</a></li>
                            <li><a href="#!">White-To-Black Coffe Shop</a></li>
                        </ul>
                    </div>
                    <!--/.Second column-->
    
                    <hr class="w-100 clearfix d-sm-none">
    
                    <!--Third column-->
                    <div class="col-lg-2 col-md-6 ml-auto">
                        <h5 class="title font-bold mt-3 mb-4">Useful Resources</h5>
                        <ul>
                            <li><a href="#!">2016 Advertising Report</a></li>
                            <li><a href="#!">Best NY Agencies</a></li>
                            <li><a href="#!">Trends for 2017</a></li>
                            <li><a href="#!">World Advertisement Report</a></li>
                        </ul>
                    </div>
                    <!--/.Third column-->
    
                    <hr class="w-100 clearfix d-sm-none">
    
                    <!--Fourth column-->
                    <div class="col-lg-2 col-md-6 ml-auto">
                        <h5 class="title font-bold mt-3 mb-4">Find us on</h5>
                        <ul>
                            <li><a href="#!">Facebook</a></li>
                            <li><a href="#!">Twitter</a></li>
                            <li><a href="#!">LinkedIn</a></li>
                            <li><a href="#!">Behance</a></li>
                        </ul>
                    </div>
                    <!--/.Fourth column-->
    
                </div>
            </div>
            <!--/.Footer Links-->
    
            <hr>
    
            <!--Call to action-->
            <div class="call-to-action">
                <h4 class="mb-5">Material Design for Bootstrap</h4>
                <ul>
                    <li>
                        <h5>Get our UI KIT for free</h5></li>
                    <li><a target="_blank" href="https://mdbootstrap.com/getting-started/" class="btn btn-info" rel="nofollow">Sign up!</a></li>
                    <li><a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-default" rel="nofollow">Learn more</a></li>
                </ul>
            </div>
            <!--/.Call to action-->
    
            <!--Copyright-->
            <div class="footer-copyright">
                <div class="container-fluid">
                    © 2015 Copyright: <a href="https://www.MDBootstrap.com"> MDBootstrap.com </a>
    
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