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
                            <a href="{{ url ('/level1') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i> Go back to Level 2</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <!-- <div class="card-header"> -->
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title">You haven't provided the following:</h5>
                                    <p>Please provide these necessary requirements to complete Level Two.</p>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href="{{ url('/L1Editform') }}" class="btn btn-danger"><i class="ti-write"></i> &nbsp; Edit form</a>
                                </div>
                            </div>

                            <!-- </ div> -->

                            <hr>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">

                                        <div>
                                            <b>
                                                <h6 class="captions">Basic Structures</h6>
                                            </b>
                                        </div>
                                        @if (in_array('mfdp', $basicFunctionNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; No Municipal Fisheries Development Plan (MFDP)</span>
                                        @endif
                                        <br>
                                        @if (in_array('copy1_file', $basicFunctionNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; No Municipal Fisheries Development Plan (MFDP) Copy File</span>
                                        @endif
                                        @if (in_array('mindoc1_file', $basicFunctionNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; No Municipal Fisheries Development Plan (MFDP) Attached Minutes or Documents</span>
                                        @endif
                                        <br>
                                        @if (in_array('mfo', $basicFunctionNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; mfo</span>
                                        @endif
                                        <br>
                                        @if (in_array('copy2_file', $basicFunctionNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; No Municipal Fisheries Development Plan (MFDP) Attached Minutes or Documents</span>
                                        @endif
                                        <br>
                                        @if (in_array('mindoc2_file', $basicFunctionNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; No Municipal Fisheries Development Plan (MFDP) Attached Minutes or Documents</span>
                                        @endif
                                        <br>
                                        @if (in_array('bantaydt', $basicFunctionNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; No Municipal Fisheries Development Plan (MFDP) Attached Minutes or Documents</span>
                                        @endif
                                        <br>
                                        @if (in_array('actfarmcbt', $basicFunctionNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; No Municipal Fisheries Development Plan (MFDP) Attached Minutes or Documents</span>
                                        @endif
                                        <br>
                                        @if (in_array('actfarmcbt_file', $basicFunctionNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; No Municipal Fisheries Development Plan (MFDP) Attached Minutes or Documents</span>
                                        @endif
                                        <br>
                                        @if (in_array('appfarmcbt', $basicFunctionNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; No Municipal Fisheries Development Plan (MFDP) Attached Minutes or Documents</span>
                                        @endif
                                        <br>
                                        @if (in_array('appfarmcbt_file', $basicFunctionNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; No Municipal Fisheries Development Plan (MFDP) Attached Minutes or Documents</span>
                                        @endif
                                        @if (in_array('caseestablished', $basicFunctionNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; No Municipal Fisheries Development Plan (MFDP) Attached Minutes or Documents</span>
                                        @endif
                                        @if (in_array('caseestablished_file', $basicFunctionNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; No Municipal Fisheries Development Plan (MFDP) Attached Minutes or Documents</span>
                                        @endif
                                        <br>
                                        @if (in_array('mfarmcoffice', $basicFunctionNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; No Municipal Fisheries Development Plan (MFDP) Attached Minutes or Documents</span>
                                        @endif
                                        <br>
                                        @if (in_array('copy3_file', $basicFunctionNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; No Municipal Fisheries Development Plan (MFDP) Attached Minutes or Documents</span>
                                        @endif
                                        <br>
                                        @if (in_array('regmeet', $basicFunctionNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; No Municipal Fisheries Development Plan (MFDP) Attached Minutes or Documents</span>
                                        @endif
                                        <br>
                                        @if (in_array('minatt_file', $basicFunctionNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; No Municipal Fisheries Development Plan (MFDP) Attached Minutes or Documents</span>
                                        @endif
                                        <br>
                                        @if (in_array('photodoc_file', $basicFunctionNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; No Municipal Fisheries Development Plan (MFDP) Attached Minutes or Documents</span>
                                        @endif
                                        <br>
                                        <br>
                                        <br>
                                    </div>
                                    <br>
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