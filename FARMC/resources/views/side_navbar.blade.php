<!DOCTYPE html>
<html lang="en">

<head>
    <title>Side and Navbar | BFAR - FARMC</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/themify-icons/themify-icons.css') }}">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/icofont/css/icofont.css') }}">

    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/icon/simple-line-icons/css/simple-line-icons.css') }}">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">

    <!-- Chartlist chart css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/chartist/dist/chartist.css') }}" type="text/css"
        media="all">

    <!-- Weather css -->
    <link href="{{ asset('assets/css/svg-weather.css') }}" rel="stylesheet">


    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">


</head>

<body class="sidebar-mini fixed">
    <div class="loader-bg">
        <div class="loader-bar">
        </div>
    </div>
    <div class="wrapper">
        <!-- Navbar-->
        <header class="main-header-top hidden-print">
            <a href="index.html" class="logo"><img class="img-fluid able-logo"
                    src="{{ asset('assets/images/Logo_changed.png') }}"
                    style="width:280px; padding-top:5px; padding-left:20px" alt="Theme-logo"></a>
            <nav class="navbar navbar-static-top">
                <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>


                <!-- Navbar Right Menu-->
                <div class="navbar-custom-menu f-right">
                    <ul class="top-nav">


                        </li>
                        <!-- window screen -->
                        <li class="pc-rheader-submenu">
                            <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                                <i class="icon-size-fullscreen"></i>
                            </a>

                        </li>
                        <!-- User Menu-->
                        <li class="dropdown">
                            <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true"
                                aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                                <span><img class="img-circle " src="assets/images/icon.png" style="width:40px;"
                                        alt="User Image"></span>
                                <span><b> Mr. Montallana</b> <i class=" icofont icofont-simple-down"></i></span>

                            </a>
                            <ul class="dropdown-menu settings-menu">
                                <li><a href="#"><i class="icon-user"></i> Profile</a></li>
                                <li class="p-0">
                                    <div class="dropdown-divider m-0"></div>
                                </li>
                                <li>
                                    <a href="#"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="icon-logout"></i> Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf <!-- CSRF protection -->
                                    </form>
                                </li>


                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>


        <!-- Side-Nav-->
        <aside class="main-sidebar hidden-print sidebar-expanded">
            <section class="sidebar" id="sidebar-scroll">
                <!-- Sidebar Menu-->
                <ul class="sidebar-menu">
                    <li class="nav-level">--- Main</li>
                    <li class="active treeview menu-open">
                        <a class="waves-effect waves-dark" href="{{ url('dash') }}">
                            <i class="icon-speedometer"></i><span> Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-level">--- FARMC Profile</li>
                    {{-- <li class="treeview">
                        <a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>1. FARMC
                                STRENGTHENING</span><i class="icon-arrow-down"></i></a>

                        <ul class="treeview-menu">
                            <li>
                                <a class="waves-effect waves-dark" href="#!">
                                    <i class="icon-arrow-right"></i>
                                    <span>1.1 Organized FARMC</span>
                                    <i class="icon-arrow-down"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <a class="waves-effect waves-dark" href="#!">
                                            <i class="icon-arrow-right"></i>
                                            <span>1.1.1 Municipal / City FARMC</span>
                                            <i class="icon-arrow-down"></i>
                                        </a>

                                        <ul class="treeview-menu">
                                            <li>
                                                <a class="waves-effect waves-dark" href="{{ url('/level1') }}">
                                                    1.1.1.1 Level One
                                                </a>
                                            </li>
                                            <li>
                                                <a class="waves-effect waves-dark" href="{{ url('/level2') }}">
                                                    1.1.1.2 Level Two
                                                </a>
                                            </li>
                                            <li>
                                                <a class="waves-effect waves-dark" href="{{ url('/level3') }}">
                                                    1.1.1.3 Level Three
                                                </a>
                                            </li>
                                            <li>
                                                <a class="waves-effect waves-dark" href="{{ url('/level4') }}">
                                                    1.1.1.4 Level Four
                                                </a>
                                            </li>
                                            <li>
                                                <a class="waves-effect waves-dark" href="{{ url('/level5') }}">
                                                    1.1.1.5 Level Five
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li>
                                        <a class="waves-effect waves-dark" href="#!">
                                            <i class="icon-arrow-right"></i>
                                            1.1.2 Barangay / Lakewide FARMC
                                        </a>
                                    </li>
                                    <li>
                                        <a class="waves-effect waves-dark" href="#!">
                                            <i class="icon-arrow-right"></i>
                                            1.1.2 Integrated FARMC
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a class="waves-effect waves-dark" href="{{ url('/farmc_membership') }}">
                                    <i class="icon-arrow-right"></i>
                                    1.2 FARMC Membership
                                </a>
                            </li>
                        </ul>
                    </li> --}}

                    <li class="treeview menu-open">
                        <a class="waves-effect waves-dark" href="#!">
                            <i class="icon-briefcase"></i><span>1. FARMC STRENGTHENING</span><i class="icon-arrow-down"></i>
                        </a>
                        <ul class="treeview-menu" style="display: block;">
                            <li class="treeview menu-open">
                                <a class="waves-effect waves-dark" href="#!">
                                    <i class="icon-arrow-right"></i>
                                    <span>1.1 Organized FARMC</span><i class="icon-arrow-down"></i>
                                </a>
                                <ul class="treeview-menu" style="display: block;">
                                    <li class="{{ Request::is('level1') ? 'active' : '' }}">
                                        <a class="waves-effect waves-dark" href="{{ url('/level1') }}">
                                            <i class="icon-arrow-right"></i>
                                            <span>1.1.1 Level One</span>
                                        </a>
                                    </li>
                                    <li class="{{ Request::is('level2') ? 'active' : '' }}">
                                        <a class="waves-effect waves-dark" href="{{ url('/level2') }}">
                                            <i class="icon-arrow-right"></i>
                                            <span>1.1.2 Level Two</span>
                                        </a>
                                    </li>
                                    <li class="{{ Request::is('level3') ? 'active' : '' }}">
                                        <a class="waves-effect waves-dark" href="{{ url('/level3') }}">
                                            <i class="icon-arrow-right"></i>
                                            <span>1.1.3 Level Three</span>
                                        </a>
                                    </li>
                                    <li class="{{ Request::is('level4') ? 'active' : '' }}">
                                        <a class="waves-effect waves-dark" href="{{ url('/level4') }}">
                                            <i class="icon-arrow-right"></i>
                                            <span>1.1.4 Level Four</span>
                                        </a>
                                    </li>
                                    <li class="{{ Request::is('level5') ? 'active' : '' }}">
                                        <a class="waves-effect waves-dark" href="{{ url('/level5') }}">
                                            <i class="icon-arrow-right"></i>
                                            <span>1.1.5 Level Five</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="waves-effect waves-dark" href="{{ url('/farmc_membership') }}">
                                    <i class="icon-arrow-right"></i>
                                    <span>1.2 FARMC Membership</span>
                                </a>
                            </li>
                        </ul>
                    </li>



                    <li class="nav-level">--- FARMC Organization</li>

                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i
                                class="icon-docs"></i><span>2. Fisherfolk Organization</span><i
                                class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">

                            <li><a class="waves-effect waves-dark" href="{{ url('/FOMunicipal') }}"><i
                                        class="icon-plus"></i>All Forms</a>
                                <ul class="treeview-menu">
                                    <li>
                                        <a class="waves-effect waves-dark" href="{{ url('/FOform1_BasicInfo') }}"">
                                            <i class="icon-notebook"></i>
                                            <span>2.1.1 Association Form</span>

                                        </a>
                                        <a class="waves-effect waves-dark" href="{{ url('/FOform2GenInfo') }}">
                                            <i class="icon-notebook"></i>
                                            <span>2.1.2 Cooperative Form</span>
                                        </a>

                                    </li>

                                </ul>
                            </li>


                            <li><a class="waves-effect waves-dark" href="{{ url('/FOMunicipal') }}"><i
                                        class="icon-arrow-right"></i>2.1 Municipal</a></li>
                            <li><a class="waves-effect waves-dark" href="{{ url('/FOFishworker') }}"><i
                                        class="icon-arrow-right"></i>2.2 Fishworker</a></li>
                            <li><a class="waves-effect waves-dark" href="{{ url('/FOCommercial') }}"><i
                                        class="icon-arrow-right"></i>2.3 Commercial</a></li>
                            <li><a class="waves-effect waves-dark" href="{{ url('/FOWomenF') }}"><i
                                        class="icon-arrow-right"></i>2.4. Women Fisherfolk</a></li>
                            <li><a class="waves-effect waves-dark" href="{{ url('/FOYouth') }}"><i
                                        class="icon-arrow-right"></i>2.5 Youth Fisherfolk</a></li>
                            <li><a class="waves-effect waves-dark" href="{{ url('/FOIPs') }}"><i
                                        class="icon-arrow-right"></i>2.6 IPs</a></li>

                        </ul>
                    </li>


                    <li class="nav-level">--- FARMC Directors Program</li>

                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i
                                class="icon-briefcase"></i><span>3. Fisherfolk Directors Program
                                <br><small>(Regional Fisherfolk Council of Leaders </small> <br><small>
                                    Assembly)</small>
                            </span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="{{ url('/FOMunicipal') }}"><i
                                        class="icon-plus"></i>All Forms</a>
                                <ul class="treeview-menu">
                                    <li>
                                        <a class="waves-effect waves-dark" href="{{ url('/FDP_pers_info') }}"">
                                            <i class="icon-notebook"></i>
                                            <span>RFDP Form</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>


                            <li>
                                <a class="waves-effect waves-dark" href="{{ url ('/provincialFR')}}">
                                    <i class="icon-arrow-right"></i>
                                    3.1 Provincial Fisherfolk Representative
                                </a>
                            </li>
                            <li>
                                <a class="waves-effect waves-dark" href="{{ url ('/regionalFR')}}">
                                    <i class="icon-arrow-right"></i>
                                    3.2 Regional Fisherfolk Representative
                                </a>
                            </li>
                            <li>
                                <a class="waves-effect waves-dark" href="{{ url ('/regionalFD')}}">
                                    <i class="icon-arrow-right"></i>
                                    3.2 Regional Fisherfolk Director
                                </a>
                            </li>
                            <li>
                                <a class="waves-effect waves-dark" href="{{ url ('/nationalFR')}}">
                                    <i class="icon-arrow-right"></i>
                                    3.3 National Fisherfolk Director
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </section>
        </aside>
    </div>


    <!-- Required Jqurey -->
    <script src="{{ asset('assets/plugins/Jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/tether/dist/js/tether.min.js') }}"></script>

    <!-- Required Fremwork -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Scrollbar JS-->
    <script src="{{ asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js') }}"></script>

    <!--classic JS-->
    <script src="{{ asset('assets/plugins/classie/classie.js') }}"></script>

    <!-- notification -->
    <script src="{{ asset('assets/plugins/notification/js/bootstrap-growl.min.js') }}"></script>

    <!-- Sparkline charts -->
    <script src="{{ asset('assets/plugins/jquery-sparkline/dist/jquery.sparkline.js') }}"></script>

    <!-- Counter js  -->
    <script src="{{ asset('assets/plugins/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/countdown/js/jquery.counterup.js') }}"></script>

    <!-- Echart js -->
    <script src="{{ asset('assets/plugins/charts/echarts/js/echarts-all.js') }}"></script>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>

    <!-- custom js -->
    <script type="text/javascript" src="{{ asset('assets/js/main.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/pages/dashboard.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/pages/elements.js') }}"></script>
    <script src="{{ asset('assets/js/menu.min.js') }}"></script>
    <script>
        var $window = $(window);
        var nav = $('.fixed-button');
        $window.scroll(function() {
            if ($window.scrollTop() >= 200) {
                nav.addClass('active');
            } else {
                nav.removeClass('active');
            }
        });
    </script>


</body>

</html>
