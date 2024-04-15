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
                            <a href="index.html" class="logo"><img src="{{ asset('assets/images/Logo_BFAR.png') }}" style=" width: 60px;" alt="logo"></a>
                            <h4>M/C FARMC Profile | <small>PROFILE FORM</small></h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item">
                                    <a href="index.php">
                                        <i class="icofont icofont-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">FARMC Strengthening | Organized FARMC |
                                        Municipal / City FARMC • Level 1 | INCOMPLETED</a>
                                </li>
                            </ol>
                            <br>
                            <a href="{{ url('/level1') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i>
                                Go back to Level 1</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <!-- <div class="card-header"> -->
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title">You haven't provided the following:</h5>
                                    <p>Please provide these necessary requirements to complete Level One.</p>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href="{{ url('/L1Editform') }}" class="btn btn-danger"><i class="ti-write"></i>
                                        &nbsp; Edit form</a>
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
                                        @foreach ($profileFormNullFields as $field)
                                        <b><i class="ti-check-box text-danger-color"></i></b>
                                        <span style="display: inline-block;">&nbsp; {{ ucfirst($field) }}</span><br>
                                        @endforeach
                                        @if (in_array('municipality', $profileFormNullFields))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Municipality</span>
                                        @endif
                                        <br>
                                        @if (in_array('province', $profileFormNullFields))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Province</span>
                                        @endif
                                        <br>
                                        @if (in_array('date_organized', $profileFormNullFields))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Date Organized</span>
                                        @endif
                                        <br>
                                        @if (in_array('minutes1', $profileFormNullFields))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Minutes 1 <small><em>(date
                                                    organized)</em></small></span>
                                        @endif
                                        <br>
                                        @if (in_array('photos1', $profileFormNullFields))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Photos 1 <small><em>(date
                                                    organized)</em></small></span>
                                        @endif
                                        <br>
                                        @if (in_array('attendance1', $profileFormNullFields))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Attendance 1 <small><em>(date
                                                    organized)</em></small></span>
                                        @endif
                                        <br>
                                        @if (in_array('date_reorganized', $profileFormNullFields))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Date Reorganized</span>
                                        @endif
                                        <br>
                                        @if (in_array('minutes2', $profileFormNullFields))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Minutes 2 <small><em>(date
                                                    reorganized)</em></small></span>
                                        @endif
                                        <br>
                                        @if (in_array('photos2', $profileFormNullFields))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Photos 2 <small><em>(date
                                                    reorganized)</em></small></span>
                                        @endif
                                        <br>
                                        @if (in_array('attendance2', $profileFormNullFields))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Attendance 2 <small><em>(date
                                                    reorganized)</em></small></span>
                                        @endif
                                        <br>
                                        @if (in_array('internalP_file', $profileFormNullFields))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp;Internal Policy </small></span>
                                        @endif
                                        <br>
                                        @if (in_array('fisherfolkR_file', $profileFormNullFields))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Fisherfolk Registry</span>
                                        @endif
                                        <br>
                                        @if (in_array('fisherfolkR_file', $profileFormNullFields))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp;Fisheries Profile</span>
                                        @endif
                                        <br>
                                        @if (in_array('formulationR_file', $profileFormNullFields))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Formulation of Resolution and
                                            propose ordinance initiated </span>
                                        @endif
                                        <br>
                                        <br>
                                    </div>
                                    <br>

                                    <!-- FARMC Officers -->
                                    <div class="col-md-6">
                                        <div>
                                            <b>
                                                <h6 class="captions">FARMC Officers</h6>
                                            </b>
                                        </div>
                                        <!-- FARMC Officers -->
                                        @if (in_array('chairperson', $profileFormNullFields))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Chairperson </span>
                                        @endif
                                        <br>
                                        @if (in_array('vice_chairperson', $profileFormNullFields))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Vice Chairperson </span>
                                        @endif
                                        <br>
                                        @if (in_array('secretary', $profileFormNullFields))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Secretary </span>
                                        @endif
                                        <br>
                                        @if (in_array('treasurer', $profileFormNullFields))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Treasurer </span>
                                        @endif
                                        <br>
                                        @if (in_array('auditor', $profileFormNullFields))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Auditor</span>
                                        @endif
                                        <br>
                                        @if (in_array('pro1', $profileFormNullFields))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; PRO </span>
                                        @endif
                                        <br>
                                        @if (in_array('sgt_arms1', $profileFormNullFields))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Sergeant-at-arms </span>
                                        @endif
                                        <br>
                                        <br>

                                        <!-- end of FARMC Officers -->

                                        <!-- Mandated Members -->
                                        <div>
                                            <b>
                                                <h6 class="captions">Mandated Members</h6>
                                            </b>
                                        </div>

                                        @if (in_array('chairpersonSB', $profileFormNullFields))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Chairperson SB / SP</span>
                                        @endif
                                        <br>
                                        @if (in_array('mpdo', $profileFormNullFields))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Municipal Planning and Development
                                            Officer</span>
                                        @endif
                                        <br>
                                        @if (in_array('repmdc', $profileFormNullFields))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Representative from Municipal
                                            Development Council</span>
                                        @endif
                                        <br>
                                        @if (in_array('repda', $profileFormNullFields))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Representative from Department of
                                            Agriculture</span>
                                        @endif
                                        <br>
                                        @if (in_array('repngo', $profileFormNullFields))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Representative from
                                            Non-Governmental Organization</span>
                                        @endif
                                        <br>
                                        @if (in_array('repps', $profileFormNullFields))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Representative from Private
                                            Sector</span>
                                        @endif
                                        <br>
                                        @if (in_array('others', $profileFormNullFields))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Others</span>
                                        @endif
                                        <br>
                                        <br>
                                        <!-- end of Mandated Members -->

                                        <!-- Fisherfolk Rep -->
                                        <div>
                                            <b>
                                                <h6 class="captions">Fisherfolk Representative</h6>
                                            </b>
                                            @if (!empty($missingCategoriesArray))
                                            <p>The following categories are missing:</p>
                                            <ul>
                                                @foreach ($missingCategoriesArray as $category)
                                                <li><i class="ti-check-box text-danger-color"></i> &nbsp; {{ $category }}</li>
                                                @endforeach
                                            </ul>
                                            @else
                                            <p>All categories are present.</p>
                                            @endif

                                            <br>
                                            @if (in_array('name', $fisherfolkNullFields))
                                            <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Name</span>
                                            @endif
                                            <br>
                                            @if (in_array('endorsement_fisherfolk', $fisherfolkNullFields))
                                            <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Endorsement Fisherfolk</span>
                                            @endif
                                            <!-- end of Fisherfolk Rep -->


                                            <!-- MFARMC Committee -->
                                            <div>
                                                <b>
                                                    <h6 class="captions">MFARMC Committee</h6>
                                                </b>
                                                @if (!empty($missingCommitteeCategoriesArray))
                                                <h6 class="captions">The following committee categories are missing:</h6>
                                                <ul>
                                                    @foreach ($missingCommitteeCategoriesArray as $category)
                                                    <li><i class="ti-check-box text-danger-color"></i> &nbsp; {{ $category }}</li>
                                                    @endforeach
                                                </ul>
                                                @else
                                                <p>All committee categories are present.</p>
                                                @endif

                                                <br>

                                            </div>

                                            <!-- end of MFARMC Committee -->

                                            <div>
                                                <b>
                                                    <h6 class="captions">Secretariat</h6>
                                                </b>
                                            </div>
                                            <!-- Secretariat -->
                                            @if (in_array('name_sec', $profileFormNullFields))
                                            <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Secretary 1 </span>
                                            @endif
                                            <br>
                                            @if (in_array('name_sec1', $profileFormNullFields))
                                            <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Secretary 2 </span>
                                            @endif
                                            <br>
                                            @if (in_array('name_sec2', $profileFormNullFields))
                                            <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Secretary 3 </span>
                                            @endif
                                            <br>
                                            @if (in_array('office_org', $profileFormNullFields))
                                            <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Office / Organization 1 </span>
                                            @endif
                                            <br>
                                            @if (in_array('office_org1', $profileFormNullFields))
                                            <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Office / Organization 2</span>
                                            @endif
                                            <br>
                                            @if (in_array('office_org2', $profileFormNullFields))
                                            <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Office / Organization 3</span>
                                            @endif
                                            <br>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <a href="{{ url ('/L1Incompletetbl') }}"> <button type="submit" class="btn btn-primary">OK</i></button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>

    </html>