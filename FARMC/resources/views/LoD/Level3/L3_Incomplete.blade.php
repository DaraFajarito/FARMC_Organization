<DOCTYPE html>
    <html lang="en">

    <head>
        <title>All Dashboard | BFAR - FARMC</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    </head>

    <body>

        <!-- side_navbar -->
        @include ('side_navbar')
        <div class="wrapper">
            <div class="content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="main-header">
                            <a href="index.html" class="logo"><img src="{{ asset ('assets/images/Logo_BFAR.png') }}" style=" width: 60px;" alt="logo"></a>
                            <h4>M/C FARMC Profile | <small>PROFILE FORM</small></h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item">
                                    <a href="index.php">
                                        <i class="icofont icofont-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">FARMC Strengthening | Organized FARMC | Municipal / City FARMC • Level 2 | INCOMPLETED</a>
                                </li>
                            </ol>
                            <br>
                            <a href="{{ url ('/level3') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i> Go back to Level 3</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <!-- <div class="card-header"> -->
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title">You haven't provided the following:</h5>
                                    <p>Please provide these necessary requirements to complete Level Three.</p>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href="{{ url('/L3Editform') }}" class="btn btn-danger"><i class="ti-write"></i> &nbsp; Edit form</a>
                                </div>
                            </div>

                            <!-- </ div> -->
                            <hr>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6" style="font-size: smaller;">
                                        <div>
                                            <b>
                                                <h6 class="captions">Fully Operational</h6>
                                            </b>
                                        </div>
                                        @if (in_array('approved_MFDP_file', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; No Approved MFDP </span>
                                        @endif
                                        <br>
                                        <p class="captions"><b>1) Implementation Of MFDP</b></p>
                                        @if (in_array('imp_act1', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Activities Undertaken Base On Approved MFDP 1</span>
                                        @endif
                                        <br>
                                        @if (in_array('imp_act1_file', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Activities Undertaken Base On Approved MFDP 1 (Reports/Minutes/Photo Docu)</span>
                                        @endif
                                        <br>
                                        @if (in_array('imp_act2', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Activities Undertaken Base On Approved MFDP 2</span>
                                        @endif
                                        <br>
                                        @if (in_array('imp_act2_file', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Activities Undertaken Base On Approved MFDP 2 (Reports/Minutes/Photo Docu)</span>
                                        @endif
                                        <br>
                                        @if (in_array('imp_act3', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Activities Undertaken Base On Approved MFDP 3</span>
                                        @endif
                                        <br>
                                        @if (in_array('imp_act3_file', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Activities Undertaken Base On Approved MFDP 3 (Reports/Minutes/Photo Docu)</span>
                                        @endif
                                        <br><br>
                                        <p class="captions"><b>2) Policies Implemented By The LGU</b></p>
                                        @if (in_array('pol_prop1', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Policies Propose By The MFARMC Implemented By LGU 1</span>
                                        @endif
                                        <br>

                                        @if (in_array('pol_prop1_file', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Policies Propose By The MFARMC Implemented By LGU 1    (Reports/Minutes/Photo Docu)</span>
                                        @endif
                                        <br>

                                        @if (in_array('pol_prop2', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Policies Propose By The MFARMC Implemented By LGU 2</span>
                                        @endif
                                        <br>
                                        @if (in_array('pol_prop2_file', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Policies Propose By The MFARMC Implemented By LGU 2 (Reports/Minutes/Photo Docu)</span>
                                        @endif
                                        <br>
                                        @if (in_array('pol_prop3', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Policies Propose By The MFARMC Implemented By LGU 3</span>
                                        @endif
                                        <br>
                                        @if (in_array('pol_prop3_file', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Policies Propose By The MFARMC Implemented By LGU 3 (Reports/Minutes/Photo Docu)</span>
                                        @endif
                                        <br><br>
                                        <p class="captions"><b>3) Recognition By The Sangguniang Bayad/Panlungsod</b></p>
                                        @if (in_array('rec_act1', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Activities / Event The MFARMC Was Conducted By The SB/SP 1</span>
                                        @endif
                                        <br>
                                        @if (in_array('rec_act1_file', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Activities / Event The MFARMC Was Conducted By The SB/SP 1 (Reports/Minutes/Photo Docu)</span>
                                        @endif
                                        <br>
                                        @if (in_array('rec_act2', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Activities / Event The MFARMC Was Conducted By The SB/SP 2</span>
                                        @endif
                                        <br>
                                        @if (in_array('rec_act2_file', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Activities / Event The MFARMC Was Conducted By The SB/SP 2 (Reports/Minutes/Photo Docu)</span>
                                        @endif
                                        <br>
                                        @if (in_array('rec_act3', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Activities / Event The MFARMC Was Conducted By The SB/SP 3</span>
                                        @endif
                                        <br>
                                        @if (in_array('rec_act3_file', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Activities / Event The MFARMC Was Conducted By The SB/SP 3 (Reports/Minutes/Photo Docu) </span>
                                        @endif
                                        <br>
                                        @if (in_array('rec_iss1', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Issues Discuss And Resolve 1</span>
                                        @endif
                                        <br>
                                        @if (in_array('rec_iss1_file', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Issues Discuss And Resolve 1 (Reports/Minutes/Photo Docu)</span>
                                        @endif
                                        <br>
                                        @if (in_array('rec_iss2', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Issues Discuss And Resolve 2</span>
                                        @endif
                                        <br>
                                        @if (in_array('rec_iss2_file', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Issues Discuss And Resolve 2 (Reports/Minutes/Photo Docu)</span>
                                        @endif
                                        <br>
                                        @if (in_array('rec_iss3', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Issues Discuss And Resolve 3</span>
                                        @endif
                                        <br>
                                        @if (in_array('rec_iss3_file', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Issues Discuss And Resolve 3 (Reports/Minutes/Photo Docu)</span>
                                        @endif
                                        <br><br>
                                    </div>

                                    <div class="col-md-6" style="font-size: smaller;">
                                        <p class="captions"><b>4) Partnership With LGU Established</b></p>
                                        @if (in_array('part_act1', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Activities Indicating Partnership Efforts 1</span>
                                        @endif
                                        <br>
                                        @if (in_array('part_act1_file', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Activities Indicating Partnership Efforts 1 (Reports/Minutes/Photo Docu)</span>
                                        @endif
                                        <br>
                                        @if (in_array('part_act2', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Activities Indicating Partnership Efforts 2</span>
                                        @endif
                                        <br>
                                        @if (in_array('part_act2_file', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Activities Indicating Partnership Efforts 2 (Reports/Minutes/Photo Docu)</span>
                                        @endif
                                        <br>
                                        @if (in_array('part_act3', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Activities Indicating Partnership Efforts 3</span>
                                        @endif
                                        <br>
                                        @if (in_array('part_act3_file', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Activities Indicating Partnership Efforts 3 (Reports/Minutes/Photo Docu)</span>
                                        @endif
                                        <br>
                                        @if (in_array('part_LGU1', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; LGU Project That Implemented By The MFARMC 1</span>
                                        @endif
                                        <br>
                                        @if (in_array('part_LGU1_file', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; LGU Project That Implemented By The MFARMC 1 (Reports/Minutes/Photo Docu)</span>
                                        @endif
                                        <br>
                                        @if (in_array('part_LGU2', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; LGU Project That Implemented By The MFARMC 2</span>
                                        @endif
                                        <br>
                                        @if (in_array('part_LGU2_file', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; LGU Project That Implemented By The MFARMC 2 (Reports/Minutes/Photo Docu)</span>
                                        @endif
                                        <br>
                                        @if (in_array('part_LGU3', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; LGU Project That Implemented By The MFARMC 3</span>
                                        @endif
                                        <br>
                                        @if (in_array('part_LGU3_file', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; LGU Project That Implemented By The MFARMC 3 (Reports/Minutes/Photo Docu)</span>
                                        @endif
                                        <br><br>
                                        <p class="captions"><b>5) Working Committee Active And Performing</b></p>
                                        @if (in_array('name_com', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Name Of Committee</span>
                                        @endif
                                        <br>
                                        @if (in_array('sched_regmeet', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Schedule Of Regular Meeting Of Committee</span>
                                        @endif
                                        <br>
                                        @if (in_array('sched_regmeet_file', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Schedule Of Regular Meeting Of Committee (Minutes)</span>
                                        @endif
                                        <br>
                                        @if (in_array('wor_act1', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; List Of Activities Of Committee 1</span>
                                        @endif
                                        <br>
                                        @if (in_array('wor_act1_file', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; List Of Activities Of Committee 1 (Reports/Minutes/Photo Docu)</span>
                                        @endif
                                        <br>
                                        @if (in_array('wor_act2', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; List Of Activities Of Committee 2</span>
                                        @endif
                                        <br>
                                        @if (in_array('wor_act2_file', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; List Of Activities Of Committee 2 (Reports/Minutes/Photo Docu)</span>
                                        @endif
                                        <br>
                                        @if (in_array('wor_act3', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; List Of Activities Of Committee 3</span>
                                        @endif
                                        <br>
                                        @if (in_array('wor_act3_file', $fullyOperationalNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; List Of Activities Of Committee 3 (Reports/Minutes/Photo Docu)</span>
                                        @endif
                                    </div>
                                    <br><br><br>
                                    <br>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <a href="{{ url ('/L3Incompletetbl') }}"> <button type="submit" class="btn btn-primary">OK</i></button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>

    </html>