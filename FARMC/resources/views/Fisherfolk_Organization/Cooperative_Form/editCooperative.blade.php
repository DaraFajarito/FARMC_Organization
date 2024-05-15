<!DOCTYPE html>
<html lang="en">

<head>
    <title>COOPERATIVE EDIT FORM | Fisherfolk Organization | BFAR - FARMC</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">


    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

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
                            <span style="display:inline-block;"><input id="" type="text" name="as_of"
                                    class="md-form-control" style="width: 250px; text-align:center;"></span>)
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
                                                    value="Others" required>
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
                                        <textarea rows="6" id="" type="text" class="form-control" style="width: 95%;"
                                            name="short_history" placeholder=""></textarea>
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
                                                            <input type="radio" name="RD_memOp"
                                                                value="Municipal" /><i class="helper"></i>Municipal
                                                        </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>
                                                            <input type="radio" name="RD_memOp"
                                                                value="Provincial" /><i class="helper"></i>Provincial
                                                        </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>
                                                            <input type="radio" name="RD_memOp"
                                                                value="Regional" /><i class="helper"></i>Regional
                                                        </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>
                                                            <input type="radio" name="RD_memOp"
                                                                value="National" /><i class="helper"></i>National
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
                                                                    <input type="radio" name="RD_categofCoop"
                                                                        value="Primary" /><i
                                                                        class="helper"></i>Primary
                                                                </label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>
                                                                    <input type="radio" name="RD_categofCoop"
                                                                        value="Secondary" /><i
                                                                        class="helper"></i>Secondary
                                                                </label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>
                                                                    <input type="radio" name="RD_categofCoop"
                                                                        value="Tertiary" /><i
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
                                                        <textarea rows="6" id="" type="text" class="form-control" style="width: 95%;" name="RD_genObj"
                                                            placeholder=""></textarea>
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
                                                        <textarea rows="6" id="" type="text" class="form-control" style="width: 95%;" name="RD_progpas"
                                                            placeholder=""></textarea>
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
                                                                        class="form-control" style="width: 250px;"
                                                                        name="RD_SOA_date" placeholder="">
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
                                                                        class="form-control" style="width: 250px;"
                                                                        name="RD_SOA_num" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6" style="margin-top: 5px;">
                                                            <div class="form-radio">
                                                                <div class="radio">
                                                                    <div class="col-md-3">
                                                                        <label>
                                                                            <input type="radio"
                                                                                name="RD_categofAccre"
                                                                                value="Municipal" /><i
                                                                                class="helper"></i>Municipal
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label>
                                                                            <input type="radio"
                                                                                name="RD_categofAccre"
                                                                                value="Provincial" /><i
                                                                                class="helper"></i>Provincial
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label>
                                                                            <input type="radio"
                                                                                name="RD_categofAccre"
                                                                                value="National" /><i
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

                                        <br><br><br>

                                        <div class="grid-material bg-general"><b>II. &nbsp; MEMBERSHIP</b></div>
                                        <br>
                                        <div class="col-md-12">
                                            <div class="grid-material bg-general">a. &nbsp; Common Bond:</div>
                                        </div>
                                        <br>
                                        <div class="col-md-12" style="margin-bottom: 20px;">
                                            <br>
                                            <div class="form-radio">
                                                <div class="radio">
                                                    <div class="col-md-3">
                                                        <label>
                                                            <input type="radio" name="common_bond"
                                                                value="Institutional" /><i
                                                                class="helper"></i>Institutional
                                                        </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>
                                                            <input type="radio" name="common_bond"
                                                                value="Occupational" /><i
                                                                class="helper"></i>Occupational
                                                        </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>
                                                            <input type="radio" name="common_bond"
                                                                value="Residential" /><i
                                                                class="helper"></i>Residential
                                                        </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>
                                                            <input type="radio" name="common_bond"
                                                                value="Associational" /><i
                                                                class="helper"></i>Associational
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="grid-material bg-general">b. &nbsp; Composition of
                                                Membership:</div>
                                        </div>

                                        <div class="col-md-12" style="margin-bottom: 20px;">
                                            <table class="table table-bordered smaller-font">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" style="text-align: center;"
                                                            colspan="1"></th>
                                                        <th scope="col" style="text-align: center;"
                                                            colspan="3">For Primary</th>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col" style="text-align: center;">Particulars
                                                        </th>
                                                        <th scope="col" style="text-align: center;">Male</th>
                                                        <th scope="col" style="text-align: center;">Female</th>
                                                        <th scope="col" style="text-align: center;">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td> Number of Regular members</td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 100px; margin: auto;"
                                                                name="CoM_NRMem_male"></td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 100px; margin: auto;"
                                                                name="NRMem_female"></td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 100px; margin: auto;" name="NRMem_total"
                                                                readonly></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Number of Association members</td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 100px; margin: auto;"
                                                                name="CoM_NAMem_male"></td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 100px; margin: auto;"
                                                                name="NAMem_female"></td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 100px; margin: auto;" name="NAMem_total"
                                                                readonly></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Total number of members</td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 100px; margin: auto;"
                                                                name="CoM_TotalMem_male" readonly></td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 100px; margin: auto;" name="TMem_female"
                                                                readonly></td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 100px; margin: auto;" name="TMem_total"
                                                                readonly></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Target / Potential Membership (current year)</td>
                                                        <td style="text-align: center;"><input id="CoM_TargetMem_male"
                                                                type="text" class="form-control"
                                                                style="width: 100px; margin: auto;"
                                                                name="CoM_TargetMem_male"></td>
                                                        <td style="text-align: center;"><input id="TarMem_female"
                                                                type="text" class="form-control"
                                                                style="width: 100px; margin: auto;"
                                                                name="TarMem_female"></td>
                                                        <td style="text-align: center;"><input id="TarMem_total"
                                                                type="text" class="form-control"
                                                                style="width: 100px; margin: auto;"
                                                                name="TarMem_total"></td>
                                                    </tr>
                                                    <tr>
                                                    <tr>
                                                        <td>Total Membership</td>
                                                        <td style="text-align: center;"><input id="Total_male"
                                                                type="text" class="form-control"
                                                                style="width: 100px; margin: auto;"
                                                                name="CoM_Total_male" readonly></td>
                                                        <td style="text-align: center;"><input id="Total_female"
                                                                type="text" class="form-control"
                                                                style="width: 100px; margin: auto;"
                                                                name="Total_female" readonly></td>
                                                        <td style="text-align: center;"><input id="Total_total"
                                                                type="text" class="form-control"
                                                                style="width: 100px; margin: auto;" name="Total_total"
                                                                readonly></td>
                                                    </tr>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="grid-material bg-general">c. &nbsp; Number of Employees:
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <table class="table table-bordered smaller-font">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" style="text-align: center;"
                                                            colspan="1"></th>
                                                        <th scope="col" style="text-align: center;"
                                                            colspan="3">Current Year</th>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col" style="text-align: center;">Number of
                                                            Employees</th>
                                                        <th scope="col" style="text-align: center;">Male</th>
                                                        <th scope="col" style="text-align: center;">Female</th>
                                                        <th scope="col" style="text-align: center;">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td> Full-time</td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 100px; margin: auto;"
                                                                name="NoE_Fulltime_male"></td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 100px; margin: auto;"
                                                                name="Fulltime_female"></td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 100px; margin: auto;"
                                                                name="Fulltime_total" readonly></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Part-time</td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 100px; margin: auto;"
                                                                name="NoE_Parttime_male"></td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 100px; margin: auto;"
                                                                name="Parttime_female"></td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 100px; margin: auto;"
                                                                name="Parttime_total" readonly></td>
                                                    </tr>


                                                    <tr>
                                                        <td style="text-align: center;">Total Employee</td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 100px; margin: auto;"
                                                                name="NoE_Total_male" readonly></td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 100px; margin: auto;"
                                                                name="TotalEmp_female" readonly></td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 100px; margin: auto;"
                                                                name="TotalEmp_total" readonly></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="grid-material bg-general"><b>III. &nbsp; ASSETS:</b></div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-12" style="margin-bottom: 25px;">
                                                <div class="col-md-2">
                                                    <div class="grid-material bg-general">Total Assets</div>
                                                </div>
                                                <div class="col-md-10">
                                                    <input id="" type="text" class="form-control"
                                                        style="width: 100%;" placeholder="" name="total_assets">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="grid-material bg-general"><b>IV. &nbsp; OFFICERS:</b></div>
                                        <div class="col-md-12" style="margin-bottom: 20px;">
                                            <table class="table">
                                                <thead style="font-size: 13px">
                                                    <tr>
                                                        <th scope="col" style="text-align: center;">Position</th>
                                                        <th scope="col" style="text-align: center;">Name</th>
                                                        <th scope="col" style="text-align: center;">Civil Status
                                                        </th>
                                                        <th scope="col" style="text-align: center;">Gender</th>
                                                        <th scope="col" style="text-align: center;">Birthday</th>
                                                        <th scope="col" style="text-align: center;">Age</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Board of Directors:</td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;"
                                                                name="BoardofDir_name1"></td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="cs1">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="gen1">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="date" class="form-control"
                                                                style="width: 120px; margin: auto;" name="birth1"
                                                                onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 80px; margin: auto;" name="age1"
                                                                readonly>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp; Chairperson</td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;"
                                                                name="Chairperson_name2"></td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="cs2">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="gen2">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="date" class="form-control"
                                                                style="width: 120px; margin: auto;" name="birth2"
                                                                onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 80px; margin: auto;" name="age2"
                                                                readonly>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp; Vice-chairperson</td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;"
                                                                name="Vchair_name3"></td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="cs3">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="gen3">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="date" class="form-control"
                                                                style="width: 120px; margin: auto;" name="birth3"
                                                                onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 80px; margin: auto;" name="age3"
                                                                readonly>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp; Board Member</td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="BM_name4">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="cs4">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="gen4">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="date" class="form-control"
                                                                style="width: 120px; margin: auto;" name="birth4"
                                                                onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 80px; margin: auto;" name="age4"
                                                                readonly>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp; Board Member</td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="BM_name5">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="cs5">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="gen5">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="date" class="form-control"
                                                                style="width: 120px; margin: auto;" name="birth5"
                                                                onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 80px; margin: auto;" name="age5"
                                                                readonly>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp; Board Member</td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="BM_name6">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="cs6">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="gen6">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="date" class="form-control"
                                                                style="width: 120px; margin: auto;" name="birth6"
                                                                onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 80px; margin: auto;" name="age6"
                                                                readonly>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp; Board Member</td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="BM_name7">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="cs7">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="gen7">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="date" class="form-control"
                                                                style="width: 120px; margin: auto;" name="birth7"
                                                                onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 80px; margin: auto;" name="age7"
                                                                readonly>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp; Board Member</td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="BM_name8">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="cs8">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="gen8">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="date" class="form-control"
                                                                style="width: 120px; margin: auto;" name="birth8"
                                                                onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 80px; margin: auto;" name="age8"
                                                                readonly>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp; Board Member</td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="BM_name9">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="cs9">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="gen9">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="date" class="form-control"
                                                                style="width: 120px; margin: auto;" name="birth9"
                                                                onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 80px; margin: auto;" name="age9"
                                                                readonly>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp; Board Member</td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="BM_name10">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="cs10">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="gen10">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="date" class="form-control"
                                                                style="width: 120px; margin: auto;" name="birth10"
                                                                onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 80px; margin: auto;" name="age10"
                                                                readonly>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>General Manager</td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;"
                                                                name="GenMan_name11"></td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="cs11">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="gen11">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="date" class="form-control"
                                                                style="width: 120px; margin: auto;" name="birth11"
                                                                onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 80px; margin: auto;" name="age11"
                                                                readonly>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Secretary</td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="Sec_name12">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="cs12">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="gen12">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="date" class="form-control"
                                                                style="width: 120px; margin: auto;" name="birth12"
                                                                onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 80px; margin: auto;" name="age12"
                                                                readonly>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Treasurer</td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;"
                                                                name="Treas_name13"></td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="cs13">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 150px; margin: auto;" name="gen13">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="date" class="form-control"
                                                                style="width: 120px; margin: auto;" name="birth13"
                                                                onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                        </td>
                                                        <td style="text-align: center;"><input id=""
                                                                type="text" class="form-control"
                                                                style="width: 80px; margin: auto;" name="age13"
                                                                readonly>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="grid-material bg-general"><b>COMMITTEE OFFICERS
                                        </b></div>
                                        <div><small> <span style="color: red"> This section <small><b>
                                                            "COMMITTEES"</b></small> cannot be edited. Please ensure
                                                    that all fields are filled out when adding committees.
                                                </span></small></div>
                                        <br>
                                    </div>

                                    <div class="col-md-12" style="margin-bottom:20px">
                                        <div class="grid-material bg-general"><b>VI. &nbsp; LIST OF MEMBERS
                                            </b></div>
                                        <div><small> <span style="color: red"> This section <small><b> "LIST OF
                                                            MEMBERS"</b></small> cannot be edited. Please ensure that
                                                    all fields are filled out when adding members. </span></small></div>

                                        <br><br>
                                        <div class="grid-material bg-general"><b>VII. &nbsp; ORGANIZATIONAL
                                                STRUCTURE</b></div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-12" style="margin-bottom: 10px;">
                                                <div class="col-md-3">
                                                    <div class="grid-material bg-general">Organizational Structure:
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <input id="" type="file" class="form-control"
                                                        style="width: 100%" placeholder="" name="orgstruct_file">

                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="grid-material bg-general"><b>VIII. &nbsp; CONTACT DETAILS</b>
                                        </div>
                                        <br>
                                        <div class="row" style="margin-bottom: 20px;">
                                            <div class="col-md-12" style="margin-bottom: 10px;">
                                                <div class="col-md-2">
                                                    <div class="grid-material bg-general">Name:</div>
                                                </div>
                                                <div class="col-md-10">
                                                    <input id="" type="text" class="form-control"
                                                        style="width: 100%;" placeholder="" name="CD_name">
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="margin-bottom: 10px;">
                                                <div class="col-md-2">
                                                    <div class="grid-material bg-general">Designation:</div>
                                                </div>
                                                <div class="col-md-10">
                                                    <input id="" type="text" class="form-control"
                                                        style="width: 100%;" placeholder="" name="CD_design">
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="margin-bottom: 10px;">
                                                <div class="col-md-2">
                                                    <div class="grid-material bg-general">Tell / Cell No.:</div>
                                                </div>
                                                <div class="col-md-10">
                                                    <input id="" type="text" class="form-control"
                                                        style="width: 100%;" placeholder="" name="CD_tell">
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="margin-bottom: 10px;">
                                                <div class="col-md-2">
                                                    <div class="grid-material bg-general">Email Address:</div>
                                                </div>
                                                <div class="col-md-10">
                                                    <input id="" type="email" class="form-control"
                                                        style="width: 100%;" placeholder="" name="CD_email">
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="margin-bottom: 10px;">
                                                <div class="col-md-2">
                                                    <div class="grid-material bg-general" style="margin-top: 15px">Facebook Account:</div>
                                                </div>
                                                <div class="col-md-10" style="margin-top: 10px;">
                                                    <input id="" type="text" class="form-control"
                                                        style="width: 100%;" placeholder="" name="CD_FBacc">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-right">
                                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>
                                                &nbsp; SAVE</button>
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
        function calculateAge(birthDateInput, ageInput) {
            var birthDate = new Date(birthDateInput.value);
            var today = new Date();
            var age = today.getFullYear() - birthDate.getFullYear();
            var monthDiff = today.getMonth() - birthDate.getMonth();
            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            ageInput.value = age;
        }
    </script>

     <script>
        document.addEventListener('DOMContentLoaded', function() {
            const nrMaleInput = document.querySelector('input[name="CoM_NRMem_male"]');
            const nrFemaleInput = document.querySelector('input[name="NRMem_female"]');
            const nrTotalInput = document.querySelector('input[name="NRMem_total"]');

            const naMaleInput = document.querySelector('input[name="CoM_NAMem_male"]');
            const naFemaleInput = document.querySelector('input[name="NAMem_female"]');
            const naTotalInput = document.querySelector('input[name="NAMem_total"]');

            const totalMaleInput = document.querySelector('input[name="CoM_TotalMem_male"]');
            const totalFemaleInput = document.querySelector('input[name="TMem_female"]');
            const totalTotalInput = document.querySelector('input[name="TMem_total"]');

            const targetMaleInput = document.querySelector('input[name="CoM_TargetMem_male"]');
            const targetFemaleInput = document.querySelector('input[name="TarMem_female"]');
            const targetTotalInput = document.querySelector('input[name="TarMem_total"]');

            const totalMale = document.querySelector('input[name="CoM_Total_male"]');
            const totalFemale = document.querySelector('input[name="Total_female"]');
            const totalTotal = document.querySelector('input[name="Total_total"]');

            function calculateAndSetTotal(maleInput, femaleInput, totalInput) {
                const maleCount = parseInt(maleInput.value) || 0;
                const femaleCount = parseInt(femaleInput.value) || 0;
                totalInput.value = maleCount + femaleCount;
            }

            function calculateTotalMembers() {
                const totalMaleCount = (parseInt(nrMaleInput.value) || 0) + (parseInt(naMaleInput.value) || 0);
                const totalFemaleCount = (parseInt(nrFemaleInput.value) || 0) + (parseInt(naFemaleInput.value) ||
                0);
                totalMaleInput.value = totalMaleCount;
                totalFemaleInput.value = totalFemaleCount;
                totalTotalInput.value = totalMaleCount + totalFemaleCount;

                const targetMaleCount = parseInt(targetMaleInput.value) || 0;
                const targetFemaleCount = parseInt(targetFemaleInput.value) || 0;
                targetTotalInput.value = targetMaleCount + targetFemaleCount;

                totalMale.value = totalMaleCount + targetMaleCount;
                totalFemale.value = totalFemaleCount + targetFemaleCount;
                totalTotal.value = (totalMaleCount + targetMaleCount) + (totalFemaleCount + targetFemaleCount);

                // Ensure there's only one zero in the totalTotal field
                if (totalTotal.value === '0') {
                    totalTotal.value = '0';
                }
            }

            nrMaleInput.addEventListener('input', function() {
                calculateAndSetTotal(nrMaleInput, nrFemaleInput, nrTotalInput);
                calculateTotalMembers();
            });

            nrFemaleInput.addEventListener('input', function() {
                calculateAndSetTotal(nrMaleInput, nrFemaleInput, nrTotalInput);
                calculateTotalMembers();
            });

            naMaleInput.addEventListener('input', function() {
                calculateAndSetTotal(naMaleInput, naFemaleInput, naTotalInput);
                calculateTotalMembers();
            });

            naFemaleInput.addEventListener('input', function() {
                calculateAndSetTotal(naMaleInput, naFemaleInput, naTotalInput);
                calculateTotalMembers();
            });

            targetMaleInput.addEventListener('input', function() {
                calculateTotalMembers();
            });

            targetFemaleInput.addEventListener('input', function() {
                calculateTotalMembers();
            });

            // Initial calculation
            calculateAndSetTotal(nrMaleInput, nrFemaleInput, nrTotalInput);
            calculateAndSetTotal(naMaleInput, naFemaleInput, naTotalInput);
            calculateTotalMembers();
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ftMaleInput = document.querySelector('input[name="NoE_Fulltime_male"]');
            const ftFemaleInput = document.querySelector('input[name="Fulltime_female"]');
            const ftTotalInput = document.querySelector('input[name="Fulltime_total"]');

            const ptMaleInput = document.querySelector('input[name="NoE_Parttime_male"]');
            const ptFemaleInput = document.querySelector('input[name="Parttime_female"]');
            const ptTotalInput = document.querySelector('input[name="Parttime_total"]');

            const totalMaleInput = document.querySelector('input[name="NoE_Total_male"]');
            const totalFemaleInput = document.querySelector('input[name="TotalEmp_female"]');
            const totalTotalInput = document.querySelector('input[name="TotalEmp_total"]');

            function calculateAndSetTotal(maleInput, femaleInput, totalInput) {
                const maleCount = parseInt(maleInput.value) || 0;
                const femaleCount = parseInt(femaleInput.value) || 0;
                totalInput.value = maleCount + femaleCount;
            }

            function calculateTotalEmployees() {
                const totalMaleCount = (parseInt(ftMaleInput.value) || 0) + (parseInt(ptMaleInput.value) || 0);
                const totalFemaleCount = (parseInt(ftFemaleInput.value) || 0) + (parseInt(ptFemaleInput.value) ||
                    0);
                totalMaleInput.value = totalMaleCount;
                totalFemaleInput.value = totalFemaleCount;
                totalTotalInput.value = totalMaleCount + totalFemaleCount;
            }

            ftMaleInput.addEventListener('input', function() {
                calculateAndSetTotal(ftMaleInput, ftFemaleInput, ftTotalInput);
                calculateTotalEmployees();
            });

            ftFemaleInput.addEventListener('input', function() {
                calculateAndSetTotal(ftMaleInput, ftFemaleInput, ftTotalInput);
                calculateTotalEmployees();
            });

            ptMaleInput.addEventListener('input', function() {
                calculateAndSetTotal(ptMaleInput, ptFemaleInput, ptTotalInput);
                calculateTotalEmployees();
            });

            ptFemaleInput.addEventListener('input', function() {
                calculateAndSetTotal(ptMaleInput, ptFemaleInput, ptTotalInput);
                calculateTotalEmployees();
            });

            // Initial calculation
            calculateAndSetTotal(ftMaleInput, ftFemaleInput, ftTotalInput);
            calculateAndSetTotal(ptMaleInput, ptFemaleInput, ptTotalInput);
            calculateTotalEmployees();
        });
    </script>
</body>

</html>
