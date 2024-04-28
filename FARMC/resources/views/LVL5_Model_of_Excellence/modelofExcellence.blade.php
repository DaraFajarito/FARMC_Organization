<!DOCTYPE html>
<html lang="en">

<head>
    <title>Level 5 - Model of Excellence | FARMC - BFAR</title>
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

    input.form-control {
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
                                    Municipal / City FARMC • Level 3</a>
                            </li>
                        </ol>
                        <br>
                        <a href="{{ url('/level3') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i>
                            Back</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <!-- <div class="col-sm-12 col-xs-12 waves-effect waves-light"> -->
                        <hr>
                        <div class="grid-material bg-general" style="text-align:center; font-size:20px"><b>MODEL OF
                                EXCELLENCE</b></div>
                        <hr>
                        <div class="col-sm-6 col-xs-6 waves-effect waves-light">
                            <div class="grid-material bg-general"></div>
                        </div>
                        <form class="form-inline" method="POST"
                            action="{{ url('/add-modelExcellence/' . $sustain->profileForm_id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method ('PUT')

                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="municipality"
                                                class="col-md-12 col-form-label form-control-label">1. Recognized by the
                                                LGU & community as a strong and dynamic partner in the management of
                                                municipal waters</label>
                                        </div>
                                    </div>

                                    <div class="col-md-12" style="margin-top:1rem">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label for="municipality" class="col-md-12 captions">1.1 List of
                                                    governing bodies that recognises the MFARMC as a member</label>
                                                <div class="col-md-12 text-center">
                                                    <div class="col-md-12" style="margin-bottom: 1rem;">
                                                        <input type="text" id="rec_list1" name="rec_list1"
                                                            class="form-control" style="width:1000px" placeholder="">
                                                    </div>
                                                    <div class="col-md-12" style="margin-bottom: 1rem;">
                                                        <input type="text" id="rec_list2" name="rec_list2"
                                                            class="form-control" style="width:1000px" placeholder="">
                                                    </div>
                                                    <div class="col-md-12" style="margin-bottom: 1rem;">
                                                        <input type="text" id="rec_list3" name="rec_list3"
                                                            class="form-control" style="width:1000px" placeholder="">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-12" style="margin-top:1rem">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label for="" class="col-md-12 captions">1.2 Please attached
                                                    Communications / Reports on the representations of FARMCs in various
                                                    fora, Assemblies, Dialogues and involvement in project planning,
                                                    monitoring and evaluation.</label>
                                                <div class="col-md-12 text-center">
                                                    <input id="rec_attach_file" type="file" name="rec_attach_file"
                                                        class="form-control file-input" style="width: 400px;"
                                                        accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                    <small><b><em>Please attached</b></em></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12" style="margin-top: 1rem;">
                                        <div class="form-group row">
                                            <label for="municipality"
                                                class="col-md-12 col-form-label form-control-label">2. Awards and
                                                citations/recognitions for exemplary performance received</label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label for="municipality" class="col-md-12 captions">2.1 Plaque of
                                                    Recognition received</label>
                                                <div class="col-md-12">

                                                    <div class="col-md-6">
                                                        <input type="text" id="award_plaq1" name="award_plaq1"
                                                            class="form-control" style="width:520px" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="award_plaq1_file" type="file"
                                                            name="award_plaq1_file" class="form-control file-input"
                                                            style="width: 300px;" accept="image/*,.pdf,.doc,.docx"
                                                            placeholder="">
                                                        <small><b><em>Please attached</b></em></small>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" id="award_plaq2" name="award_plaq2"
                                                            class="form-control" style="width:520px" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="award_plaq2_file" type="file"
                                                            name="award_plaq2_file" class="form-control file-input"
                                                            style="width: 300px;" accept="image/*,.pdf,.doc,.docx"
                                                            placeholder="">
                                                        <small><b><em>Please attached</b></em></small>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" id="award_plaq3" name="award_plaq3"
                                                            class="form-control" style="width:520px" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="award_plaq3_file" type="file"
                                                            name="award_plaq3_file" class="form-control file-input"
                                                            style="width: 300px;" accept="image/*,.pdf,.doc,.docx"
                                                            placeholder="">
                                                        <small><b><em>Please attached</b></em></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12" style="margin-top:2rem;">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label for="municipality" class="col-md-12 captions">2.2 Certificate
                                                    of Merit, Recognition and Appreciation received</label>
                                                <div class="col-md-12">

                                                    <div class="col-md-6">
                                                        <input type="text" id="award_cert1" name="award_cert1"
                                                            class="form-control" style="width:520px" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="award_cert1_file" type="file"
                                                            name="award_cert1_file" class="form-control file-input"
                                                            style="width: 300px;" accept="image/*,.pdf,.doc,.docx"
                                                            placeholder="">
                                                        <small><b><em>Please attached</b></em></small>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" id="award_cert2" name="award_cert2"
                                                            class="form-control" style="width:520px" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="award_cert2_file" type="file"
                                                            name="award_cert2_file" class="form-control file-input"
                                                            style="width: 300px;" accept="image/*,.pdf,.doc,.docx"
                                                            placeholder="">
                                                        <small><b><em>Please attached</b></em></small>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" id="award_cert3" name="award_cert3"
                                                            class="form-control" style="width:520px" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="award_cert3_file" type="file"
                                                            name="award_cert3_file" class="form-control file-input"
                                                            style="width: 300px;" accept="image/*,.pdf,.doc,.docx"
                                                            placeholder="">
                                                        <small><b><em>Please attached</b></em></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12" style="margin-top: 2rem;">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label for="municipality" class="col-md-12 captions">2.3 Approved
                                                    project and cash incentives received</label>
                                                <div class="col-md-12">

                                                    <div class="col-md-6">
                                                        <input type="text" id="award_proj1" name="award_proj1"
                                                            class="form-control" style="width:520px" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="award_proj1_file" type="file"
                                                            name="award_proj1_file" class="form-control file-input"
                                                            style="width: 300px;" accept="image/*,.pdf,.doc,.docx"
                                                            placeholder="">
                                                        <small><b><em>Please attached</b></em></small>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" id="award_proj2" name="award_proj2"
                                                            class="form-control" style="width:520px" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="award_proj2_file" type="file"
                                                            name="award_proj2_file" class="form-control file-input"
                                                            style="width: 300px;" accept="image/*,.pdf,.doc,.docx"
                                                            placeholder="">
                                                        <small><b><em>Please attached</b></em></small>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" id="award_proj3" name="award_proj3"
                                                            class="form-control" style="width:520px" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="award_proj3_file" type="file"
                                                            name="award_proj3_file" class="form-control file-input"
                                                            style="width: 300px;" accept="image/*,.pdf,.doc,.docx"
                                                            placeholder="">
                                                        <small><b><em>Please attached</b></em></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12" style="margin-top: 2rem;">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label for="municipality" class="col-md-12 captions">2.4 Trophies
                                                    received</label>
                                                <div class="col-md-12">

                                                    <div class="col-md-6">
                                                        <input type="text" id="award_trop1" name="award_trop1"
                                                            class="form-control" style="width:520px" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="award_trop1_file" type="file"
                                                            name="award_trop1_file" class="form-control file-input"
                                                            style="width: 300px;" accept="image/*,.pdf,.doc,.docx"
                                                            placeholder="">
                                                        <small><b><em>Please attached</b></em></small>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" id="award_trop2" name="award_trop2"
                                                            class="form-control" style="width:520px" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="award_trop2_file" type="file"
                                                            name="award_trop2_file" class="form-control file-input"
                                                            style="width: 300px;" accept="image/*,.pdf,.doc,.docx"
                                                            placeholder="">
                                                        <small><b><em>Please attached</b></em></small>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" id="award_trop3" name="award_trop3"
                                                            class="form-control" style="width:520px" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input id="award_trop3_file" type="file"
                                                            name="award_trop3_file" class="form-control file-input"
                                                            style="width: 300px;" accept="image/*,.pdf,.doc,.docx"
                                                            placeholder="">
                                                        <small><b><em>Please attached</b></em></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-12" style="margin-top: 1rem;">
                                        <div class="form-group row">
                                            <label for="municipality"
                                                class="col-md-12 col-form-label form-control-label">3. Brochures /
                                                handouts / publications of success stories printed / documented</label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label for="municipality" class="col-md-12 captions">3.1 IEC Materials
                                                    of M/CFARMC success stories</label>
                                                <div class="col-md-12">
                                                    <div class="col-md-5" style="margin-top: 20px;">
                                                        <br>
                                                        <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                            <label class="input-checkbox checkbox-primary">
                                                                <input type="checkbox" name="iec_broch"
                                                                    id="checkbox">
                                                                <span class="checkbox"></span>
                                                            </label>
                                                            <div class="captions">Brochures</div>
                                                        </div>
                                                        <br>
                                                        <br>
                                                        <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                            <label class="input-checkbox checkbox-primary">
                                                                <input type="checkbox" name="iec_hand"
                                                                    id="checkbox-1">
                                                                <span class="checkbox"></span>
                                                            </label>
                                                            <div class="captions">Handouts</div>
                                                        </div>
                                                        <br>
                                                        <br>
                                                        <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                            <label class="input-checkbox checkbox-primary">
                                                                <input type="checkbox" name="iec_pub"
                                                                    id="checkbox-2">
                                                                <span class="checkbox"></span>
                                                            </label>
                                                            <div class="captions">Publication</div>
                                                        </div>
                                                        <br>
                                                        <br>
                                                        <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                            <label class="input-checkbox checkbox-primary">
                                                                <input type="checkbox" name="iec_AVP"
                                                                    id="checkbox-3">
                                                                <span class="checkbox"></span>
                                                            </label>
                                                            <div class="captions">Audio Visual Production</div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="col-md-7" style=" line-height:3rem">
                                                        <input id="iec_broch_file" type="file"
                                                            name="iec_broch_file" class="form-control file-input"
                                                            style="width: 250px;" accept="image/*,.pdf,.doc,.docx"
                                                            placeholder="">
                                                        <small><b><em>Please attached copy</b></em></small>
                                                        <br>
                                                        <input id="iec_hand_file" type="file" name="iec_hand_file"
                                                            class="form-control file-input" style="width: 250px;"
                                                            accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                        <small><b><em>Please attached copy</em></b></small>
                                                        <br>
                                                        <input id="iec_pub_file" type="file" name="iec_pub_file"
                                                            class="form-control file-input" style="width: 250px;"
                                                            accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                        <small><b><em>Please attached copy</em></b></small>
                                                        <br>
                                                        <input id="iec_AVP_file" type="file" name="iec_AVP_file"
                                                            class="form-control file-input" style="width: 250px;"
                                                            accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                        <small><b><em>Please attached copy</em></b></small>
                                                    </div>

                                                </div>



                                            </div>
                                            <div class="row" style="margin-top:2rem">
                                                <div class="col-md-12 text-right">
                                                    <button type="button" class="btn btn-primary"
                                                        data-toggle="modal"
                                                        data-target="#confirmationModal">SUBMIT</button>
                                                </div>
                                            </div>
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
                $('#iec_broch_file').change(function() {
                    if ($(this).val()) {
                        $('#checkbox').prop('checked', true);
                    } else {
                        $('#checkbox').prop('checked', false);
                    }
                });
                $('#iec_hand_file').change(function() {
                    if ($(this).val()) {
                        $('#checkbox-1').prop('checked', true);
                    } else {
                        $('#checkbox-1').prop('checked', false);
                    }
                });
                $('#iec_pub_file').change(function() {
                    if ($(this).val()) {
                        $('#checkbox-2').prop('checked', true);
                    } else {
                        $('#checkbox-2').prop('checked', false);
                    }
                });
                $('#iec_AVP_file').change(function() {
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

                setupCheckbox('checkbox', 'iec_broch_file');
                setupCheckbox('checkbox-1', 'iec_hand_file');
                setupCheckbox('checkbox-2', 'iec_pub_file');
                setupCheckbox('checkbox-3', 'iec_AVP_file');
            });
        </script>

</body>

</html>
