<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Calculate your working days">
        <meta name="keywords" content="working days,dashboard">
        <meta name="author" content="wdays">
        <!-- Remove Tap Highlight on Windows Phone IE -->
        <meta name="msapplication-tap-highlight" content="no"/>
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!-- Title -->
        <title>Wdays</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
        <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/plugins/font-awesome/css/all.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/plugins/waves/waves.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/plugins/nvd3/nv.d3.min.css')}}" rel="stylesheet">


        <!-- Theme Styles -->
        <link href="{{asset('assets/css/alpha.min.cs')}}s" rel="stylesheet">
        <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="loader">
            <div class="spinner-border" role="status" style="color: #249cf2 !important;">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <div class="alpha-app">
            <div class="page-header">
                <nav class="navbar navbar-expand primary" style="background-color: #249cf2 !important;">
                    <section class="material-design-hamburger navigation-toggle">
                        <a href="javascript:void(0)" data-activates="slide-out" class="button-collapse material-design-hamburger__icon">
                            <span class="material-design-hamburger__layer"></span>
                        </a>
                    </section>
                    <a class="navbar-brand" href="#">Wdays</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
            </div>
            <div class="page-sidebar">
                <div class="page-sidebar-inner">
                    <div class="page-sidebar-profile">
                        <div class="sidebar-profile-image">
                            <img src="{{asset('assets/images/avatars/avatar1.png')}}">
                        </div>
                        <div class="sidebar-profile-info">
                            <a>
                                <p>{{Auth::user()->name}}</p>
                                <span>{{Auth::user()->email}}</span>
                            </a>
                        </div>
                    </div>
                    <div class="page-sidebar-menu">
                        <div class="sidebar-accordion-menu">
                            <ul class="sidebar-menu list-unstyled">
                                @include('layouts.sidebar')
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-footer">
                        <p class="copyright">Wdays © 2020</p>
                        <a href="#!" style="color: #249cf2 !important;">Privacy</a> &amp; <a href="#!" style="color: #249cf2 !important;">Terms</a>
                    </div>
                </div>
            </div><!-- Left Sidebar -->
            <div class="page-content">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            @yield('title')
                            {{-- <h2 class="page-title">Dashboard</h2> --}}
                            {{-- <a href="#" class="btn btn-text-secondary float-right">Get Info</a> --}}
                            {{-- <a href="#" class="btn btn-text-danger float-right m-r-sm">Print</a> --}}
                        </div>
                    </div>
                    @yield('content')
                </div>

            </div><!-- Page Content -->
        </div><!-- App Container -->

        <!-- Javascripts -->
        <script src="{{asset('assets/plugins/jquery/jquery-3.4.1.min.j')}}s"></script>
        <script src="{{asset('assets/plugins/bootstrap/popper.min.js')}}"></script>
        <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/plugins/waves/waves.min.js')}}"></script>
        <script src="{{asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('assets/plugins/d3/d3.min.js')}}"></script>
        <script src="{{asset('assets/plugins/nvd3/nv.d3.min.js')}}"></script>
        <script src="{{asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('assets/plugins/apexcharts/dist/apexcharts.min.js')}}"></script>
        <script src="{{asset('assets/plugins/flot/jquery.flot.min.js')}}"></script>
        <script src="{{asset('assets/plugins/flot/jquery.flot.time.min.js')}}"></script>
        <script src="{{asset('assets/plugins/flot/jquery.flot.symbol.min.js')}}"></script>
        <script src="{{asset('assets/plugins/flot/jquery.flot.resize.min.js')}}"></script>
        <script src="{{asset('assets/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{asset('assets/js/alpha.min.js')}}"></script>
        <script src="{{asset('assets/js/pages/dashboard.js')}}"></script>
    </body>
</html>
