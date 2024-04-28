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
                            <a href="{{ url ('/level5') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i> Go back to Level 4</a>
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
                                                <h6 class="captions">Model of Excellence</h6>
                                            </b>
                                        </div>
                                        <br>
                                        <p class="captions"><b>1) Recognized By The LGU & Community As A Strong And Dynamic Partner In The Management Of Municipal Waters</b></p>
                                        @if (in_array('rec_list1', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp;1.1 List Of Governing Bodies That Recognises The MFARMC As A Member 1</span>
                                        @endif
                                        <br>
                                        @if (in_array('data_fishcatch', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp;2.2 List Of Governing Bodies That Recognises The MFARMC As A Member 2</span>
                                        @endif
                                        <br>
                                        @if (in_array('data_regforms', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp;3.3 List Of Governing Bodies That Recognises The MFARMC As A Member 3</span>
                                        @endif
                                        <br>
                                        <br>
                                        @if (in_array('rec_attach_file', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Communications / Reports On The Representations Of FARMCs </span>
                                        @endif
                                        <br>

                                        <p class="captions"><b>2) Awards And Citations/Recognitions For Exemplary Performance Received</b></p>

                                        @if (in_array('award_plaq1', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Plaque Of Recognition Received 1</span>
                                        @endif
                                        <br>
                                        @if (in_array('award_plaq1_file', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Plaque Of Recognition Received 1 (Attach file)</span>
                                        @endif
                                        <br>
                                        @if (in_array('award_plaq2', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Plaque Of Recognition Received 2</span>
                                        @endif
                                        <br>
                                        @if (in_array('award_plaq2_file', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Plaque Of Recognition Received 2 (Attach file)</span>
                                        @endif
                                        <br>
                                        @if (in_array('award_plaq3', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Plaque Of Recognition Received 3</span>
                                        @endif
                                        <br>
                                        @if (in_array('award_plaq3_file', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp; Plaque Of Recognition Received 3 (Attach file)</span>
                                        @endif
                                        <br>

                                        @if (in_array('award_cert1', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp;  Certificate Of Merit, Recognition And Appreciation Received 1</span>
                                        @endif
                                        <br>
                                        @if (in_array('award_cert1_file', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp;  Certificate Of Merit, Recognition And Appreciation Received 1 (Attach file)</span>
                                        @endif
                                        <br>
                                        @if (in_array('award_cert2', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp;  Certificate Of Merit, Recognition And Appreciation Received 2</span>
                                        @endif
                                        <br>
                                        @if (in_array('award_cert2_file', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp;  Certificate Of Merit, Recognition And Appreciation Received 2 (Attach file)</span>
                                        @endif
                                        <br>
                                        @if (in_array('award_cert3', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp;  Certificate Of Merit, Recognition And Appreciation Received 3</span>
                                        @endif
                                        <br>
                                        @if (in_array('award_cert3_file', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp;  Certificate Of Merit, Recognition And Appreciation Received 3 (Attach file)</span>
                                        @endif
                                        <br>

                                        @if (in_array('award_proj1', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp;  Approved Project And Cash Incentives Received 1</span>
                                        @endif
                                        <br>
                                        @if (in_array('award_proj1_file', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp;  Approved Project And Cash Incentives Received 1 (Attach file)</span>
                                        @endif
                                        <br>
                                        @if (in_array('award_proj2', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp;  Approved Project And Cash Incentives Received 2</span>
                                        @endif
                                        <br>
                                        @if (in_array('award_proj2_file', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp;  Approved Project And Cash Incentives Received 2 (Attach file)</span>
                                        @endif
                                        <br>
                                        @if (in_array('award_proj3', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp;  Approved Project And Cash Incentives Received 3</span>
                                        @endif
                                        <br>
                                        @if (in_array('award_proj3_file', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp;  Approved Project And Cash Incentives Received 3 (Attach file)</span>
                                        @endif
                                        <br>

                                        @if (in_array('award_trop1', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp;  Trophies Received 1</span>
                                        @endif
                                        <br>
                                        @if (in_array('award_trop1_file', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp;  Trophies Received 1 (Attach file)</span>
                                        @endif
                                        <br>
                                        @if (in_array('award_trop2', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp;  Trophies Received 2</span>
                                        @endif
                                        <br>
                                        @if (in_array('award_trop2_file', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp;  Trophies Received 2 (Attach file)</span>
                                        @endif
                                        <br>
                                        @if (in_array('award_trop3', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp;  Trophies Received 3</span>
                                        @endif
                                        <br>
                                        @if (in_array('award_trop3_file', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp;  Trophies Received 3 (Attach file)</span>
                                        @endif
                                        <br>

                                        <p class="captions"><b>3) Brochures / Handouts / Publications Of Success Stories Printed / Documented</b></p>
                                        {{-- @if (in_array('iec_broch', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp;  IEC Materials Of M/CFARMC Success Stories (Brochure)</span>
                                        @endif --}}
                                        {{-- <br> --}}
                                        @if (in_array('iec_broch', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp;  IEC Materials Of M/CFARMC Success Stories (Brochure)</span>
                                        @endif
                                        <br>
                                        {{-- @if (in_array('iec_hand', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp;  IEC Materials Of M/CFARMC Success Stories 3 (Photo Documentation)</span>
                                        @endif --}}
                                        {{-- <br> --}}
                                        @if (in_array('iec_hand_file', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp;  IEC Materials Of M/CFARMC Success Stories (Handouts)</span>
                                        @endif
                                        <br>
                                        {{-- @if (in_array('iec_pub', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp;  IEC Materials Of M/CFARMC Success Stories 3 (Photo Documentation)</span>
                                        @endif --}}
                                        {{-- <br> --}}
                                        @if (in_array('iec_pub_file', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp;  IEC Materials Of M/CFARMC Success Stories (Publication)</span>
                                        @endif
                                        <br>
                                        {{-- @if (in_array('iec_AVP', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp;  IEC Materials Of M/CFARMC Success Stories 3 (Photo Documentation)</span>
                                        @endif --}}
                                        {{-- <br> --}}
                                        @if (in_array('iec_AVP_file', $modelofExcellenceNull))
                                        <b> <i class="ti-check-box text-danger-color"></i></b><span style="display: inline-block;">&nbsp;  IEC Materials Of M/CFARMC Success Stories (Audio Visual Presentation)</span>
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
