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
                            <a href="{{ url ('/level4') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i> Go back to Level 4</a>
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
                                    <a href="{{ url('/L5Editform') }}" class="btn btn-danger"><i class="ti-write"></i> &nbsp; Edit form</a>
                                </div>
                            </div>

                            <!-- </ div> -->
                            <hr>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12" >
                                        <div>
                                            <b>
                                                <h6 class="captions">Sustainability Mechanism</h6>
                                            </b>
                                        </div>
                                        <br>
                                        <p class="captions"><b>1) Data Bank/Databank System Established And Accesible</b></p>
                                        @if (in_array('data_training', $sustainabilityMechNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; FARMC Has Undergone Training On FARMC & Fish Catch DAtabase System</span>
                                        @endif
                                        <br>
                                        @if (in_array('data_fishcatch', $sustainabilityMechNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; FARMC & Fish Catch Database System Installed And Operational In The FARMC Office Computer</span>
                                        @endif
                                        <br>
                                        @if (in_array('data_regforms', $sustainabilityMechNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Fisherfolk Registration Forms Duly Accomplished And Encoded In The FARMC Database System</span>
                                        @endif
                                        <br>
                                        <br>
                                        <p class="captions"><b>2. Established Financial Capability And Fund Sourcing Ability</b></p>
                                        @if (in_array('est_funds', $sustainabilityMechNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Amount Of MFARMC Funds Allocated By The LGU</span>
                                        @endif
                                        <br>
                                        @if (in_array('est_funds_file', $sustainabilityMechNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Amount Of MFARMC Funds Allocated By The LGU (Document showing the MFARMC fund)</span>
                                        @endif
                                        <br>
                                        @if (in_array('othersources1', $sustainabilityMechNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Other Sources Of Funds Obtained For The FARMC & Its Operation 1</span>
                                        @endif
                                        <br>
                                        @if (in_array('othersources1_file', $sustainabilityMechNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Other Sources Of Funds Obtained For The FARMC & Its Operation 1 (Reports)</span>
                                        @endif
                                        <br>
                                        @if (in_array('othersources2', $sustainabilityMechNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Other Sources Of Funds Obtained For The FARMC & Its Operation 2</span>
                                        @endif
                                        <br>
                                        @if (in_array('othersources2_file', $sustainabilityMechNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Other Sources Of Funds Obtained For The FARMC & Its Operation 2 (Minutes)</span>
                                        @endif
                                        <br>
                                        @if (in_array('othersources3', $sustainabilityMechNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Other Sources Of Funds Obtained For The FARMC & Its Operation 3</span>
                                        @endif
                                        <br>
                                        @if (in_array('othersources3_file', $sustainabilityMechNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Other Sources Of Funds Obtained For The FARMC & Its Operation 3 (Photo Documentation)</span>
                                        @endif
                                        <br>
                                        <br>
                                        
                                    </div>
                                    <br><br><br>
                                    <br>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <a href="{{ url ('/L5Incompletetbl') }}"> <button type="submit" class="btn btn-primary">OK</i></button></a>
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