<!DOCTYPE html>
<html lang="en">

<head>
    <title>Level 3 - Fully Operational | FARMC - BFAR</title>
    <link rel="icon" href="{{ asset('assets/images/icon.png') }}" type="image/png">

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="codedthemes">
    <meta name="keywords" content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="codedthemes">
</head>

<style>
    .captions {
        display: inline-block;
        vertical-align: middle;
        /* margin-left: 10px; Adjust as needed */
    }
</style>

<body>

    <!-- side_navbar -->
    @include ('side_navbar')
    <!-- side_navbar -->

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
                            <li class="breadcrumb-item"><a href="#">FARMC Strengthening | Organized FARMC | Municipal / City FARMC • Level 3</a>
                            </li>
                        </ol>
                        <br>
                        <a href="{{ url ('/level3') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i> Back</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <hr>
                        <div class="grid-material bg-general" style="text-align:center; font-size:20px"><b>FULLY OPERATIONAL</b></div>
                        <hr>
                        <div class="col-sm-6 col-xs-6 waves-effect waves-light">
                            <div class="grid-material bg-general"></div>
                        </div>
                        <form class="form-inline" method="POST" action="{{ url('/add-fullyOperational/' . $basics->profileForm_id) }}" enctype="multipart/form-data">
                            @csrf
                            @if($errors->any())
                            <div class="alert alert-danger">
                                {{ $errors->first() }}
                            </div>
                            @endif

                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="municipality" class="col-md-12 col-form-label form-control-label">1. Implementation of MFDP</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input id="approved_MFDP_file" type="file" name="approved_MFDP_file" class="form-control file-input" style="width: 250px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                        <small><b><em>Please attached approved MFDP</b></em></small>
                                        <br>
                                    </div>
                                    <div class="col-md-12" style="margin-top:1rem">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label for="municipality" class="col-md-12 captions">1.1 Activities undertaken base on approved MFDP</label>
                                                <div class="col-md-12">

                                                    <div class="col-md-6">
                                                        <input type="text" id="imp_act1" name="imp_act1" class="form-control" style="width:520px" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="imp_act1_file" type="file" name="imp_act1_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                        <small><b><em>Please attached files</b></em></small>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" id="imp_act2" name="imp_act2" class="form-control" style="width:520px" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="imp_act2_file" type="file" name="imp_act2_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                        <small><b><em>Please attached files</b></em></small>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" id="imp_act3" name="imp_act3" class="form-control" style="width:520px" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="imp_act3_file" type="file" name="imp_act3_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                        <small><b><em>Please attached files</b></em></small>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12" style="margin-top: 1rem;">
                                        <div class="form-group row">
                                            <label for="municipality" class="col-md-12 col-form-label form-control-label">2. Policies implemented by the LGU</label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label for="municipality" class="col-md-12 captions">2.1 Approved policies propose by the MFARMC implemented by LGU</label>
                                                <div class="col-md-12">

                                                    <div class="col-md-6">
                                                        <input type="text" id="pol_prop1" name="pol_prop1" class="form-control" style="width:520px" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="pol_prop1_file" type="file" name="pol_prop1_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                        <small><b><em>Please attached files</b></em></small>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" id="pol_prop2" name="pol_prop2" class="form-control" style="width:520px" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="pol_prop2_file" type="file" name="pol_prop2_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                        <small><b><em>Please attached files</b></em></small>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" id="pol_prop3" name="pol_prop3" class="form-control" style="width:520px" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="pol_prop3_file" type="file" name="pol_prop3_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                        <small><b><em>Please attached files</b></em></small>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12" style="margin-top: 1rem;">
                                        <div class="form-group row">
                                            <label for="municipality" class="col-md-12 col-form-label form-control-label">3. Recognition by the Sangguniang Bayad/Panlungsod</label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label for="municipality" class="col-md-12 captions">3.1 Activities / event the MFARMC was conducted by the SB/SP</label>
                                                <div class="col-md-12">

                                                    <div class="col-md-6">
                                                        <input type="text" id="rec_act1" name="rec_act1" class="form-control" style="width:520px" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="rec_act1_file" type="file" name="rec_act1_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                        <small><b><em>Please attached files</b></em></small>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" id="rec_act2" name="rec_act2" class="form-control" style="width:520px" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="rec_act2_file" type="file" name="rec_act2_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                        <small><b><em>Please attached files</b></em></small>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" id="rec_act3" name="rec_act3" class="form-control" style="width:520px" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="rec_act3_file" type="file" name="rec_act3_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                        <small><b><em>Please attached files</b></em></small>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12" style="margin-top: 2rem;">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label for="municipality" class="col-md-12 captions">3.2 Issues discuss and resolve</label>
                                                <div class="col-md-12">

                                                    <div class="col-md-6">
                                                        <input type="text" id="rec_iss1" name="rec_iss1" class="form-control" style="width:520px" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="rec_iss1_file" type="file" name="rec_iss1_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                        <small><b><em>Please attached files</b></em></small>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" id="rec_iss2" name="rec_iss2" class="form-control" style="width:520px" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="rec_iss2_file" type="file" name="rec_iss2_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                        <small><b><em>Please attached files</b></em></small>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" id="rec_iss3" name="rec_iss3" class="form-control" style="width:520px" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="rec_iss3_file" type="file" name="rec_iss3_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                        <small><b><em>Please attached files</b></em></small>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-12" style="margin-top: 1rem;">
                                        <div class="form-group row">
                                            <label for="municipality" class="col-md-12 col-form-label form-control-label">4. Partnership with LGU established</label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label for="municipality" class="col-md-12 captions">4.1 Activities indicating partnership efforts</label>
                                                <div class="col-md-12">

                                                    <div class="col-md-6">
                                                        <input type="text" id="part_act1" name="part_act1" class="form-control" style="width:520px" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="part_act1_file" type="file" name="part_act1_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                        <small><b><em>Please attached files</b></em></small>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" id="part_act2" name="part_act2" class="form-control" style="width:520px" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="part_act2_file" type="file" name="part_act2_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                        <small><b><em>Please attached files</b></em></small>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" id="part_act3" name="part_act3" class="form-control" style="width:520px" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="part_act3_file" type="file" name="part_act3_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                        <small><b><em>Please attached files</b></em></small>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12" style="margin-top: 2rem;">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label for="municipality" class="col-md-12 captions">4.2 LGU project that implemented by the MFARMC</label>
                                                <div class="col-md-12">

                                                    <div class="col-md-6">
                                                        <input type="text" id="part_LGU1" name="part_LGU1" class="form-control" style="width:520px" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="part_LGU1_file" type="file" name="part_LGU1_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                        <small><b><em>Please attached files</b></em></small>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" id="part_LGU2" name="part_LGU2" class="form-control" style="width:520px" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="part_LGU2_file" type="file" name="part_LGU2_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                        <small><b><em>Please attached files</b></em></small>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" id="part_LGU3" name="part_LGU3" class="form-control" style="width:520px" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="part_LGU3_file" type="file" name="part_LGU3_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                        <small><b><em>Please attached files</b></em></small>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12" style="margin-top: 1rem;">
                                        <div class="form-group row">
                                            <label for="municipality" class="col-md-12 col-form-label form-control-label">5. Working committee active and performing</label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="col-md-4">
                                            <label for="municipality" class="col-md-12 captions">5.1 Name of Committee</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="name_com" name="name_com" class="form-control" style="width:700px" placeholder="">
                                        </div>
                                        <div class="col-md-12" style="margin-top: 1rem;">
                                            <div class="form-group row">
                                                <!-- <div class="col-md-12"> -->
                                                <div class="col-md-5">
                                                    <label for="municipality" class="col-md-12 captions">5.1.1 Schedule of regular meeting of committee</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" id="sched_regmeet" name="sched_regmeet" class="form-control" style="width:220px" placeholder="">
                                                </div>
                                                <div class="col-md-4">
                                                    <input id="sched_regmeet_file" type="file" name="sched_regmeet_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                    <small><b><em>Attached minutes</b></em></small>
                                                </div>
                                            </div>
                                            <!-- </div> -->
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label for="municipality" class="col-md-12 captions">5.1.2 List of activities of committee</label>
                                                    <div class="col-md-12">

                                                        <div class="col-md-6">
                                                            <input type="text" id="wor_act1" name="wor_act1" class="form-control" style="width:500px" placeholder="">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input id="wor_act1_file" type="file" name="wor_act1_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                            <small><b><em>Please attached files</b></em></small>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" id="wor_act2" name="wor_act2" class="form-control" style="width:500px" placeholder="">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input id="wor_act2_file" type="file" name="wor_act2_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                            <small><b><em>Please attached files</b></em></small>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" id="wor_act3" name="wor_act3" class="form-control" style="width:500px" placeholder="">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input id="wor_act3_file" type="file" name="wor_act3_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                            <small><b><em>Please attached files</b></em></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:2rem">
                                    <div class="col-md-12 text-right">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#confirmationModal">SUBMIT</button>
                                    </div>
                                </div>
                                <!-- </div> -->
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to submit now?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                            <button type="submit" class="btn btn-primary">Yes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
  
 
    <script type="text/javascript">
        SyntaxHighlighter.all();
    </script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  

</body>

</html>