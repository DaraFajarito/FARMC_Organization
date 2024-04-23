<!DOCTYPE html>
<html lang="en">

<head>
    <title>Basic Structure | FARMC - BFAR</title>
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
                            <li class="breadcrumb-item"><a href="#">FARMC Strengthening | Organized FARMC | Municipal / City FARMC • Level 1</a>
                            </li>
                        </ol>
                        <br>
                        <a href="{{ url ('/level1') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i> Back</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <!-- <div class="col-sm-12 col-xs-12 waves-effect waves-light"> -->
                        <hr>
                        <div class="grid-material bg-general" style="text-align:center; font-size:20px"><b>BASIC STRUCTURE</b></div>
                        <hr>
                        <div class="col-sm-6 col-xs-6 waves-effect waves-light">
                            <div class="grid-material bg-general"></div>
                        </div>
                        <form class="form-inline" method="POST" action="{{ url('/add-basic-info') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="municipality" class="col-md-2 col-form-label form-control-label">Municipality / City</label>
                                            <div class="col-md-2">
                                                <input type="text" id="municipality" name="municipality" class="form-control" style="width:900px" placeholder="">
                                            </div>z
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <label for="province" class="col-md-2 col-form-label form-control-label">Province</label>
                                            <div class="col-md-2">
                                                <input type="text" id="province" name="province" class="form-control" style="width:900px" placeholder="">
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="form-group m-r-15">
                                            <label for="date" class="block form-control-label">Date organized</label>
                                            <input id="date" type="date" name="date_organized" class="form-control" style="width: 400px;" placeholder="">
                                        </div>

                                        <div class="form-group m-r-15">
                                            <label for="minutes1" class="block form-control-label">Attach the minutes</label>
                                            <input id="minutes1" type="file" name="minutes1" class="form-control" style="width: 195px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            @error('minutes1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group m-r-15">
                                            <label for="inline3mail" class="block form-control-label">Attach the Photos</label>
                                            <input id="photos1" type="file" name="photos1" class="form-control" style="width: 195px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            @error('photos1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group m-r-15">
                                            <label for="inline3mail" class="block form-control-label">Attach the Attendance</label>
                                            <input id="attendance1" type="file" name="attendance1" class="form-control" style="width: 195px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            @error('attendance1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <br>
                                        <hr>
                                        <div class="form-group m-r-15">
                                            <label for="inline3mail" class="block form-control-label">Date of Re-Organization</label>
                                            <input id="date_reorganized" type="date" name="date_reorganized" class="form-control" style="width: 400px;" placeholder="">
                                        </div>
                                        <div class="form-group m-r-15">
                                            <label for="inline3mail" class="block form-control-label"><br></label>
                                            <input id="minutes2" type="file" name="minutes2" class="form-control" style="width: 195px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            @error('minutes2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group m-r-15">
                                            <label for="inline3mail" class="block form-control-label"><br></label>
                                            <input id="photos2" type="file" name="photos2" class="form-control" style="width: 195px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            @error('photos2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group m-r-15">
                                            <label for="inline3mail" class="block form-control-label"><br></label>
                                            <input id="attendance2" type="file" name="attendance2" class="form-control" style="width: 195px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            @error('attendance2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <br>

                                        <!-- <div class="col-md-12"> -->
                                        <br>
                                        <div class="col-md-5">
                                            <br>
                                            <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                <label class="input-checkbox checkbox-primary">
                                                    <input type="checkbox" name="internalP" id="checkbox">
                                                    <span class="checkbox"></span>
                                                </label>
                                                <div class="captions">Internal Policy</div>
                                            </div>
                                            <br><br><br>
                                            <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                <label class="input-checkbox checkbox-primary">
                                                    <input type="checkbox" name="fisherfolkR" id="checkbox-1">
                                                    <span class="checkbox"></span>
                                                </label>
                                                <div class="captions">Fisherfolk Registry</div>
                                            </div>
                                            <br><br><br>
                                            <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                <label class="input-checkbox checkbox-primary">
                                                    <input type="checkbox" name="fisheriesP" id="checkbox-2">
                                                    <span class="checkbox"></span>
                                                </label>
                                                <div class="captions">Fisheries Profile</div>
                                            </div>
                                            <br><br><br>
                                            <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                <label class="input-checkbox checkbox-primary">
                                                    <input type="checkbox" name="formulationR" id="checkbox-3">
                                                    <span class="checkbox"></span>
                                                </label>
                                                <div class="captions">Formulation of Resolution and propose ordinances initiated </div>
                                            </div>
                                        </div>

                                        <div class="col-md-7" style=" line-height:4rem">
                                            <input id="internalP_file" type="file" name="internalP_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            <small><b><em>Attach Approved Internal Policy</b></em></small>
                                            <br>
                                            <input id="fisherfolkR_file" type="file" name="fisherfolkR_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            <small><b><em>Attach Fisherfolk Registry</em></b></small>
                                            <br>
                                            <input id="fisheriesP_file" type="file" name="fisheriesP_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            <small><b><em>Attach Fisheries Profile</em></b></small>
                                            <br>
                                            <input id="formulationR_file" type="file" name="formulationR_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            <small><b><em>Attach Files</em></b></small>
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
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
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