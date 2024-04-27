<!DOCTYPE html>
<html lang="en">

<head>
    <title>Level 2 - Basic Function | FARMC - BFAR</title>
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

    input.form-control{
        border: 1px solid #AAAAAA;
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
                            <li class="breadcrumb-item"><a href="#">FARMC Strengthening | Organized FARMC | Municipal / City FARMC • Level 2</a>
                            </li>
                        </ol>
                        <br>
                        <a href="{{ url ('/level2') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i> Back</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <!-- <div class="col-sm-12 col-xs-12 waves-effect waves-light"> -->
                        <hr>
                        <div class="grid-material bg-general" style="text-align:center; font-size:20px"><b>BASIC FUNCTION</b></div>
                        <hr>
                        <div class="col-sm-6 col-xs-6 waves-effect waves-light">
                            <div class="grid-material bg-general"></div>
                        </div>

                        <form class="form-inline" method="POST" action="{{ url ('/add-basicFunction/' . $data->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="municipality" class="col-md-12 col-form-label form-control-label">1. With Municipal Fisheries Development Plan (MFDP)</label>
                                        </div>
                                        <br>
                                        <div class="form-radio" style="display: inline-block;">
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" name="mfdp" value="Approved" /><i class="helper"></i>Approved
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-radio" style="display: inline-block;margin-left:50px;">
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" name="mfdp" value="Formulated"><i class="helper"></i>Formulated
                                                </label>
                                            </div>
                                        </div>

                                        <br><br>
                                        <div class="form-group m-r-15">
                                            <label for="copy1_file" class="block form-control-label">Attached copy</label>
                                            <input id="copy1_file" type="file" name="copy1_file" class="form-control" style="width: 500px;" accept="image/*,.pdf,.doc,.docx" placeholder="" value="">
                                            @error('copy1_file')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group m-r-15">
                                            <label for="mindoc1_file" class="block form-control-label">Attached minutes or documents</label>
                                            <input id="mindoc1_file" type="file" name="mindoc1_file" class="form-control" style="width: 500px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            @error('mindoc1_file')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <br><br>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="municipality" class="col-md-12 col-form-label form-control-label">2. With Municipal Fishery Ordinance (MFO)</label>
                                        </div>
                                        <br>
                                        <div class="form-radio" style="display: inline-block;">
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" name="mfo" value="Approved" /><i class="helper"></i>Approved
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-radio" style="display: inline-block;margin-left:50px;">
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" name="mfo" value="Formulated" /><i class="helper"></i>Formulated
                                                </label>
                                            </div>
                                        </div>

                                        <br><br>
                                        <div class="form-group m-r-15">
                                            <label for="copy2_file" class="block form-control-label">Attached copy</label>
                                            <input id="copy2_file" type="file" name="copy2_file" class="form-control" style="width: 500px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            @error('copy2_file')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group m-r-15">
                                            <label for="mindoc2_file" class="block form-control-label">Attached minutes or documents</label>
                                            <input id="mindoc2_file" type="file" name="mindoc2_file" class="form-control" style="width: 500px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            @error('mindoc2_file')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12" style="margin-top:20px">
                                        <div class="form-group row">
                                            <label for="municipality" class="col-md-12 col-form-label form-control-label">3. Actively assisting the law enforcement activity</label>
                                        </div>
                                    </div>


                                    <!-- <div class="col-md-12"> -->
                                    <br>
                                    <div class="col-md-6">
                                        <br>
                                        <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                            <label class="input-checkbox checkbox-primary">
                                                <input type="checkbox" name="bantaydt" id="checkbox">
                                                <span class="checkbox"></span>
                                            </label>
                                            <div class="captions">With Bantay Dagat Taskforce</div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                            <label class="input-checkbox checkbox-primary">
                                                <input type="checkbox" name="actfarmcbt" id="checkbox-1">
                                                <span class="checkbox"></span>
                                            </label>
                                            <div class="captions">With list of activity undertaken by the FARMC-Bantay Dagat</div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                            <label class="input-checkbox checkbox-primary">
                                                <input type="checkbox" name="appfarmcbt" id="checkbox-2">
                                                <span class="checkbox"></span>
                                            </label>
                                            <div class="captions">With list of apprehention conducted by the FARMC-Bantay Dagat</div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                            <label class="input-checkbox checkbox-primary">
                                                <input type="checkbox" name="caseestablished" id="checkbox-3">
                                                <span class="checkbox"></span>
                                            </label>
                                            <div class="captions">With list of cases established and functional</div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-6" style=" line-height:3rem">
                                        <input id="bantaydt_file" type="file" name="bantaydt_file" class="form-control file-input" style="width: 250px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                        <small><b><em>Please attached list</b></em></small>
                                        <br>
                                        <input id="actfarmcbt_file" type="file" name="actfarmcbt_file" class="form-control file-input" style="width: 250px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                        <small><b><em>Please attached list</em></b></small>
                                        <br>
                                        <input id="appfarmcbt_file" type="file" name="appfarmcbt_file" class="form-control file-input" style="width: 250px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                        <small><b><em>Please attached list</em></b></small>
                                        <br>
                                        <input id="caseestablished_file" type="file" name="caseestablished_file" class="form-control file-input" style="width: 250px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                        <small><b><em>Please attached list</em></b></small>
                                    </div>

                                    <!-- <div class="col-md-12"> -->
                                    <div class="col-md-4" style="margin-top:10px">
                                        <div class="form-group row">
                                            <label for="municipality" class="col-md-12 col-form-label form-control-label">4. With MFARMC Office established and functional </label>
                                        </div>
                                        <br>
                                        <div class="form-radio" style="display: inline-block;">
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" name="mfarmcoffice" value="Yes" /><i class="helper"></i>Yes
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-radio" style="display: inline-block;margin-left:50px;">
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" name="mfarmcoffice" value="" /><i class="helper"></i>None
                                                </label>
                                            </div>
                                        </div>

                                        <br><br>
                                    </div>

                                    <div class="col-md-8" style="margin-top: 50px;">
                                        <div class="form-group m-r-15">
                                            <input id="copy3_file" type="file" name="copy3_file" class="form-control" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="" @if(!$errors->has('copy3_file') && !old('copy3_file')) value="N/A" @endif>
                                            @error('copy3_file')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            <span>
                                                <div class="captions"><small><em><b> &nbsp; Attached copy</b></em></small></div>
                                            </span>
                                        </div>
                                </div>



                                <div class="col-md-12" style="margin-top:20px">
                                    <div class="form-group row">
                                        <label for="municipality" class="col-md-12 col-form-label form-control-label">5. Conduct Regular Meeting</label>
                                    </div>
                                </div>


                                <!-- <div class="col-md-12"> -->

                                <div class="col-md-3">
                                    <div class="form-radio">
                                        <div class="radio radio-inline">
                                            <label>
                                                <input type="radio" name="regmeet" value="yes" onclick="toggleSchedule(this)" /><i class="helper"></i>Yes
                                            </label>
                                            <label>
                                                <input type="radio" name="" value=""  /><i class="helper"></i>No
                                            </label>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                </div>

                                <div id="schedule" class="col-md-4" style="display:none;">
                                    <label for=""><small><em><b>If yes, schedule of regular meeting</b></em></small></label>
                                    <div class="form-radio">
                                        <div class="radio radio-inline">
                                            <label>
                                                <input type="radio" name="regmeet" value="monthly" onclick="toggleProof(this)" /><i class="helper"></i>Monthly
                                            </label>
                                            <label>
                                                <input type="radio" name="regmeet" value="quarterly" onclick="toggleProof(this)" /><i class="helper"></i>Quarterly
                                            </label>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                </div>
                                <div id="proof" class="col-md-5" style="display:none;">
                                    <label for=""><small><em><b>Attached proof of meeting</b></em></small></label>
                                    <br>
                                    <input id="minatt_file" type="file" name="minatt_file" class="form-control file-input" style="width: 250px;" accept="image/*,.pdf,.doc,.docx" placeholder="" value="N/A">
                                    <small><b><em>Minutes w/ attendance</b></em></small>
                                    <br>
                                    <input id="photodoc_file" type="file" name="photodoc_file" class="form-control file-input" style="width: 250px;" accept="image/*,.pdf,.doc,.docx" placeholder="" value="N/A">
                                    <small><b><em>Photo documentation</em></b></small>
                                    <br>
                                </div>


                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#confirmationModal">SUBMIT</button>
                                        <!-- <button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right"></i></button> -->
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
    </div>

    <script>
        function toggleSchedule(elem) {
            var scheduleDiv = document.getElementById('schedule');
            if (elem.value === 'yes') {
                scheduleDiv.style.display = 'block';
            } else {
                scheduleDiv.style.display = 'none';
            }
            // Hide proof if schedule is hidden
            var proofDiv = document.getElementById('proof');
            proofDiv.style.display = 'none';
        }

        function toggleProof(elem) {
            var proofDiv = document.getElementById('proof');
            if (elem.value === 'monthly' || elem.value === 'quarterly') {
                proofDiv.style.display = 'block';
            } else {
                proofDiv.style.display = 'none';
            }
        }
    </script>


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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#bantaydt_file').change(function() {
                if ($(this).val()) {
                    $('#checkbox').prop('checked', true);
                } else {
                    $('#checkbox').prop('checked', false);
                }
            });
            $('#actfarmcbt_file').change(function() {
                if ($(this).val()) {
                    $('#checkbox-1').prop('checked', true);
                } else {
                    $('#checkbox-1').prop('checked', false);
                }
            });
            $('#appfarmcbt_file').change(function() {
                if ($(this).val()) {
                    $('#checkbox-2').prop('checked', true);
                } else {
                    $('#checkbox-2').prop('checked', false);
                }
            });
            $('#caseestablished_file').change(function() {
                if ($(this).val()) {
                    $('#checkbox-3').prop('checked', true);
                } else {
                    $('#checkbox-3').prop('checked', false);
                }
            });

            // Add similar change event listeners for other file inputs
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function setupCheckbox(checkboxId, hiddenInputId) {
                const checkbox = document.getElementById(checkboxId);
                const hiddenInput = document.getElementById(hiddenInputId);

                checkbox.addEventListener('change', function() {
                    hiddenInput.value = this.checked ? '1' : null;
                });
            }

            setupCheckbox('checkbox', 'bantaydt_file');
            setupCheckbox('checkbox-1', 'actfarmcbt_file');
            setupCheckbox('checkbox-2', 'appfarmcbt_file');
            setupCheckbox('checkbox-3', 'caseestablished_file');
        });
    </script>
</body>

<script>
    function submitFormAndAddAnother1() {
        // Submit the form
        document.getElementById("FormId").submit();
        // Clear the form fields
        document.getElementById("FormId").reset();
    }
</script>

</html>
