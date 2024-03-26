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
                        <form class="form-inline" method="POST" action="{{ url('/add-basic-info') }}" enctype="multipart/form-data">
                            @csrf
                            @if($errors->any())
                            <div class="alert alert-danger">
                                {{ $errors->first() }}
                            </div>
                            @endif

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
                                                    <input type="radio" name="radio" /><i class="helper"></i>Approved
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-radio" style="display: inline-block;margin-left:50px;">
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" name="radio" /><i class="helper"></i>Formulated
                                                </label>
                                            </div>
                                        </div>

                                        <br><br>
                                        <div class="form-group m-r-15">
                                            <label for="minutes1" class="block form-control-label">Attached copy</label>
                                            <input id="minutes1" type="file" name="minutes1" class="form-control" style="width: 500px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            @error('minutes1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group m-r-15">
                                            <label for="inline3mail" class="block form-control-label">Attached minutes or documents</label>
                                            <input id="photos1" type="file" name="photos1" class="form-control" style="width: 500px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            @error('photos1')
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
                                                    <input type="radio" name="radio" /><i class="helper"></i>Approved
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-radio" style="display: inline-block;margin-left:50px;">
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" name="radio" /><i class="helper"></i>Formulated
                                                </label>
                                            </div>
                                        </div>

                                        <br><br>
                                        <div class="form-group m-r-15">
                                            <label for="minutes1" class="block form-control-label">Attached copy</label>
                                            <input id="minutes1" type="file" name="minutes1" class="form-control" style="width: 500px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            @error('minutes1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group m-r-15">
                                            <label for="inline3mail" class="block form-control-label">Attached minutes or documents</label>
                                            <input id="photos1" type="file" name="photos1" class="form-control" style="width: 500px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            @error('photos1')
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
                                                <input type="checkbox" name="internalP" id="checkbox">
                                                <span class="checkbox"></span>
                                            </label>
                                            <div class="captions">With Bantay Dagat Taskforce</div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                            <label class="input-checkbox checkbox-primary">
                                                <input type="checkbox" name="fisherfolkR" id="checkbox-1">
                                                <span class="checkbox"></span>
                                            </label>
                                            <div class="captions">With list of activity undertaken by the FARMC-Bantay Dagat</div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                            <label class="input-checkbox checkbox-primary">
                                                <input type="checkbox" name="fisheriesP" id="checkbox-2">
                                                <span class="checkbox"></span>
                                            </label>
                                            <div class="captions">With list of apprehention conducted by the FARMC-Bantay Dagat</div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                            <label class="input-checkbox checkbox-primary">
                                                <input type="checkbox" name="formulationR" id="checkbox-3">
                                                <span class="checkbox"></span>
                                            </label>
                                            <div class="captions">With list of cases established and functional</div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-6" style=" line-height:3rem">
                                        <input id="internalP_file" type="file" name="internalP_file" class="form-control file-input" style="width: 250px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                        <small><b><em>Please attached list</b></em></small>
                                        <br>
                                        <input id="fisherfolkR_file" type="file" name="fisherfolkR_file" class="form-control file-input" style="width: 250px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                        <small><b><em>Please attached list</em></b></small>
                                        <br>
                                        <input id="fisheriesP_file" type="file" name="fisheriesP_file" class="form-control file-input" style="width: 250px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                        <small><b><em>Please attached list</em></b></small>
                                        <br>
                                        <input id="formulationR_file" type="file" name="formulationR_file" class="form-control file-input" style="width: 250px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
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
                                                    <input type="radio" name="radio" /><i class="helper"></i>Yes
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-radio" style="display: inline-block;margin-left:50px;">
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" name="radio" /><i class="helper"></i>None
                                                </label>
                                            </div>
                                        </div>

                                        <br><br>
                                    </div>


                                    <div class="col-md-8" style="margin-top: 50px;">
                                        <div class="form-group m-r-15">
                                            <input id="minutes1" type="file" name="minutes1" class="form-control" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            @error('minutes1')
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
                                            <label for="municipality" class="col-md-12 col-form-label form-control-label">3. Actively assisting the law enforcement activity</label>
                                        </div>
                                    </div>


                                    <!-- <div class="col-md-12"> -->

                                    <div class="col-md-3">
                                        <div class="form-radio">
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" name="radio" value="yes" onclick="toggleSchedule(this)" /><i class="helper"></i>Yes
                                                </label>
                                                <label>
                                                    <input type="radio" name="radio" value="no" onclick="toggleSchedule(this)" /><i class="helper"></i>No
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
                                                    <input type="radio" name="schedule" value="monthly" onclick="toggleProof(this)" /><i class="helper"></i>Monthly
                                                </label>
                                                <label>
                                                    <input type="radio" name="schedule" value="quarterly" onclick="toggleProof(this)" /><i class="helper"></i>Quarterly
                                                </label>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                    </div>
                                    <div id="proof" class="col-md-5" style="display:none;">
                                        <label for=""><small><em><b>Attached proof of meeting</b></em></small></label>
                                        <br>
                                        <input id="internalP_file" type="file" name="internalP_file" class="form-control file-input" style="width: 250px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                        <small><b><em>Minutes w/ attendance</b></em></small>
                                        <br>
                                        <input id="fisherfolkR_file" type="file" name="fisherfolkR_file" class="form-control file-input" style="width: 250px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                        <small><b><em>Photo documentation</em></b></small>
                                        <br>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12 text-right">
                                            <button type="submit" class="btn btn-primary">Next <i class="icon-arrow-right"></i></button>
                                        </div>
                                    </div>
                                    <!-- </div> -->
                                </div>
                            </div>
                    </div>
                    <!-- </div> -->
                    </form>
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
            $('#internalP_file').change(function() {
                if ($(this).val()) {
                    $('#checkbox').prop('checked', true);
                } else {
                    $('#checkbox').prop('checked', false);
                }
            });
            $('#fisherfolkR_file').change(function() {
                if ($(this).val()) {
                    $('#checkbox-1').prop('checked', true);
                } else {
                    $('#checkbox-1').prop('checked', false);
                }
            });
            $('#fisheriesP_file').change(function() {
                if ($(this).val()) {
                    $('#checkbox-2').prop('checked', true);
                } else {
                    $('#checkbox-2').prop('checked', false);
                }
            });
            $('#formulationR_file').change(function() {
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

            setupCheckbox('checkbox', 'internalP_file');
            setupCheckbox('checkbox-1', 'fisherfolkR_file');
            setupCheckbox('checkbox-2', 'fisheriesP_file');
            setupCheckbox('checkbox-3', 'formulationR_file');
        });
    </script>

</body>

</html>