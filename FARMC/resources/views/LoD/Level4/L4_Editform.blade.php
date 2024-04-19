<!DOCTYPE html>
<html lang="en">

<head>
    <title>Level 4 - EDIT FORM | Sustainability Mechanism | FARMC - BFAR</title>
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
                            <li class="breadcrumb-item"><a href="#">FARMC Strengthening | Organized FARMC | Municipal / City FARMC • Level 4</a>
                            </li>
                        </ol>
                        <br>
                        <a href="{{ url ('/level4') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i> Back</a>
                    </div>
                </div>
                @foreach($sustain as $item)
                <div class="card">
                    <div class="card-header">
                        <!-- <div class="col-sm-12 col-xs-12 waves-effect waves-light"> -->
                        <hr>
                        <div class="grid-material bg-general" style="text-align:center; font-size:20px"><b>SUSTAINABILITY MECHANISM</b></div>
                        <hr>
                        <div class="col-sm-6 col-xs-6 waves-effect waves-light">
                            <div class="grid-material bg-general"></div>
                        </div>
                        <form class="form-inline" method="POST" action="{{ url('/edit-sustainabilityMechanism/'. $item->profileForm_id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="municipality" class="col-md-12 col-form-label form-control-label">1. Data Bank/Databank system established and accesible</label>
                                        </div>
                                        <br>
                                        <label for="municipality" class="col-md-12 captions">1.1 FARMC has undergone training on FARMC & Fish Catch Database System</label>
                                        <div class="col-md-12" style="margin-top: 10px;">
                                            <div class="form-radio" style="display: inline-block;">
                                                <div class="radio radio-inline">
                                                    <label>
                                                        <input type="radio" name="data_training" value="Yes" {{ old('data_training', $item->data_training) == 'Yes' ? 'checked' : '' }} /><i class="helper"></i>Yes
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-radio" style="display: inline-block;margin-left:50px;">
                                                <div class="radio radio-inline">
                                                    <label>
                                                        <input type="radio" name="data_training" value="No" {{ old('data_training', $item->data_training) == 'No' ? 'checked' : '' }} /><i class="helper"></i>No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <label for="municipality" class="col-md-12 captions" style="margin-top:1rem">1.2 FARMC & Fish Catch Database System installed and operational in the FARMC Office Computer</label>
                                        <div class="col-md-12" style="margin-top: 10px;">
                                            <div class="form-radio" style="display: inline-block;">
                                                <div class="radio radio-inline">
                                                    <label>
                                                        <input type="radio" name="data_fishcatch" value="Yes" {{ old('data_fishcatch', $item->data_fishcatch) == 'Yes' ? 'checked' : '' }} /><i class="helper"></i>Yes
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-radio" style="display: inline-block;margin-left:50px;">
                                                <div class="radio radio-inline">
                                                    <label>
                                                        <input type="radio" name="data_fishcatch" value="No" {{ old('data_fishcatch', $item->data_fishcatch) == 'No' ? 'checked' : '' }} /><i class="helper"></i>No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <label for="municipality" class="col-md-12 captions" style="margin-top:1rem">1.3 Fisherfolk Registration Forms duly accomplished and encoded in the FARMC Database System</label>
                                        <div class="col-md-12" style="margin-top: 10px;">
                                            <div class="form-radio" style="display: inline-block;">
                                                <div class="radio radio-inline">
                                                    <label>
                                                        <input type="radio" name="data_regforms" value="Yes" {{ old('data_regforms', $item->data_regforms) == 'Yes' ? 'checked' : '' }} /><i class="helper"></i>Yes
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-radio" style="display: inline-block;margin-left:50px;">
                                                <div class="radio radio-inline">
                                                    <label>
                                                        <input type="radio" name="data_regforms" value="No" {{ old('data_regforms', $item->data_regforms) == 'No' ? 'checked' : '' }} /><i class="helper"></i>No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group row" style="margin-top: 1rem;">
                                            <label for="municipality" class="col-md-12 col-form-label form-control-label">2. Established financial capability and fund sourcing ability</label>
                                        </div>
                                        <br>
                                        <label for="municipality" class="col-md-12 captions">2.1 Amount of MFARMC funds allocated by the LGU</label>
                                        <div class="col-md-12" style="margin-top: 10px;">
                                            <div class="col-md-4">
                                                <div class="form-radio" style="display: inline-block;">
                                                    <div class="radio radio-inline">
                                                        <label>
                                                            <input type="radio" name="est_funds" value="Yes" {{ old('est_funds', $item->est_funds) == 'Yes' ? 'checked' : '' }} /><i class="helper"></i>Yes
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="form-radio" style="display: inline-block;margin-left:50px;">
                                                    <div class="radio radio-inline">
                                                        <label>
                                                            <input type="radio" name="est_funds" value="No" {{ old('est_funds', $item->est_funds) == 'No' ? 'checked' : '' }} /><i class="helper"></i>No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <input id="est_funds_file" type="file" name="est_funds_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                <br>
                                                @if ($item['est_funds_file'])
                                                <small>Previous file: {{ $item['est_funds_file'] }}</small>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-12" style="margin-top:1rem">
                                            <div class="form-group row">
                                                <label for="" class="col-md-12 captions">2.2 Other sources of funds obtained for the FARMC & its operation</label>
                                                <div class="col-md-12">

                                                    <div class="col-md-6">
                                                        <input type="text" id="othersources1" name="othersources1" class="form-control" style="width:520px" value="{{ old('othersources1', $item->othersources1) }}" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="othersources1_file" type="file" name="othersources1_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                        <br>
                                                        @if ($item['othersources1_file'])
                                                        <small>Previous file: {{ $item['othersources1_file'] }}</small>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" id="othersources2" name="othersources2" class="form-control" style="width:520px" value="{{ old('othersources2', $item->othersources2) }}"  placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="othersources2_file" type="file" name="othersources2_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                        <br>
                                                        @if ($item['othersources2_file'])
                                                        <small>Previous file: {{ $item['othersources2_file'] }}</small>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" id="othersources3" name="othersources3" class="form-control" style="width:520px" value="{{ old('othersources3', $item->othersources3) }}" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="othersources3_file" type="file" name="othersources3_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                        <br>
                                                        @if ($item['othersources3_file'])
                                                        <small>Previous file: {{ $item['othersources3_file'] }}</small>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row" style="margin-top: 270px;">
                                            <div class="col-md-12 text-right">
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#confirmationModal">SUBMIT</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
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
                @endforeach
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