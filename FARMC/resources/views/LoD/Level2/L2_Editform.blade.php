<!DOCTYPE html>
<html lang="en">

<head>
    <title>Level 2 - EDIT FORM | Basic Function | FARMC - BFAR</title>
    <link rel="icon" href="{{ asset('assets/images/icon.png') }}" type="image/png">

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="codedthemes">
    <meta name="keywords"
        content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
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
                        <a href="index.html" class="logo"><img src="{{ asset('assets/images/Logo_BFAR.png') }}"
                                style=" width: 60px;" alt="logo"></a>
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
                                    Municipal / City FARMC • Level 2</a>
                            </li>
                        </ol>
                        <br>
                        <a href="{{ url('/level2') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i>
                            Back</a>
                    </div>
                </div>
                @foreach ($basics as $item)
                    <div class="card">
                        <div class="card-header">
                            <!-- <div class="col-sm-12 col-xs-12 waves-effect waves-light"> -->
                            <hr>
                            <div class="grid-material bg-general" style="text-align:center; font-size:20px"><b>BASIC
                                    FUNCTION</b></div>
                            <hr>
                            <div class="col-sm-6 col-xs-6 waves-effect waves-light">
                                <div class="grid-material bg-general"></div>
                            </div>
                            <form class="form-inline" method="POST"
                                action="{{ url('/edit-basicFunction/' . $item->profileForm_id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label for=""
                                                    class="col-md-12 col-form-label form-control-label">1. With
                                                    Municipal Fisheries Development Plan (MFDP)</label>
                                            </div>
                                            <br>
                                            <div class="form-radio" style="display: inline-block;">
                                                <div class="radio radio-inline">
                                                    <label>
                                                        <input type="radio" name="mfdp" value="Approved"
                                                            {{ old('mfdp', $item->mfdp) == 'Approved' ? 'checked' : '' }} /><i
                                                            class="helper"></i>Approved
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-radio" style="display: inline-block;margin-left:50px;">
                                                <div class="radio radio-inline">
                                                    <label>
                                                        <input type="radio" name="mfdp" value="Formulated"
                                                            {{ old('mfdp', $item->mfdp) == 'Formulated' ? 'checked' : '' }} /><i
                                                            class="helper"></i>Formulated
                                                    </label>
                                                </div>
                                            </div>

                                            <br><br>
                                            <div class="form-group m-r-15">
                                                <label for="" class="block form-control-label">Attached
                                                    copy</label>
                                                <input id="copy1_file" type="file" name="copy1_file"
                                                    class="form-control" style="width: 500px;"
                                                    accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                <br>
                                                @if ($item['copy1_file'])
                                                    <a href="{{ asset($item['copy1_file']) }}" target="_blank">View old
                                                        file</a>
                                                    {{-- <small>Previous file: {{ $item['copy1_file'] }}</small> --}}
                                                @endif
                                            </div>
                                            <div class="form-group m-r-15">
                                                <label for="" class="block form-control-label">Attached minutes
                                                    or documents</label>
                                                <input id="mindoc1_file" type="file" name="mindoc1_file"
                                                    class="form-control" style="width: 500px;"
                                                    accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                <br>
                                                @if ($item['mindoc1_file'])
                                                    <a href="{{ asset($item->mindoc1_file) }}" target="_blank">View old
                                                        file</a>
                                                @endif
                                            </div>
                                            <br><br>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label for=""
                                                    class="col-md-12 col-form-label form-control-label">2. With
                                                    Municipal Fishery Ordinance (MFO)</label>
                                            </div>
                                            <br>
                                            <div class="form-radio" style="display: inline-block;">
                                                <div class="radio radio-inline">
                                                    <label>
                                                        <input type="radio" name="mfo" value="Approved"
                                                            {{ old('mfo', $item->mfo) == 'Approved' ? 'checked' : '' }} /><i
                                                            class="helper"></i>Approved
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-radio" style="display: inline-block;margin-left:50px;">
                                                <div class="radio radio-inline">
                                                    <label>
                                                        <input type="radio" name="mfo" value="Formulated"
                                                            {{ old('mfo', $item->mfo) == 'Formulated' ? 'checked' : '' }} /><i
                                                            class="helper"></i>Formulated
                                                    </label>
                                                </div>
                                            </div>

                                            <br><br>
                                            <div class="form-group m-r-15">
                                                <label for="" class="block form-control-label">Attached
                                                    copy</label>
                                                <input id="copy2_file" type="file" name="copy2_file"
                                                    class="form-control" style="width: 500px;"
                                                    accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                <br>
                                                @if ($item['copy2_file'])
                                                    <a href="{{ asset($item['copy2_file']) }}" target="_blank">View
                                                        old
                                                        file</a>
                                                    {{-- <small>Previous file: {{ $item['copy2_file'] }}</small> --}}
                                                @endif
                                            </div>

                                            <div class="form-group m-r-15">
                                                <label for="" class="block form-control-label">Attached
                                                    minutes or documents</label>
                                                <input id="mindoc2_file" type="file" name="mindoc2_file"
                                                    class="form-control" style="width: 500px;"
                                                    accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                <br>
                                                @if ($item['mindoc2_file'])
                                                    <a href="{{ asset($item['mindoc2_file']) }}" target="_blank">View
                                                        old
                                                        file</a>
                                                    {{-- <small>Previous file: {{ $item['mindoc2_file'] }}</small> --}}
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-12" style="margin-top:20px">
                                            <div class="form-group row">
                                                <label for="municipality"
                                                    class="col-md-12 col-form-label form-control-label">3. Actively
                                                    assisting the law enforcement activity</label>
                                            </div>
                                        </div>


                                        <!-- <div class="col-md-12"> -->
                                        <br>
                                        <div class="col-md-6">
                                            <br>
                                            <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                <label class="input-checkbox checkbox-primary">
                                                    <input type="checkbox" name="bantaydt" id="checkbox"
                                                        {{ $item->bantaydt == 1 ? 'checked' : '' }}>
                                                    <span class="checkbox"></span>
                                                </label>
                                                <div class="captions">With Bantay Dagat Taskforce</div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                <label class="input-checkbox checkbox-primary">
                                                    <input type="checkbox" name="actfarmcbt" id="checkbox-1"
                                                        {{ $item->actfarmcbt == 1 ? 'checked' : '' }}>
                                                    <span class="checkbox"></span>
                                                </label>
                                                <div class="captions">With list of activity undertaken by the
                                                    FARMC-Bantay Dagat</div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                <label class="input-checkbox checkbox-primary">
                                                    <input type="checkbox" name="appfarmcbt" id="checkbox-2"
                                                        {{ $item->appfarmcbt == 1 ? 'checked' : '' }}>
                                                    <span class="checkbox"></span>
                                                </label>
                                                <div class="captions">With list of apprehention conducted by the
                                                    FARMC-Bantay Dagat</div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                <label class="input-checkbox checkbox-primary">
                                                    <input type="checkbox" name="caseestablished" id="checkbox-3"
                                                        {{ $item->caseestablished == 1 ? 'checked' : '' }}>
                                                    <span class="checkbox"></span>
                                                </label>
                                                <div class="captions">With list of cases established and functional
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-md-6" style=" line-height:3rem">
                                            <input id="bantaydt_file" type="file" name="bantaydt_file"
                                                class="form-control file-input" style="width: 250px;"
                                                accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            <br>
                                            @if ($item['bantaydt_file'])
                                                <a href="{{ asset($item->bantaydt_file) }}" target="_blank">View old
                                                    file</a>
                                            @endif
                                            <br>
                                            <input id="actfarmcbt_file" type="file" name="actfarmcbt_file"
                                                class="form-control file-input" style="width: 250px;"
                                                accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            <br>
                                            @if ($item['actfarmcbt_file'])
                                                <a href="{{ asset($item->actfarmcbt_file) }}" target="_blank">View
                                                    old
                                                    file</a>
                                            @endif
                                            <br>
                                            <input id="appfarmcbt_file" type="file" name="appfarmcbt_file"
                                                class="form-control file-input" style="width: 250px;"
                                                accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            <br>
                                            @if ($item['appfarmcbt_file'])
                                                <a href="{{ asset($item->appfarmcbt_file) }}" target="_blank">View
                                                    old
                                                    file</a>
                                            @endif
                                            <br>
                                            <input id="caseestablished_file" type="file"
                                                name="caseestablished_file" class="form-control file-input"
                                                style="width: 250px;" accept="image/*,.pdf,.doc,.docx"
                                                placeholder="">
                                            <br>
                                            @if ($item['caseestablished_file'])
                                                <a href="{{ asset($item->caseestablished_file) }}"
                                                    target="_blank">View old
                                                    file</a>
                                            @endif
                                        </div>

                                        <!-- <div class="col-md-12"> -->
                                        <div class="col-md-4" style="margin-top:10px">
                                            <div class="form-group row">
                                                <label for=""
                                                    class="col-md-12 col-form-label form-control-label">4. With MFARMC
                                                    Office established and functional </label>
                                            </div>
                                            <br>
                                            <div class="form-radio" style="display: inline-block;">
                                                <div class="radio radio-inline">
                                                    <label>
                                                        <input type="radio" name="mfarmcoffice" value="Yes"
                                                            {{ old('mfarmcoffice', $item->mfarmcoffice) == 'Yes' ? 'checked' : '' }} /><i
                                                            class="helper"></i>Yes
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-radio" style="display: inline-block;margin-left:50px;">
                                                <div class="radio radio-inline">
                                                    <label>
                                                        <input type="radio" name="mfarmcoffice" value="None"
                                                            {{ old('mfarmcoffice', $item->mfarmcoffice) == 'None' ? 'checked' : '' }} /><i
                                                            class="helper"></i>None
                                                    </label>
                                                </div>
                                            </div>

                                            <br><br>
                                        </div>


                                        <div class="col-md-8" style="margin-top: 50px;">
                                            <div class="form-group m-r-15">
                                                <input id="copy3_file" type="file" name="copy3_file"
                                                    class="form-control" style="width: 300px;"
                                                    accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                <br>
                                                @if ($item['copy3_file'])
                                                    <a href="{{ asset($item->copy3_file) }}" target="_blank">View old
                                                        file</a>
                                                @endif
                                            </div>
                                        </div>


                                        <div class="col-md-12" style="margin-top:20px">
                                            <div class="form-group row">
                                                <label for="municipality"
                                                    class="col-md-12 col-form-label form-control-label">5. Conducted
                                                    Regular Meeting</label>
                                            </div>
                                        </div>


                                        <!-- <div class="col-md-12"> -->

                                        <div class="col-md-3">
                                            <div class="form-radio">
                                                <div class="radio radio-inline">
                                                    <label>
                                                        <input type="radio" name="regmeet" value="Yes"
                                                            {{ old('regmeet', $item->regmeet) == 'Yes' ? 'checked' : '' }} /><i
                                                            class="helper"></i>Yes
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="regmeet" value="No"
                                                            {{ old('regmeet', $item->regmeet) == 'No' ? 'checked' : '' }} /><i
                                                            class="helper"></i>No
                                                    </label>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                        </div>

                                        <div class="col-md-4">
                                            <label for=""><small><em><b>If yes, schedule of regular
                                                            meeting</b></em></small></label>
                                            <div class="form-radio">
                                                <div class="radio radio-inline">
                                                    <label>
                                                        <input type="radio" name="regmeet" value="monthly"
                                                            {{ old('regmeet', $item->regmeet) == 'monthly' ? 'checked' : '' }} /><i
                                                            class="helper"></i>Monthly
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="regmeet" value="quarterly"
                                                            {{ old('regmeet', $item->regmeet) == 'quarterly' ? 'checked' : '' }} /><i
                                                            class="helper"></i>Quarterly
                                                    </label>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                        </div>
                                        <div class="col-md-5">
                                            <label for=""><small><em><b>Attached proof of
                                                            meeting</b></em></small></label>
                                            <br>
                                            <input id="minatt_file" type="file" name="minatt_file"
                                                class="form-control file-input" style="width: 250px;"
                                                accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            <br>
                                            @if ($item['minatt_file'])
                                                <a href="{{ asset($item->minatt_file) }}" target="_blank">View old
                                                    file</a>
                                            @endif
                                            <br>
                                            <input id="photodoc_file" type="file" name="photodoc_file"
                                                class="form-control file-input" style="width: 250px;"
                                                accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            <br>
                                            @if ($item['photodoc_file'])
                                                <a href="{{ asset($item->photodoc_file) }}" target="_blank">View old
                                                    file</a>
                                            @endif
                                            <br>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#confirmationModal">SAVE</button>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to submit now?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">No</button>
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
        function submitFormAndAddAnother1() {
            // Submit the form
            document.getElementById("FormId").submit();
            // Clear the form fields
            document.getElementById("FormId").reset();
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

</html>
