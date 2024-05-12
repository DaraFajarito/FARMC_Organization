<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form 1 - Fisherfolk Organization | BFAR - FARMC</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            /* White background */
        }

        table {
            border-collapse: collapse;
            width: calc(300% - 10px);
            /* Adjusted width */
            margin: 20px auto;
            /* Centered horizontally */
        }

        th,
        td {
            border: none;
            /* Remove borders */
            padding: 0;
        }

        th {
            background-color: #f0f0f0;
            /* Light gray background for headers */
            padding: 8px;
        }

        .form-group {
            margin-right: 10px;
        }

        input[type="text"] {
            width: calc(105% - 10px);
            /* Adjusted width for text inputs */
            box-sizing: border-box;
            padding: 6px;
            margin-bottom: 10px;
        }

        button {
            margin-top: -5px;
            font-size: smaller;
        }

        input.form-control {
            border: 1px solid #AAAAAA;
        }
    </style>


</head>

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
                        <h4>M/C FARMC Municipal | <small>Fisherfolk Association Profile</small></h4>
                        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                            <li class="breadcrumb-item">
                                <a href="index.php">
                                    <i class="icofont icofont-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Fisherfolk Organization | Municipal </a>
                            </li>
                        </ol>
                        <br>
                        {{-- <a href="{{ url('/FOMunicipal') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i>
                            Back</a> --}}
                    </div>
                </div>
                <form class="form-inline" method="POST" action="{{ url('/Form1_add_BasicInfo') }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method ('PUT')

                    <!-- <div class="card-header"> -->
                    <div class="card inline-form-style">
                        <br><br>
                        <div class="grid-material bg-general" style="text-align:center; font-size:20px"><b>FISHERFOLK
                                ASSOCIATION PROFILE</b></div>
                        <div class="captions" style="text-align:center; font-size:20px"> ( As of
                            <span style="display:inline-block;"><input id="" type="text"
                                    class="md-form-control" name="as_of"
                                    style="width: 250px; text-align:center;"></span>)
                        </div>
                        <br>
                        <div class="col-sm-6 col-xs-6 waves-effect waves-light">
                            <div class="grid-material bg-general"></div>
                        </div>

                        <!-- <div class="card-block"> -->

                        <div class="card-header">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group m-r-15">
                                            <div class="grid-material bg-general"><b>1. Name of Organization</b></div>
                                            <div class="col-md-12">
                                                <br>
                                                <input id="" name="name_of_org" type="text"
                                                    class="form-control" style="width: 1070px;" placeholder="">
                                                <br><br>

                                                <div class="form-group m-r-15">
                                                    <label for=""
                                                        class="block form-control-label">Address</em></label>
                                                    <div class="col-md-4">
                                                        <div class="text-center">
                                                            <input id="" name="add_barangay" type="text"
                                                                class="form-control" style="width: 300px;"
                                                                placeholder="">
                                                            <label for=""><small> Barangay </small></label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="text-center">
                                                            <input id="" name="add_city" type="text"
                                                                class="form-control" style="width: 300px;"
                                                                placeholder="">
                                                            <label for=""><small> City / Municipality
                                                                </small></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="text-center">
                                                            <input id="" name="add_province" type="text"
                                                                class="form-control" style="width: 300px;"
                                                                placeholder="">
                                                            <label for=""><small> Province </small></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <hr>
                                <!-- <div class="card-block"> -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="grid-material bg-general"><em>Sector Represented</em></div>
                                        <br>
                                        <div class="col-md-3">
                                            <label><input type="radio" name="sector_rep" value="Municipal" required>
                                                Municipal</label><br>
                                            <label><input type="radio" name="sector_rep" value="Fishworker" required>
                                                Fishworker</label>
                                        </div>
                                        <div class="col-md-3">
                                            <label><input type="radio" name="sector_rep" value="Commercial" required>
                                                Commercial</label><br>
                                            <label><input type="radio" name="sector_rep" value="Women" required>
                                                Women</label>
                                        </div>
                                        <div class="col-md-2">
                                            <label><input type="radio" name="sector_rep" value="Youth" required>
                                                Youth</label><br>
                                            <label><input type="radio" name="sector_rep" value="IPs" required>
                                                IPs</label>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- Adjusted width and CSS white-space property -->
                                            <labelwhite-space: nowrap;><input type="radio" name="sector_rep"
                                                    value="Other" required>
                                                Other's
                                                (Please Specify) </label>
                                                <br>
                                                <div class="col-md-2">
                                                    <input type="text" class="form-control" placeholder=""
                                                        name="sector_reg_yes" style="width: 200px;">
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="grid-material bg-general"><b>2. Status of Registration</b></div>
                                        <br>
                                        <div class="form-radio">
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" name="status_of_reg"
                                                        onclick="toggleSchedule(this)" value="Yes" /><i
                                                        class="helper"></i>Yes
                                                </label>
                                                <label>
                                                    <input type="radio" name="status_of_reg"
                                                        onclick="toggleSchedule(this)" value="No" /><i
                                                        class="helper"></i>No
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="schedule" class="col-md-4" style="display:none;">
                                        <label for=""><small><em><b>Specify,if yes</b></em></small></label>
                                        <div class="form-radio">
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" name="status_of_reg_yes"
                                                        onclick="toggleProof(this)" value="DOLE" /><i
                                                        class="helper"></i>DOLE
                                                </label>
                                                <label>
                                                    <input type="radio" name="status_of_reg_yes"
                                                        onclick="toggleProof(this)" value="SEC" /><i
                                                        class="helper"></i>SEC
                                                </label>
                                                <label>
                                                    <input type="radio" name="status_of_reg_yes"
                                                        onclick="toggleProof(this)" value="CDA" /><i
                                                        class="helper"></i>CDA
                                                </label>
                                                <label>
                                                    <input type="radio" name="status_of_reg_yes"
                                                        onclick="toggleProof(this)" value="Others" /><i
                                                        class="helper"></i>Others
                                                </label>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                    </div>

                                    <div id="proof" class="col-md-4" style="display:none;">
                                        <div class="form-group">
                                            <label for="reg_no">Registration No.</label>
                                            <input id="reg_no" type="text" class="form-control" placeholder=""
                                                name="reg_no">
                                        </div>
                                        <br>
                                        <br>
                                        <div class="form-group">
                                            <label for="date_reg">Date Registered</label>
                                            <input id="date_reg" type="text" class="form-control" placeholder=""
                                                name="date_reg">
                                        </div>
                                        <br>
                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="grid-material bg-general"><b>3. Status of Accreditation</b></div>
                                        <br>
                                        <div class="form-radio">
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" name="status_of_accre" value="Yes"
                                                        onclick="toggleAccre(this)" /><i class="helper"></i>Yes
                                                </label>
                                                <label>
                                                    <input type="radio" name="status_of_accre" value="No"
                                                        onclick="toggleAccre(this)" /><i class="helper"></i>No
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="accre" class="col-md-4" style="display:none;">
                                        <label for=""><small><em><b>Specify,if yes</b></em></small></label>
                                        <div class="form-radio">
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" name="status_of_accre_yes"
                                                        value="Municipal" onclick="toggleAccreno(this)" /><i
                                                        class="helper"></i>Municipal
                                                </label>
                                                <label>
                                                    <input type="radio" name="status_of_accre_yes"
                                                        value="Provincial" onclick="toggleAccreno(this)" /><i
                                                        class="helper"></i>Provincial
                                                </label>
                                                <label>
                                                    <input type="radio" name="status_of_accre_yes" value="National"
                                                        onclick="toggleAccreno(this)" /><i class="helper"></i>National
                                                </label>
                                                <label>
                                                    <input type="radio" name="status_of_accre_yes" value="Others"
                                                        onclick="toggleAccreno(this)" /><i class="helper"></i>Others
                                                </label>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                    </div>

                                    <div id="accreno" class="col-md-4" style="display:none;">
                                        <div class="form-group">
                                            <label for="reg_no">Accreditation No.</label>
                                            <input id="reg_no" type="text" class="form-control" placeholder=""
                                                name="accre_no">
                                        </div>
                                        <br>
                                        <br>
                                        <div class="form-group">
                                            <label for="date">Date Accredited</label>
                                            <input id="date" type="text" class="form-control" placeholder=""
                                                name="date_accre">
                                        </div>
                                        <br>
                                    </div>
                                    <div class="col-md-12 text-right">
                                        <button type="submit" class="btn btn-primary">NEXT <i
                                                class="icon-arrow-right"></i></button>
                                    </div>
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
            var proofDiv = document.getElementById('proof');
            if (elem.value === 'Yes') {
                scheduleDiv.style.display = 'block';
                // Hide proof if schedule is hidden
                proofDiv.style.display = 'none';
            } else {
                scheduleDiv.style.display = 'none';
                // Hide proof if schedule is hidden
                proofDiv.style.display = 'none';
            }
        }

        function toggleProof(elem) {
            var proofDiv = document.getElementById('proof');
            if (elem.value === 'DOLE' || elem.value === 'SEC' || elem.value === 'CDA' || elem.value === 'Others') {
                proofDiv.style.display = 'block';
            } else {
                proofDiv.style.display = 'none';
            }
        }
    </script>

    <script>
        function toggleAccre(elem) {
            var accreDiv = document.getElementById('accre');
            var accrenoDiv = document.getElementById('accreno');
            if (elem.value === 'Yes' && elem.checked) {
                accreDiv.style.display = 'block';
                accrenoDiv.style.display = 'none';
            } else {
                accreDiv.style.display = 'none';
                accrenoDiv.style.display = 'none';
            }
        }

        function toggleAccreno(elem) {
            var accrenoDiv = document.getElementById('accreno');
            if (elem.checked && (elem.value === 'Municipal' || elem.value === 'Provincial' || elem.value === 'National' ||
                    elem.value === 'Others')) {
                accrenoDiv.style.display = 'block';
            } else {
                accrenoDiv.style.display = 'none';
            }
        }
    </script>

    <script>
        document.querySelectorAll('input[name="culturalCommunity"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                if (this.value === 'yes') {
                    document.getElementById('culturalCommunityDetails').style.display = 'block';
                } else {
                    document.getElementById('culturalCommunityDetails').style.display = 'none';
                }
            });
        });
    </script>

    <script>
        document.querySelectorAll('input[name="Disability"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                if (this.value === 'yes') {
                    document.getElementById('DisabilityDetails').style.display = 'block';
                } else {
                    document.getElementById('DisabilityDetails').style.display = 'none';
                }
            });
        });
    </script>


    <script>
        function toggleTextBox(radioId) {
            var textBoxGroup = document.getElementById('textBoxGroup');
            if (radioId === 'christianRadio') {
                textBoxGroup.style.display = 'block';
            } else {
                textBoxGroup.style.display = 'none';
            }
        }
    </script>

    <script>
        function showTertiaryTextbox() {
            document.getElementById('tertiaryTextboxGroup').style.display = 'block';
            document.getElementById('tesdaTextboxGroup').style.display = 'none';
        }

        function showTesdaTextbox() {
            document.getElementById('tesdaTextboxGroup').style.display = 'block';
            document.getElementById('tertiaryTextboxGroup').style.display = 'none';
        }
    </script>

    <script>
        function addRow(dytable) {
            var table = document.getElementById(dytable);
            var tableBody = table.querySelector('tbody');
            var firstRow = tableBody.firstElementChild.cloneNode(true);
            tableBody.appendChild(firstRow);
        }
    </script>

    <script>
        function addRow(dynamic) {
            var table = document.getElementById(dynamic);
            var tableBody = table.querySelector('tbody');
            var firstRow = tableBody.firstElementChild.cloneNode(true);
            tableBody.appendChild(firstRow);
        }
    </script>
</body>

</html>
