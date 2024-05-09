<!DOCTYPE html>
<html lang="en">

<head>
    <title>General Information - Fisherfolk Organization | BFAR - FARMC</title>
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

                <form class="form-inline" method="POST" action="{{ url('/Form2_add_GenInfo') }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method ('PUT')
                    <div class="card inline-form-style">
                        <br><br>
                        <div class="grid-material bg-general" style="text-align:center; font-size:20px"><b>COOPERATIVE
                                PROFILE</b></div>
                        <div class="captions" style="text-align:center; font-size:20px"> ( As of
                            <span style="display:inline-block;"><input id="" type="text"
                                   name="as_of" class="md-form-control" style="width: 250px; text-align:center;"></span>)
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
                                        {{-- <form class="form-inline"> --}}
                                        <div class="form-group m-r-15">
                                            <div class="grid-material bg-general">Name of Cooperative</div>
                                            <div class="col-md-12">
                                                <input id="" type="text" class="form-control"
                                                    style="width: 1070px;" name="name_of_coop" placeholder="">
                                            </div>
                                            <br><br>
                                            <div class="form-group m-r-15">

                                                <div class="grid-material bg-general">Address</div>
                                                <div class="col-md-4">
                                                    <div class="text-center">
                                                        <input id="" type="text" class="form-control"
                                                            style="width: 300px;" name="add_barangay" placeholder="">
                                                        <label for=""><small> Barangay </small></label>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="text-center">
                                                        <input id="" type="text" class="form-control"
                                                            style="width: 300px;" name="add_city" placeholder="">
                                                        <label for=""><small> City / Municipality
                                                            </small></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="text-center">
                                                        <input id="" type="text" class="form-control"
                                                            style="width: 300px;" name="add_province" placeholder="">
                                                        <label for=""><small> Province </small></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- </form> --}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="grid-material bg-general"><em>Sector Represented</em></div>
                                        <br>
                                        <div class="col-md-3">
                                            <label><input type="radio" name="sector_rep" value="Municipal">
                                                Municipal</label><br>
                                            <label><input type="radio" name="sector_rep" value="Fishworker">
                                                Fishworker</label>
                                        </div>
                                        <div class="col-md-3">
                                            <label><input type="radio" name="sector_rep" value="Commercial">
                                                Commercial</label><br>
                                            <label><input type="radio" name="sector_rep" value="Women">
                                                Women</label>
                                        </div>
                                        <div class="col-md-2">
                                            <label><input type="radio" name="sector_rep" value="Youth">
                                                Youth</label><br>
                                            <label><input type="radio" name="sector_rep" value="IPs">
                                                IPs</label>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- Adjusted width and CSS white-space property -->
                                            <labelwhite-space: nowrap;><input type="radio" name="sector_rep"
                                                    value="Others">
                                                Other's
                                                (Please Specify)</label>
                                                <br>
                                                <div class="col-md-2">
                                                    <input type="text" class="form-control" placeholder=""
                                                        name="sector_rep_yes" style="width: 200px;">
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <hr> <br>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="grid-material bg-general">Cooperative Identification Number
                                                (CIN)
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <input id="" type="text" class="form-control"
                                                style="width: 90%;" name="CIN" placeholder="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="grid-material bg-general">Date of Latest Amendment:</div>
                                        </div>
                                        <div class="col-md-8">
                                            <input id="" type="date" class="form-control"
                                                style="width: 90%;" name="date_of_amend" placeholder="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="grid-material bg-general">Short History of Cooperative:</div>
                                        </div>
                                        <br><br>
                                        <div class="col-md-12">
                                            <textarea rows="6" id="" type="text" class="form-control" style="width: 95%;" name="short_history" placeholder=""></textarea>
                                        </div>
                                    </div>
                            </div>
                            <hr>
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="grid-material bg-general"><b>I. &nbsp; GENERAL INFORMATION</b>
                                        </div>
                                        <br>
                                        <div class="grid-material bg-general">Registration Details:</div>
                                        <br>
                                        <div class="col-md-12">
                                            <div class="col-md-3">
                                                <div class="grid-material bg-general">Original Date of Registration:
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="text-center">
                                                    <input id="" type="text" class="form-control"
                                                        style="width: 250px;" name="RD_ODR_regnum" placeholder="">
                                                    <label for=""><small> Number </small></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="text-center">
                                                    <input id="" type="date" class="form-control"
                                                        style="width: 250px;" name="RD_ODR_regdate" placeholder="">
                                                    <label for=""><small> Date </small></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="text-center">
                                                    <input id="" type="file" class="form-control"
                                                        style="width: 250px;" name="RD_ODR_regfile" placeholder="">
                                                    <label for=""><small> Please attach files </small></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="col-md-3">
                                                <div class="grid-material bg-general">RA 9520 Registration:</div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="text-center">
                                                    <input id="" type="text" class="form-control"
                                                        style="width: 250px;" name="RD_RA_regnum" placeholder="">
                                                    <label for=""><small> Number </small></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="text-center">
                                                    <input id="" type="date" class="form-control"
                                                        style="width: 250px;" name="RD_RA_regdate" placeholder="">
                                                    <label for=""><small> Date </small></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="text-center">
                                                    <input id="" type="file" class="form-control"
                                                        style="width: 250px;" name="RD_RA_regfile" placeholder="">
                                                    <label for=""><small> Please attach files </small></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="col-md-12">
                                                <div class="grid-material bg-general">Membership Operation: (Area of
                                                    Membership)</div>
                                            </div>
                                        </div>
                                        <br><br><br><br><br><br>
                                        <div class="col-md-12">
                                            <br>
                                            <div class="form-radio">
                                                <div class="radio">
                                                    <div class="col-md-3">
                                                        <label>
                                                            <input type="radio" name="RD_memOp" value="Municipal" /><i
                                                                class="helper"></i>Municipal
                                                        </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>
                                                            <input type="radio" name="RD_memOp" value="Provincial"/><i
                                                                class="helper"></i>Provincial
                                                        </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>
                                                            <input type="radio" name="RD_memOp" value="Regional" /><i
                                                                class="helper"></i>Regional
                                                        </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>
                                                            <input type="radio" name="RD_memOp" value="National" /><i
                                                                class="helper"></i>National
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br><br><br><br><br>
                                        <div class="col-md-12" style="margin-bottom:20px">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4">
                                                        <div class="grid-material bg-general">Business Operation: (area
                                                            of
                                                            business)</div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input id="" type="text" class="form-control"
                                                            style="width: 90%;" name="RD_bussOp" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="grid-material bg-general">Category of Cooperative:
                                                        </div>
                                                    </div>
                                                    <br><br>
                                                    <div class="form-radio">
                                                        <div class="radio">
                                                            <div class="col-md-4">
                                                                <label>
                                                                    <input type="radio" name="RD_categofCoop" value="Primary" /><i
                                                                        class="helper"></i>Primary
                                                                </label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>
                                                                    <input type="radio" name="RD_categofCoop" value="Secondary" /><i
                                                                        class="helper"></i>Secondary
                                                                </label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>
                                                                    <input type="radio" name="RD_categofCoop" value="Tertiary" /><i
                                                                        class="helper"></i>Tertiary
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br> <br> <br> <br>
                                            <div class="row">
                                                <div class="col-md-12" style="margin-bottom: 25px;">
                                                    <div class="col-md-4">
                                                        <div class="grid-material bg-general">Type of Cooperative (as
                                                            to
                                                            nature of business)</div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input id="" type="text" class="form-control"
                                                            style="width: 90%;" name="RD_typeofCoop" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="margin-bottom: 20px;">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="grid-material bg-general">General Objectives
                                                            <small><em>(Included in your cooperative's Articles of
                                                                    Cooperation and By-laws)</em></small>
                                                        </div>
                                                    </div>
                                                    <br><br>
                                                    <div class="col-md-12">
                                                        <textarea rows="6" id="" type="text" class="form-control" style="width: 95%;" name="RD_genObj" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="margin-bottom: 20px;">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="grid-material bg-general">Program Products and
                                                            Services
                                                            <small><em>(Please write the programs, products and services
                                                                    included in your cooperative' strategic
                                                                    planning)</em></small>
                                                        </div>
                                                    </div>
                                                    <br><br>
                                                    <div class="col-md-12">
                                                        <textarea rows="6" id="" type="text" class="form-control" style="width: 95%;" name="RD_progpas" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="grid-material bg-general">Status of Accreditation
                                                        </div>
                                                        <div class="col-md-6" style="margin-top: 10px;">
                                                            <div class="col-md-3">
                                                                <div class="grid-material bg-general">Date</div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="text-center">
                                                                    <input id="" type="date"
                                                                        class="form-control" style="width: 250px;" name="RD_SOA_date"
                                                                        placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6" style="margin-top: 10px;">
                                                            <div class="col-md-6">
                                                                <div class="grid-material bg-general">Category of
                                                                    accreditation:</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="col-md-6" style="margin-top: 5px;">
                                                            <div class="col-md-3">
                                                                <div class="grid-material bg-general">Number</div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="text-center">
                                                                    <input id="" type="text"
                                                                        class="form-control" style="width: 250px;" name="RD_SOA_num"
                                                                        placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6" style="margin-top: 5px;">
                                                            <div class="form-radio">
                                                                <div class="radio">
                                                                    <div class="col-md-3">
                                                                        <label>
                                                                            <input type="radio" name="RD_categofAccre" value="Municipal"/><i
                                                                                class="helper"></i>Municipal
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label>
                                                                            <input type="radio" name="RD_categofAccre" value="Provincial"/><i
                                                                                class="helper"></i>Provincial
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label>
                                                                            <input type="radio" name="RD_categofAccre"  value="National"/><i
                                                                                class="helper"></i>National
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 text-right">
                                              <button type="submit" class="btn btn-primary">Next <i class="icon-arrow-right"></i></button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

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
