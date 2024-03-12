<!DOCTYPE html>
<html lang="en">

<head>
    <title>Basic Structure | FARMC - BFAR</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="codedthemes">
    <meta name="keywords" content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="codedthemes">




</head>

<body>

    <!-- side_navbar -->
    @include ('side_navbar');
    <!-- side_navbar -->

    <body class="sidebar-mini fixed">
        <div class="loader-bg">
            <div class="loader-bar">
            </div>
        </div>
        <div class="wrapper">
            <!-- Navbar-->
            <header class="main-header-top hidden-print">
                <a href="index.html" class="logo"><img src="../../BFAR_FARMC/img/FARMC_new.png" style=" width:200px;" alt="logo"></a>
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>

                    <!-- Navbar Right Menu-->
                    <div class="navbar-custom-menu f-right">

                        <ul class="top-nav">

                            <!-- window screen -->
                            <li class="pc-rheader-submenu">
                                <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                                    <i class="icon-size-fullscreen"></i>
                                </a>

                            </li>
                            <!-- User Menu-->
                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                                    <!-- <span><img class="img-circle " src="./../BFAR_FARMC/img/FarmC.jpg" style="width:60px; height: 50px" alt="User Image"></span> -->
                                    <span>Mr. <b>Montallana</b> <i class=" icofont icofont-simple-down"></i></span>
                                </a>
                                <ul class="dropdown-menu settings-menu">
                                    <!-- <li><a href="#!"><i class="icon-settings"></i> Settings</a></li> -->
                                    <li><a href="#"><i class="icon-user"></i> Profile</a></li>
                                    <!-- <li><a href="#"><i class="icon-envelope-open"></i> My Messages</a></li>
                        <li class="p-0">
                           <div class="dropdown-divider m-0"></div>
                        </li>
                        <li><a href="#"><i class="icon-lock"></i> Lock Screen</a></li> -->
                                    <li><a href="login.php"><i class="icon-logout"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Side-Nav-->
            <aside class="main-sidebar hidden-print ">
                <section class="sidebar" id="sidebar-scroll">
                    <!-- Sidebar Menu-->
                    <ul class="sidebar-menu">
                        <li class="nav-level">--- Main</li>
                        <li class="active treeview">
                            <a class="waves-effect waves-dark" href="../../BFAR_FARMC/index.php">
                                <i class="icon-speedometer"></i><span> Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-level">--- FARMC Profile</li>

                        <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icofont icofont-company"></i><span>1. FARMC STRENGTHENING</span><i class="icon-arrow-down"></i></a>

                            <!-- MUNICIPAL -->
                            <ul class="treeview-menu">
                                <li class="treeview">
                                    <a class="waves-effect waves-dark" href="#!">
                                        <i class="icon-arrow-right"></i>
                                        <span>1.1 Organized FARMC </span>
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
                                                    <a class="waves-effect waves-dark" href="../../BFAR_FARMC/LoD/L1/Level1.php">
                                                        1.1.1.1 LEVEL 1
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="waves-effect waves-dark" href="../../BFAR_FARMC/LoD/L2/Level2.php">
                                                        1.1.1.2 LEVEL 2
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="waves-effect waves-dark" href="../../BFAR_FARMC/LoD/L3/Level3.php">
                                                        1.1.1.3 LEVEL 3
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="waves-effect waves-dark" href="../../BFAR_FARMC/LoD/L4/Level4.php">
                                                        1.1.1.4 LEVEL 4
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="waves-effect waves-dark" href="../../BFAR_FARMC/LoD/L5/Level5.php">
                                                        1.1.1.5 LEVEL 5
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
                                                1.1.3 Integrated FARMC
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>


                            <!-- INTEGRATE FARMC -->
                            <ul class="treeview-menu">
                                <li class="treeview">
                                    <a class="waves-effect waves-dark" href="../BFAR_FARMC/FARMC_MembersProfile_Form/member_info.php">
                                        <i class="icon-arrow-right"></i>
                                        <span>1.2 FARMC Membership</span>
                                        <i class="icon-arrow-down"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-level">--- FARMC Org</li>
                        <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Fisherfolk Organization </span><i class="icon-arrow-down"></i></a>
                            <ul class="treeview-menu">
                                <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i>2.1 Municipal</a></li>
                                <li><a class="waves-effect waves-dark" href="button.html"><i class="icon-arrow-right"></i>2.2 Fishworker</a></li>
                                <li><a class="waves-effect waves-dark" href="label-badge.html"><i class="icon-arrow-right"></i>2.3 Commercial</a></li>
                                <li><a class="waves-effect waves-dark" href="label-badge.html"><i class="icon-arrow-right"></i>2.4 Women Fisherfolk</a></li>
                                <li><a class="waves-effect waves-dark" href="label-badge.html"><i class="icon-arrow-right"></i>2.5 Youth Fisherfolk</a></li>

                            </ul>
                        </li>

                        <li class="nav-level">--- FARMC DP</li>
                        <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Fisherfolk Directors Program
                                    <br><small>(Regional Fisherfolk Council </small><small>of</small> <br><small> Leaders Assembly)</small>
                                </span><i class="icon-arrow-down"></i></a>
                            <ul class="treeview-menu">
                                <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i>3.1 Provincial Fisherfolk Representative</a></li>
                                <li><a class="waves-effect waves-dark" href="button.html"><i class="icon-arrow-right"></i>2.2 Regional Fisherfolk Director</a></li>
                                <li><a class="waves-effect waves-dark" href="button.html"><i class="icon-arrow-right"></i>2.2 National Fisherfolk Director</a></li>
                            </ul>
                        </li>

                        <li class="nav-level">--- More</li>

                        <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-docs"></i><span>Pages</span><i class="icon-arrow-down"></i></a>
                            <ul class="treeview-menu">
                                <li class="treeview"><a href="#!"><i class="icon-arrow-right"></i><span> Authentication</span><i class="icon-arrow-down"></i></a>
                                    <ul class="treeview-menu">
                                        <li><a class="waves-effect waves-dark" href="register1.html" target="_blank"><i class="icon-arrow-right"></i> Register 1</a></li>

                                        <li><a class="waves-effect waves-dark" href="login1.html" target="_blank"><i class="icon-arrow-right"></i><span> Login 1</span></a></li>
                                        <li><a class="waves-effect waves-dark" href="forgot-password.html" target="_blank"><i class="icon-arrow-right"></i><span> Forgot Password</span></a></li>

                                    </ul>
                                </li>

                                <li><a class="waves-effect waves-dark" href="404.html" target="_blank"><i class="icon-arrow-right"></i> Error 404</a></li>
                                <li><a class="waves-effect waves-dark" href="sample-page.html"><i class="icon-arrow-right"></i> Sample Page</a></li>

                            </ul>
                        </li>
                        <li class="nav-level">--- Menu Level</li>
                    </ul>
                </section>
            </aside>
        </div>
        <div class="wrapper">
            <div class="content-wrapper" style="padding-left: 80px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="main-header">
                            <a href="index.html" class="logo"><img src="./../img/Logo_BFAR.png" style=" width: 60px;" alt="logo"></a>
                            <h4>M/C FARMC Profile</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item">
                                    <a href="index.php">
                                        <i class="icofont icofont-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">FARMC Strenngthening | Organized FARMC | Municipal / City FARMC • Level 2</a>
                                </li>
                            </ol>
                            <br>
                            <a href="./../LoD/L1/Level1.php" class="btn btn-secondary"> <i class="icon-arrow-left"></i> Back</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <!-- <div class="col-sm-12 col-xs-12 waves-effect waves-light"> -->
                            <hr>
                            <div class="grid-material bg-general" style="text-align:center; font-size:20px"><b>BASIC STRUCTURE</b></div>
                            <hr>
                            <!-- </div> -->

                            <!-- </div> -->
                            <!-- <div class="card inline-form-style"> -->
                            <!-- <div class="card-header"> -->
                            <div class="col-sm-6 col-xs-6 waves-effect waves-light">
                                <div class="grid-material bg-general"></div>
                            </div>
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form-inline">
                                            <div class="form-group row">
                                                <label for="h-email" class="col-md-2 col-form-label form-control-label">Municipality / City</label>
                                                <div class="col-md-2">
                                                    <input type="email" id="h-email" class="form-control" style="width:900px" placeholder="">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group row">
                                                <label for="h-email" class="col-md-2 col-form-label form-control-label">Province</label>
                                                <div class="col-md-2">
                                                    <input type="email" id="h-email" class="form-control" style="width:900px" placeholder="">
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="form-group m-r-15">
                                                <label for="inline3mail" class="block form-control-label">Date organized</label>
                                                <input id="inline3mail" type="date" class="form-control" style="width: 400px;" placeholder="">
                                            </div>

                                            <div class="form-group m-r-15">
                                                <label for="inline3mail" class="block form-control-label">Attach the minutes</label>
                                                <input id="inline3mail" type="file" class="form-control" style="width: 195px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            </div>
                                            <div class="form-group m-r-15">
                                                <label for="inline3mail" class="block form-control-label">Attach the Photos</label>
                                                <input id="inline3mail" type="file" class="form-control" style="width: 195px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            </div>
                                            <div class="form-group m-r-15">
                                                <label for="inline3mail" class="block form-control-label">Attach the Attendance</label>
                                                <input id="inline3mail" type="file" class="form-control" style="width: 195px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            </div>
                                            <br>
                                            <hr>
                                            <div class="form-group m-r-15">
                                                <label for="inline3mail" class="block form-control-label">Date of Re-Organization</label>
                                                <input id="inline3mail" type="date" class="form-control" style="width: 400px;" placeholder="">
                                            </div>
                                            <div class="form-group m-r-15">
                                                <label for="inline3mail" class="block form-control-label"><br></label>
                                                <input id="inline3mail" type="file" class="form-control" style="width: 195px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            </div>
                                            <div class="form-group m-r-15">
                                                <label for="inline3mail" class="block form-control-label"><br></label>
                                                <input id="inline3mail" type="file" class="form-control" style="width: 195px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            </div>
                                            <div class="form-group m-r-15">
                                                <label for="inline3mail" class="block form-control-label"><br></label>
                                                <input id="inline3mail" type="file" class="form-control" style="width: 195px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            </div>
                                        </form>
                                        <br>

                                        <!-- <div class="col-md-12"> -->
                                        <form class="form-inline">
                                            <br>
                                            <div class="col-md-5">
                                                <br>
                                                <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                    <label class="input-checkbox checkbox-primary">
                                                        <input type="checkbox" id="checkbox">
                                                        <span class="checkbox"></span>
                                                    </label>
                                                    <div class="captions">Internal Policy</div>
                                                </div>
                                                <br><br><br>
                                                <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                    <label class="input-checkbox checkbox-primary">
                                                        <input type="checkbox" id="checkbox-1">
                                                        <span class="checkbox"></span>
                                                    </label>
                                                    <div class="captions">Fisherfolk Registry</div>
                                                </div>
                                                <br><br><br>
                                                <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                    <label class="input-checkbox checkbox-primary">
                                                        <input type="checkbox" id="checkbox-2">
                                                        <span class="checkbox"></span>
                                                    </label>
                                                    <div class="captions">Fisheries Profile</div>
                                                </div>
                                                <br><br><br>
                                                <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                    <label class="input-checkbox checkbox-primary">
                                                        <input type="checkbox" id="checkbox-3">
                                                        <span class="checkbox"></span>
                                                    </label>
                                                    <div class="captions">Formulation of Resolution and propose ordinances initiated </div>
                                                </div>
                                            </div>



                                            <div class="col-md-7" style=" line-height:4rem">
                                                <input id="inline3mail" type="file" class="form-control" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                <small><b><em>Attach Approved Internal Policy</b></em></small>
                                                <br>
                                                <input id="inline3mail" type="file" class="form-control" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">

                                                <small><b><em>Attach Fisherfolk Registry</em></b></small>
                                                <br>
                                                <input id="inline3mail" type="file" class="form-control" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                <small><b><em>Attach Fisheries Profile</em></b></small>
                                                <br>
                                                <input id="inline3mail" type="file" class="form-control" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                <small><b><em>Attach Files</em></b></small>
                                            </div>
                                        </form>
                                        <div class="row">
                                            <div class="col-md-12 text-right">
                                                <a href="../FARMC_Profile_Form/CompositionOM/Mandated_Member.php" class="btn btn-primary">Next <i class="icon-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                </div>
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <script type="text/javascript">
            SyntaxHighlighter.all();
        </script>

        <script>
            document.querySelectorAll('input[name="optionsRadios"]').forEach(function(radio) {
                radio.addEventListener('change', function() {
                    if (this.value === 'IPoption') {
                        document.getElementById('textBoxContainer').style.display = 'block';
                    } else {
                        document.getElementById('textBoxContainer').style.display = 'none';
                    }
                });
            });
        </script>

    </body>

</html>