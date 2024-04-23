<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fisherfolk Representative | FARMC - BFAR</title>
    <link rel="icon" href="{{ asset('assets/images/icon.png') }}" type="image/png">
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="codedthemes">
    <meta name="keywords" content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="codedthemes">


    <!--Date Picker Material Icon Css-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{ asset ('assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Select 2 css -->
    <link rel="stylesheet" href="{{ asset ('assets/plugins/select2/dist/css/select2.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/plugins/select2/css/s2-docs.css') }}">

    <!-- Multi Select css -->
    <link rel="stylesheet" href="{{ asset ('assets/plugins/bootstrap-multiselect/dist/css/bootstrap-multiselect.css') }}" />
    <link rel="stylesheet" href="{{ asset ('assets/plugins/multiselect/css/multi-select.css') }}" />

    <!-- Tags css -->
    <link rel="stylesheet" href="{{ asset ('assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}" />

    <!-- bash syntaxhighlighter css -->
    <link type="text/css" rel="stylesheet" href="{{ asset ('assets/plugins/syntaxhighlighter/styles/shCoreDjango.css') }}   " />

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
        <!-- Navbar-->
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
                        <a href="{{ url ('/mandatedmem') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i> Back</a>
                        <br><br>
                        <div class="card">
                            <div class="card-header">
                                <hr>
                                <div class="grid-material bg-general" style="text-align: center;"><b>A. COMPOSITION OF MEMBERSHIP</b>
                                </div>
                                <hr>
                                <div class="card-block">
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif

                                    <form method="post" action="{{ url('/add-fisherfolk-rep') }}" enctype="multipart/form-data" id="yourFormId">
                                        @csrf
                                        @method('PUT')
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <label for="inline3mail" class="block form-control-label"><strong>2. Fisherfolk Representative</strong></label>
                                                </div>
                                                <div class="col-md-3 text-left">
                                                    <select name="category" class="js-example-basic-single form-control">
                                                        <optgroup label="Fisherfolk Representative">
                                                            <option value="Municipal Fisherfolk">Municipal Fisherfolk</option>
                                                            <option value="Fisherworker">Fisherworker</option>
                                                            <option value="Commercial Fishing Operator">Commercial Fishing Operator</option>
                                                            <option value="Women Fisherfolk Sector Representative">Women Fisherfolk Sector Representative</option>
                                                            <option value="Youth Fisherfolk Sector Representative">Youth Fisherfolk Sector Representative</option>
                                                            <option value="Indigenous Peoples(IP's) if any">Indigenous Peoples(IP's) if any</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label for="h-email" class="col-md-3 col-form-label form-control-label">Name of Representative</label>
                                                    <div class="col-md-2">
                                                        <input type="text" name="name" id="h-email" class="form-control" style="width:780px" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
<br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                        <label class="input-checkbox checkbox-primary">
                                                            <input type="checkbox" id="endorsement_fisherfolk_checkbox" name="endorsement_fisherfolk" onchange="toggleFileInput(this)">
                                                            <span class="checkbox"></span>
                                                        </label>
                                                        <div class="captions">Endorsement of Fisherfolk Organization as their respective</div>
                                                        <input type="hidden" id="endorsement_fisherfolk_input" name="endorsement_fisherfolk" value="1">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <input id="endorsement_fisherfolk_inputf" type="file" name="endorsement_attachment" class="form-control" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <label for="h-email" class="captions">Barangay Certification</label>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                    <label class="input-checkbox checkbox-primary">
                                                        <input type="checkbox" id="atleast_one_year_checkbox" name="atleast_one_year" onchange="toggleFileInput(this)">
                                                        <span class="checkbox"></span>
                                                    </label>
                                                    <div class="captions">Atleast 1 year residency</div>
                                                </div>
                                                <!-- <input type="hidden" name="atleast_one_year" id="atleast_one_year_input"> -->
                                            </div>
                                            <div class="col-md-6" style="padding-left: 200px;">
                                                <input id="atleast_one_year_inputf" type="file" name="aoy_attachment" class="form-control" style="width:200px" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            </div>

                                            <div class="col-md-6">
                                                <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                    <label class="input-checkbox checkbox-primary">
                                                        <input type="checkbox" id="source_of_income_checkbox" name="source_of_income" onchange="toggleFileInput(this)">
                                                        <span class="checkbox"></span>
                                                    </label>
                                                    <div class="captions">Source of income (Capture/Culture/Processing)</div>
                                                </div>
                                                <input type="hidden" name="source_of_income" id="source_of_income_input" value="1">
                                            </div>
                                            <div class="col-md-6" style="padding-left: 200px;">
                                                <input id="source_of_income_inputf" type="file" name="soi_attachment" namez class="form-control" style="width:200px" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            </div>

                                            <div class="col-md-6">
                                                <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                    <label class="input-checkbox checkbox-primary">
                                                        <input type="checkbox" id="good_moral_checkbox" name="good_moral" onchange="toggleFileInput(this)">
                                                        <span class="checkbox"></span>
                                                    </label>
                                                    <div class="captions">Good Moral Character</div>
                                                </div>
                                                <input type="hidden" name="good_moral" id="good_moral_input">
                                            </div>
                                            <div class="col-md-6" style="padding-left: 200px;">
                                                <input id="good_moral_inputf" type="file" name="gmc_attachment" class="form-control" style="width:200px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            </div>

                                            <div class="col-md-12">
                                                <br>
                                                <div class="form-group row">
                                                    <label for="h-email" class="col-md-2 col-form-label form-control-label">Name of Organization</label>
                                                    <div class="col-md-2">
                                                        <input type="text" id="h-email" name="org_name" class="form-control" style="width:800px" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6" style=" line-height:4rem">
                                                <small><b><em>Date of Registration</b></em></small>
                                                <input id="inline3mail" type="date" name="date_of_reg" class="form-control" style="width: 300px;" placeholder="">
                                                <small><b><em>Date of Accreditation</em></b></small>
                                                <input id="inline3mail" type="date" name="date_of_accreditation" class="form-control" style="width: 300px;" placeholder="">
                                            </div>
                                            <div class="col-md-6" style=" line-height:4rem">
                                                <br>
                                                <input id="inline3mail" type="file" name="dor_file" class="form-control" style="width:300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                <br>
                                                <input id="inline3mail" type="file" name="doa_file" class="form-control" style="width:300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <br>
                                            <div class="col-md-10 text-center">
                                                <button type="submit" class="btn btn-primary">Add another</button>
                                            </div>
                                            <div class="col-md-2 text-right">
                                                <a href="{{url('/go-to-committee')}}" class="btn btn-primary">Next<i class="icon-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- </div> -->

        <!-- Select 2 js -->
        <script src="{{ asset ('assets/plugins/select2/dist/js/select2.full.min.js') }}"></script>

        <!-- Max-Length js -->
        <script src="{{ asset ('assets/plugins/bootstrap-maxlength/src/bootstrap-maxlength.js') }}"></script>

        <!-- Multi Select js -->
        <script src="{{ asset ('assets/plugins/bootstrap-multiselect/dist/js/bootstrap-multiselect.js') }}"></script>
        <script src="{{ asset ('assets/plugins/multiselect/js/jquery.multi-select.js') }}"></script>
        <script type="text/javascript" src="{{ asset ('assets/plugins/multi-select/js/jquery.quicksearch.js') }}"></script>

        <!-- bootstrap range picker -->
        <script type="text/javascript" src="{{ asset ('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

        <!-- custom js -->
        <script type="text/javascript" src="{{ asset ('assets/pages/advance-form.js') }}"></script>


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
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                function setupCheckbox(checkboxId, hiddenInputId) {
                    const checkbox = document.getElementById(checkboxId);
                    const hiddenInput = document.getElementById(hiddenInputId);

                    checkbox.addEventListener('change', function() {
                        hiddenInput.value = this.checked ? '1' : null;
                    });
                }

                setupCheckbox('endorsement_fisherfolk_checkbox', 'endorsement_fisherfolk_input');
                setupCheckbox('atleast_one_year_checkbox', 'atleast_one_year_input');
                setupCheckbox('source_of_income_checkbox', 'source_of_income_input');
                setupCheckbox('good_moral_checkbox', 'good_moral_input');
            });
        </script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            function toggleFileInput(checkbox) {
                const fileInput = document.getElementById(checkbox.id + '_inputf');
                fileInput.style.display = checkbox.checked ? 'block' : 'none';
                const hiddenInput = document.getElementById(checkbox.id + '_input');
                hiddenInput.value = checkbox.checked ? '1' : '';
            }

            document.querySelectorAll('input[type="file"]').forEach(fileInput => {
                fileInput.addEventListener('change', function() {
                    const checkboxId = this.id.replace('_inputf', '_checkbox');
                    const checkbox = document.getElementById(checkboxId);
                    checkbox.checked = true;
                    const hiddenInput = document.getElementById(checkboxId + '_input');
                    hiddenInput.value = '1';
                });
            });
        </script>

</body>

</html>